<?php

class User_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('users/user_model');
    }


    public function check_user_name($user_name) {
        $this->db->where('Email', $user_name);
        $res = $this->db->get('user');
        return $res->num_rows();
    }

    function get_all_users() {
        $this->db->select('user.*');
        $this->db->from('user');
        $this->db->order_by("user.UserID", "desc");
        $query = $this->db->get();
        return $query->result();
    }


    /*
     * authenticate using this function
     */

    function authenticate_user_with_password($user_model) {

        $data = array('Email' => $user_model->get_Email(), 'password' => $user_model->get_password(), 'status' => '1','UserID' => 1);

        $this->db->select('user.*');
        $this->db->from('user');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->row();
    }


    /*
     * To get user details by passing id as a parameter
     */

    function get_user_by_id($user_model) {

        $this->db->select('fb_user.*,fb_locations.name as location');
        $this->db->from('fb_user');
        $this->db->join('fb_locations', 'fb_user.location_id= fb_locations.id');
        $this->db->where('fb_user.is_deleted', '0');
        $this->db->where('fb_user.id', $user_model->get_id());
        $query = $this->db->get();

        return $query->row();
    }


    /*
     * Delete users from database     
     */

    function delete_users($user_id) {
        return $this->db->delete('user', array('UserID' => $user_id));
        
    }


    /*
     * update password and avatar of an user   
     */

    function update_password_and_avatar($user_model) {
        $data = array('password'     => $user_model->get_password(),
            'profile_pic'  => $user_model->get_profile_pic(),
            'updated_by'   => $user_model->get_updated_by(),
            'updated_date' => $user_model->get_updated_date());
        $this->db->where('id', $user_model->get_id());
        return $this->db->update('user', $data);
    }

   
    /*
    * update details of an user
    */

    function update_password($user_model) {
        $data = array(
            'password'     => $user_model->get_password()
        );
        $this->db->where('user_name',$user_model->get_user_name());
        return $this->db->update('fb_user', $data);
    }

}
