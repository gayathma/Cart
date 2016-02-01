<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('item_shop');
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */