<?php

Class Cart_data extends CI_Model {

    public function saveItem($data) {
        $this->db->select("Qty,CartItemID")->from('cart_item')->where(array("status" => 'pending', "ItemID" => $data['ItemID'],"UserID"=>$this->session->userdata('user_id')));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = array(
                'Qty' =>  $query->row()->Qty+1
            );

            $this->db->where('CartItemID', $query->row()->CartItemID);
            $this->db->update('cart_item', $data);
            return TRUE;
        } else {
            $this->db->insert('cart_item', $data);
            return $this->db->insert_id();
        }
    }
    
    public function getCartItems(){
        $this->db->select('item.*,cart_item.*')->from('item')->join('cart_item','item.ItemID = cart_item.ItemID')->where(array("cart_item.Status"=>"pending","cart_item.UserID"=>$this->session->userdata('user_id')))->order_by('CartItemID','DESC');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return FALSE;
        }
    }
    
    public function getHistoryItems(){
        $this->db->select('item.*,cart_item.*')->from('item')->join('cart_item','item.ItemID = cart_item.ItemID')->where(array("cart_item.Status"=>"purches","cart_item.UserID"=>$this->session->userdata('user_id')))->order_by('CartItemID','DESC');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }else{
            return FALSE;
        }
    }
    
    public function DeleteCartItems($id){
        $this->db->delete('cart_item', array('CartItemID' => $id));
        return $this->db->affected_rows();
    }

}
