<?php

class User_model extends CI_Model {

    var $UserID;
    var $FirstName;
    var $LastName;
    var $Address;
    var $Country;
    var $City;
    var $Email;
    var $password;
    var $status;

    function __construct() {
        parent::__construct();
    }

    function get_UserID() {
        return $this->UserID;
    }

    function get_FirstName() {
        return $this->FirstName;
    }

    function get_LastName() {
        return $this->LastName;
    }

    function get_Address() {
        return $this->Address;
    }

    function get_Country() {
        return $this->Country;
    }

    function get_City() {
        return $this->City;
    }

    function get_Email() {
        return $this->Email;
    }

    function get_password() {
        return $this->password;
    }

    function get_status() {
        return $this->status;
    }

    function set_UserID($UserID) {
        $this->UserID = $UserID;
    }

    function set_FirstName($FirstName) {
        $this->FirstName = $FirstName;
    }

    function set_LastName($LastName) {
        $this->LastName = $LastName;
    }

    function set_Address($Address) {
        $this->Address = $Address;
    }

    function set_Country($Country) {
        $this->Country = $Country;
    }

    function set_City($City) {
        $this->City = $City;
    }

    function set_Email($Email) {
        $this->Email = $Email;
    }

    function set_password($password) {
        $this->password = $password;
    }

    function set_status($status) {
        $this->status = $status;
    }




}
