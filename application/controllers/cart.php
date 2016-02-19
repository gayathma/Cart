<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('item_shop');
        $this->load->model('cart_data');
        $this->load->model('user');
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
                    echo $this->cart_data->getCartItems();
                } else {
                    echo 0;
                }
            }else{
                $this->load->view('register');
            }
        }
    }

    public function index() {
        if ($this->session->userdata('status')) {
            $data['items'] = $this->cart_data->getCartItemsDetails();
            $userID = $this->session->userdata("user_id");
            $data['userData'] = $this->user->getUserDataFromID($userID);
            $this->load->view('cart',$data);

        } else {
            $redirect = $_SERVER['HTTP_REFERER'];
            redirect("$redirect", "location");
        }
    }
    
    public function deleteItem(){
        if ($this->session->userdata("user_id") != "") {
            $item_id = $this->input->post('item_id');

            $this->cart_data->DeleteCartItems($item_id);

            echo $cart_count = $this->cart_data->getCartItems();

        } else {
            $redirectto = $_SERVER['HTTP_REFERER'];
            redirect($redirectto, 'location');
        }
    }

    public function updateItemQty(){
        if ($this->session->userdata("user_id") != "") {
            $item_id = $this->input->post('item_id');
            $qty = $this->input->post('qty');

            $this->cart_data->updateCartItemQty($item_id, $qty);

            echo $cart_count = $this->cart_data->getCartItems();

        } else {
            $redirectto = $_SERVER['HTTP_REFERER'];
            redirect($redirectto, 'location');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */