<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Items extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('USER_LOGGED_IN')) {
            redirect(site_url() . '/login/load_login');
        } else {
            $this->load->model('items/items_model');
            $this->load->model('items/items_service');

        }
    }

    public function manage_items()
    {
        $item_service = new Items_service();

        $data['items']      = $item_service->get_items();
        $partials = array('content' => 'items/item_list'); //load the view
        $this->template->load('template/main_template', $partials, $data); //load teh template
    }

    function save_item()
    {

        $item_model = new Items_model();
        $item_service = new Items_service();

        $item_model->set_ItemName($this->input->post('name', TRUE));
        $item_model->set_ItemPrice($this->input->post('price', TRUE));
        $item_model->set_ItemDes($this->input->post('des', TRUE));
        $item_model->set_ItemTitle($this->input->post('title', TRUE));
        $item_model->set_ItemImg($this->input->post('image', TRUE));
        $item_model->set_ItemType($this->input->post('colour', TRUE));
        $item_model->set_ItemImg2($this->input->post('image2', TRUE));
        $item_model->set_ItemImg3($this->input->post('image3', TRUE));
        $sizes = (!empty($this->input->post('size', TRUE)))? implode(',', $this->input->post('size', TRUE)) : '';
        $item_model->set_ItemSize($sizes);

        echo $item_service->save_item($item_model);
    }

    /**
     * This is to delete a item
     */
    function delete_item()
    {

        $item_service = new Items_service();

        echo $item_service->delete_item(trim($this->input->post('id', TRUE)));
    }

    /**
     * Edit item pop up content set up and then send .
     */
    function load_edit_item_content()
    {
        $item_service = new Items_service();

        $data['item']       = $item_service->get_item_by_id(
            trim($this->input->post('item_id', TRUE))
        );

        echo $this->load->view('items/edit_item', $data, TRUE);
    }

    /*
     * This function is to update the item
     */

    function edit_item()
    {

        $item_model = new Items_model();
        $item_service = new Items_service();

        $item_model->set_ItemID($this->input->post('item_id', TRUE));
        $item_model->set_ItemName($this->input->post('name', TRUE));
        $item_model->set_ItemPrice($this->input->post('price', TRUE));
        $item_model->set_ItemDes($this->input->post('des', TRUE));
        $item_model->set_ItemTitle($this->input->post('title', TRUE));
        $item_model->set_ItemImg($this->input->post('image', TRUE));
        $item_model->set_ItemType($this->input->post('colour', TRUE));
        $item_model->set_ItemImg2($this->input->post('image2', TRUE));
        $item_model->set_ItemImg3($this->input->post('image3', TRUE));
        $sizes = (!empty($this->input->post('size', TRUE)))? implode(',', $this->input->post('size', TRUE)) : '';
        $item_model->set_ItemSize($sizes);


        echo $item_service->update_item($item_model);
    }

   

    function upload_image() {

        $uploaddir  = './uploads/';
        $unique_tag = 'it';

        $filename = $unique_tag . time() . '-' . basename($_FILES['uploadfile']['name']); //this is the file name
        $file     = $uploaddir . $filename; // this is the full path of the uploaded file

        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {

            echo $filename;
        } else {
            echo "error";
        }
    }

}
