<?php

Class User extends CI_Model {

    public function checkUser($email, $userPassword) {
        $this->db->select("*")->from("user")->where(array("Email" => $email, "password" => $userPassword));
        $query = $this->db->get();
        $count = $query->num_rows();

        if ($count == 1) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

    public function getUserDataFromID($userID) {
        $this->db->select("*")->from("user")->where("UserID", $userID);
        $query = $this->db->get();
        $count = $query->num_rows();
        if ($count > 0) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }
    
    public function RegisterUser($email,$data){
        if($this->CheckEmailExit($email)){
            if($this->db->insert('user',$data)){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }

    public function CheckEmailExit($email){
        $this->db->select('Email')->from('user')->where('Email',$email);
        $query = $this->db->get();
        $count = $query->num_rows();
        if($count > 0){
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function updateUserData($userID, $data) {
        $this->db->where('UserID', $userID);
        $this->db->update('user', $data);
        if ($this->db->affected_rows() == 1) {
            return 1;
        }else{
            return FALSE;
        }
    }
}
