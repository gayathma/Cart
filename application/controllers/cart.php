<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('item_shop');
        $this->load->model('cart_data');
    }

    public function addItemFast() {
        if ($this->input->post("iid") != "") {
            if ($this->session->userdata("status")) {
                $itemID = $this->input->post("iid");
                $data = array(
                    "ItemID" => $itemID,
                    "UserID" => $this->session->userdata('user_id'),
                    "Qty" => '1'
                );
                if ($this->cart_data->saveItem($data)) {
                    echo 'added';
                } else {
                    echo 'no';
                }
            }else{
                echo 'lgfl';
            }
        }
    }

    public function index() {
        if ($this->session->userdata('status')) {
            $data['items'] = $this->cart_data->getCartItems();
            $this->load->view('cart',$data);
      
        } else {
            $redirect = $_SERVER['HTTP_REFERER'];
            redirect("$redirect", "location");
        }
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */