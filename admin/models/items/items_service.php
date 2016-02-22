<?php

class Items_service extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function save_item($item_model){
        return $this->db->insert('item', $item_model);
    }

    public function get_items()
    {
        $res = $this->db->get_where(
            'item'
        );
        return $res->result();
    }


    function delete_item($id) {
        return $this->db->delete('item', array('ItemID' => $id));
    }

    function get_item_by_id($id) {

        $query = $this->db->get_where('item', array('ItemID' => $id));
        return $query->row();
    }

    function update_item($item_model) {

        $data = array(
            'ItemName' => $item_model->get_ItemName(),
            'ItemPrice' => $item_model->get_ItemPrice(),
            'ItemDes' => $item_model->get_ItemDes(),
            'ItemTitle' => $item_model->get_ItemTitle(),
            'ItemType' => $item_model->get_ItemType(),
            'ItemSize' => $item_model->get_ItemSize(),
            'ItemImg' => $item_model->get_ItemImg(),
            'ItemImg2' => $item_model->get_ItemImg2(),
            'ItemImg3' => $item_model->get_ItemImg3(),
            'ItemFor' => $item_model->get_ItemFor()
        );

        $this->db->where('ItemID', $item_model->get_ItemID());
        return $this->db->update('item', $data);
    }

}


?>
