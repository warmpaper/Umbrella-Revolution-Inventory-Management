<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Session extends CI_Session {

    function __construct() {
        parent::__construct();
    }

    function sess_update() {
        if (!$this->CI->input->is_ajax_request()) {
            parent::sess_update();
        }
    }
}