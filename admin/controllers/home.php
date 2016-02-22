<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('USER_LOGGED_IN') != TRUE) {
            redirect(site_url() . '/login/load_login');
        } else {

            $this->load->model('users/user_model');
            $this->load->model('users/user_service');
        }
    }

    public function admin_home()
    {

        $partials = array('content' => 'dashboard/admin_dashboard_view'); //load the view
        $this->template->load('template/main_template', $partials); //load teh template
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */