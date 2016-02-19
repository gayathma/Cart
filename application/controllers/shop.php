<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('item_shop');
        $this->load->model('cart_data');
        $this->load->library('pagination_custom');
    }

    public function index() {
        $data['items'] = $this->item_shop->GetAllItems();
        $this->load->view('shop', $data);
    }

    public function buy($id = "", $title = "") {
        $title = str_replace("-", " ", $title);
        $trimTitle = trim($title);
        $item = $this->item_shop->GetItem($id, $trimTitle);
        if ($item) {
            $data['item'] = $item;
            $itemByType = $this->item_shop->GetItemByType($item['ItemType'],$item['ItemID']);
            $data['itemByType'] = $itemByType;
            $this->load->view('product-page',$data);
        } else {
            redirect('/shop', 'location', 301);
        }
    }

    public function addLikes(){
        if ($this->session->userdata("user_id") != "") {
            $item_id = $this->input->post('item_id');

            $data = array(
                    "ItemID" => $item_id,
                    "UserID" => $this->session->userdata("user_id"),
                    "Status" => '1'
                );

            echo $this->item_shop->addLike($item_id,$data);

        } else {
            $this->load->view('register');
        }
    }

    public function order() {
        if ($this->session->userdata("user_id") != "") {
            $this->load->view('order');
        } else {
            $this->load->view('register');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */