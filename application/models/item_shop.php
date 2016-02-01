<?php

Class Item_shop extends CI_Model{
    
    public function GetAllItems(){
        $this->db->select('*')->from('item');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function GetItem($id,$title){
        $this->db->select('*')->from('item')->where(array("ItemID"=>$id,"ItemTitle"=>$title));
        $query = $this->db->get();
        $count = $query->num_rows();
        if($count>0){
            return $query->row_array();
        }else{
            return FALSE;
        }
    }
    
    public function GetItemByType($type,$id){
        $this->db->select('*')->from('item')->where(array("ItemType"=>$type,"ItemID !="=>$id))->order_by("ItemID", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }
    
}