<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('users/user_model');
        $this->load->model('users/user_service');
    }

    function load_forgot_pass()
    {

        $this->template->load('template/forgot_pass', null);
    }

    function load_login()
    {

        if ($this->session->userdata('USER_LOGGED_IN')) {

            redirect(site_url() . '/home/admin_home');

        } else {
            $this->template->load('template/login');
        }
    }

    //Assign a new session
    function authenticate_user()
    {

        $user_model   = new User_model();
        $user_service = new User_service();

        $user_model->set_Email($this->input->post('login_username', TRUE));
        $user_model->set_password(md5($this->input->post('login_password', TRUE)));

        $result_user = $user_service->authenticate_user_with_password($user_model);

        if (count($result_user) == 0) {
            $logged_user_result = false;
        } else {
            $logged_user_result = true;
        }

        if ($logged_user_result) {

            $this->session->set_userdata('USER_ID', $result_user->UserID);
            $this->session->set_userdata('USER_FULLNAME', $result_user->FirstName);
            $this->session->set_userdata('USER_NAME', $result_user->FirstName);
            $this->session->set_userdata('USER_TYPE', 'admin');
            $this->session->set_userdata('USER_EMAIL', $result_user->Email);
            $this->session->set_userdata('USER_LOGGED_IN', 'TRUE');


            echo 1;
        } else {
            echo 0;
        }
    }

    function logout()
    {
        $user_model   = new User_model();
        $user_service = new User_service();

        $this->session->set_userdata('USER_LOGGED_IN', 'FALSE');

        $this->session->sess_destroy();
        redirect(site_url() . '/login/load_login');
    }

}
