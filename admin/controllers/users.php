<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();


            $this->load->model('users/user_model');
            $this->load->model('users/user_service');

    }

    function manage_users()
    {
        $user_service      = new User_service();

        $data['results'] = $user_service->get_all_users();
        

        $parials = array('content' => 'users/user_accounts');
        $this->template->load('template/main_template', $parials, $data);
    }


    /*
     * Function to delete user
     */

    function delete_users()
    {
        $user_service = new User_service();
        echo $user_service->delete_users(trim($this->input->post('id', TRUE)));

    }

   
    //check for user name

    public function check_user_name()
    {
        $user_service = new User_service();

        $user_count = $user_service->check_user_name($this->input->post('username', TRUE));
        if ($user_count == 0) {
            echo "1";
        } else {
            echo "0";
        }

    }

    /*
     * Function to update user password
     */

    function reset_password()
    {
        $user_model   = new User_model();
        $user_service = new User_service();

        $user_model->set_user_name($this->input->post('txtusername', TRUE));
        $user_model->set_password(md5($this->input->post('txtpassword', TRUE)));

        echo $user_service->update_password($user_model);
    }

}
