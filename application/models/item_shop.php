<?php

Class Item_shop extends CI_Model{
    
    public function GetAllItems(){
        $this->db->select('*')->from('item')->order_by("ItemID", "DESC");
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

    public function GetItemLikesCount($item_id){
        $this->db->select('*')->from('item_likes')->where(array("ItemID"=>$item_id, "Status"=>'1'));
        $query = $this->db->get();
        $count = $query->num_rows();
        return $count;
    }
    
     public function GetItemLikesCountForUser($item_id,$user_id){
        $this->db->select('*')->from('item_likes')->where(array("ItemID"=>$item_id, "Status"=>'1', "UserID" => $user_id));
        $query = $this->db->get();
        $count = $query->num_rows();
        return $count;
    }

    public function addLike($item_id, $data){
        $this->db->insert('item_likes', $data);
        $this->db->insert_id();

        $this->db->select('*')->from('item_likes')->where(array("ItemID"=>$item_id, "Status"=>'1'));
        $query = $this->db->get();
        $count = $query->num_rows();
        return $count;
    }
    
    public function deleteLike($item_id, $user_id){
        $this->db->delete('item_likes', array("ItemID" => $item_id, "UserID" => $user_id));

        $this->db->select('*')->from('item_likes')->where(array("ItemID"=>$item_id, "Status"=>'1'));
        $query = $this->db->get();
        $count = $query->num_rows();
        return $count;
    }
    
}