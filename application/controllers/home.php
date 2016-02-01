<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
    }

    public function registerUser() {
        if ($this->input->post('active') == 'ok') {
            $email = $this->input->post('email');
            $pass = $this->input->post('password');
            $conPass = $this->input->post('ConfirmPass');

            if ($email != "" && $pass != "" && $conPass != "") {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if ($this->user->CheckEmailExit($email)) {
                        if (strlen($pass) > 8) {
                            if ($pass === $conPass) {
                                $data = array(
                                    "Email" => $email,
                                    "Password" => $pass
                                );
                                if ($this->user->registerUser($email, $data)) {
                                    echo 'saved';
                                } else {
                                    echo 'notsaved';
                                }
                            } else {
                                echo 'passnotmatch';
                            }
                        } else {
                            echo 'passlengthinvalid';
                        }
                    }else{
                        echo 'emailinuse';
                    }
                } else {
                    echo 'emailnotvalid';
                }
            } else {
                echo 'allempty';
            }
        } else {
            $redirectto = $_SERVER['HTTP_REFERER'];
            redirect($redirectto, 'location');
        }
    }

    public function checkLogin() {
        if ($this->input->post('active') == "ok") {
            $email = $this->input->post('email');
            $pass = $this->input->post('password');
            $checkUser = $this->user->checkUser($email, $pass);
            if ($checkUser) {
                if ($email == $checkUser['Email'] && $pass == $checkUser['password']) {
                    $this->session->set_userdata(array(
                        'user_id' => $checkUser['UserID'],
                        'email' => $checkUser['Email'],
                        'first_name' => $checkUser['FirstName'],
                        'status' => TRUE
                    ));
                    echo 'ok';
                } else {
                    echo 'failed';
                }
            } else {
                echo 'failed';
            }
        } else {
            
        }
    }

    public function logout() {
        if ($this->session->userdata("status")) {
            $this->session->sess_destroy();
            $redirect = $_SERVER['HTTP_REFERER'];
            redirect("$redirect", "location");
        } else {
            $redirect = $_SERVER['HTTP_REFERER'];
            redirect("$redirect", "location");
        }
    }

    public function index() {
        $this->load->view('home');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */