<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test2 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$districts = $this->db->get('district');
		echo '<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">';
		foreach ($districts->result() as $district) {
			echo '<div><a href="' . base_url('test2/map/' . $district->districtId) .'">' . $district->districtName . '</a></div>';
		}
	}

	public function map($id) {
		$districts = $this->db->get_where('district', array('districtId'=>$id));
		$district = $districts->row();
		$this->load->view('test2_map', array('district' => $district));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */