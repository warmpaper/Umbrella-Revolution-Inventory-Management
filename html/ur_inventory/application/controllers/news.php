<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller {

    public function getLatestNews($num = 10) {
        $query = $this->db->select('news.description, news.time, district.districtName')
            ->from('news')
            ->order_by('news.time', 'desc')
            ->limit(10)
            ->join('district', 'district.districtId = news.districtId')
            ->get();
        
        $this->load->view('_latestNews', array('news' => $query->result()));
    }

    public function addNews() {
        if (!$this->isLoggedIn()) {
            echo 'no rights';
            exit;
        }

        $districts = $this->db->get('district');
        $this->load->view('_addNews', array('districts' => $districts->result()));
    }

    //post
    public function handleAddNews()
    {
        if (!$this->isLoggedIn()) {
            echo 'no rights';
            exit;
        }
        
        $description = $this->input->post('description');
        $districtId = $this->input->post('district');

        if ($description === '' || $districtId === '') {
            echo 'please input description / district';
            exit;
        }

        $this->db->set('description', $description);
        $this->db->set('time', 'now()', FALSE);
        $this->db->set('districtId', $districtId);
        $this->db->set('userId', $this->session->userdata('userId'));

        $this->db->insert('news');
        echo 'added';
    }
}