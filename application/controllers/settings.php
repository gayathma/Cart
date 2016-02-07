<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('cart_data');
    }

    public function index() {
        if ($this->session->userdata("user_id") != "") {
            $userID = $this->session->userdata("user_id");
            $data['userData'] = $this->user->getUserDataFromID($userID);
            $this->load->view('settings', $data);
        } else {
            redirect(base_url(), 'location');
        }
    }

    public function UpdateSettings() {
        if ($this->session->userdata('status')) {
            
        } else {
            $redirectto = $_SERVER['HTTP_REFERER'];
            redirect($redirectto, 'location');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */