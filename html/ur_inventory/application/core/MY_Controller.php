<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function isLoggedIn() {
        return $this->session->userdata('isLoggedIn');
    }

    function isAdmin() {
        return $this->session->userdata('role') === 'admin';
    }

    function isHelper() {
        return $this->session->userdata('role') === 'helper';
    }
}