<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

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
		$this->load->view('test_header');
		$this->load->view('test_notify');
		$this->load->view('test_landing');
		$this->load->view('test_footer');
	}
	
	public function listing($distict = 'mk'){
		$data['distict']=$distict;
		$this->load->view('test_header');
		$this->load->view('test_notify');
		$this->load->view('test_listing',$data);
		$this->load->view('test_footer');
	}
	
	public function login (){
		$this->load->view('test_header');
		$this->load->view('test_notify');
		$this->load->view('test_login');
		$this->load->view('test_footer');
	}
	
	public function map($districtcode = '1'){
		$this->load->view('test_header');
		$this->load->view('test_notify');
		$this->load->view('test_map');
		$this->load->view('test_footer');	
	}
	
	public function resources($resources = 'Food'){
	$data['resources']=$resources;
		$this->load->view('test_header');
		$this->load->view('test_notify');
		$this->load->view('test_resources',$data);
		$this->load->view('test_footer');	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */