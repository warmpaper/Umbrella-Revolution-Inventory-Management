<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	public function login()
	{
		$this->load->view('_login');
	}

    //post
    public function handleLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username === '' || $password === '') {
            echo 'please input username / password';
            exit;
        }

        $query = $this->db->get_where('user', array('username' => $username));

        if ($query->num_rows() == 0) {
            echo 'wrong username / password';
            exit;
        }
        
        $user = $query->row();

        if (!$this->_hashPw($password, $user->password, TRUE)) {
            echo 'wrong username / password';
            exit;
        }

        $this->session->set_userdata(array(
            'userId' => $user->userId,
            'username' => $user->username,
            'role' => $user->role,
            'districtId' => $user->districtId,
            'isLoggedIn' => TRUE));

        $this->load->view('_msg', array('msg' => $user->username . ' login success'));
    }

    public function addUser() {
        if (!$this->isAdmin()) {
            echo 'no admin rights';
            exit;
        }

        $districts = $this->db->get('district');
        $this->load->view('_addUser', array('districts' => $districts->result()));
    }

    //post
    public function handleAddUser() {
        if (!$this->isAdmin()) {
            echo 'no admin rights';
            exit;
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');
        $districtId = $this->input->post('district');

        if ($username === '' || $password === '' || $districtId === '' || $role === '') {
            echo 'please input username / password / district / role';
            exit;
        }

        $this->db->insert('user', array(
            'username' => $username,
            'password' => $this->_hashPw($password),
            'role' => $role,
            'districtId' => $districtId));

        echo 'added';
    }

    public function logout() {
        $this->session->sess_destroy();
        echo 'logout ed';
    }

    private function _genSalt() {
        return base64_encode(mcrypt_create_iv(12, MCRYPT_DEV_URANDOM));
    }
        
    private function _hashPw($pw = '', $hash = '', $isVerify = FALSE) {
        if ($isVerify) {
            return (strcmp(crypt($pw, $hash), $hash) === 0 ? TRUE : FALSE);
        } else {
            return crypt($pw, '$5$' . $this->_genSalt() . '$');
        }
    }
}