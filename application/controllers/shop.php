<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('item_shop');
        $this->load->model('cart_data');
        $this->load->library('email');
        $this->load->library('pagination_custom');
    }

    public function index($start = 0) {
        $config                = array();
        $config["base_url"]    = site_url() . "/shop/index/";
        $config["per_page"]    = 1;
        $config["uri_segment"] = 3;
        $config["num_links"]   = 4;

        $data['items']        = $this->item_shop->GetAllItems();
        $config["total_rows"] = count($data['items']);

        $this->pagination_custom->initialize($config);
        $data["links"] = $this->pagination_custom->create_links();

        $this->load->view('shop', $data);
    }

    public function buy($id = "", $title = "") {
        $title     = str_replace("-", " ", $title);
        $trimTitle = trim($title);
        $item      = $this->item_shop->GetItem($id, $trimTitle);
        if ($item) {
            $data['item']       = $item;
            $itemByType         = $this->item_shop->GetItemByType($item['ItemType'], $item['ItemID']);
            $data['itemByType'] = $itemByType;
            $this->load->view('product-page', $data);
        } else {
            redirect('/shop', 'location', 301);
        }
    }

    public function addLikes() {
        if ($this->session->userdata("user_id") != "") {
            $item_id = $this->input->post('item_id');
            if ($this->item_shop->GetItemLikesCountForUser($item_id, $this->session->userdata("user_id")) > 0) {
                echo $this->item_shop->deleteLike($item_id, $this->session->userdata("user_id"));
            } else {
                $data = array(
                    "ItemID" => $item_id,
                    "UserID" => $this->session->userdata("user_id"),
                    "Status" => '1'
                );

                echo $this->item_shop->addLike($item_id, $data);
            }
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

    public function orderSend() {
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Jager <thularaofficial@gmail.com>' . "\r\n";
        
        $msg = '';
        
        mail('thularaofficial@gmail.com', 'Custom Order', $msg, $headers);

        echo '1';
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */