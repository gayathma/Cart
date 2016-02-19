<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('cart_data');
        $this->load->model('item_shop');
    }

    public function index() {
        if ($this->session->userdata("user_id") != "") {
            $userID = $this->session->userdata("user_id");
            $data['userData'] = $this->user->getUserDataFromID($userID);
            $data['historyData'] = $this->cart_data->getPastCartItems();
            $this->load->view('settings', $data);
        } else {
            $this->load->view('register');
        }
    }

    public function UpdateSettings() {
        if ($this->session->userdata("user_id") != "") {
            $data = array(
                    "FirstName" => $this->input->post('FirstName'),
                    "LastName" => $this->input->post('LastName'),
                    "Address" => $this->input->post('Address'),
                    "City" => $this->input->post('City'),
                    "password" => md5($this->input->post('password'))
                );

            echo $this->user->updateUserData($this->session->userdata("user_id"), $data);
        } else {
            $redirectto = $_SERVER['HTTP_REFERER'];
            redirect($redirectto, 'location');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */