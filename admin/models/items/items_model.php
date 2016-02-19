<?php

class Items_model extends CI_Model
{

    var $ItemID;
    var $ItemName;
    var $ItemPrice;
    var $ItemDes;
    var $ItemTitle;
    var $ItemImg;
    var $ItemType;
    var $ItemImg2;
    var $ItemImg3;
    var $ItemSize;

    function __construct()
    {
        parent::__construct();
    }

    function get_ItemID() {
        return $this->ItemID;
    }

    function get_ItemName() {
        return $this->ItemName;
    }

    function get_ItemPrice() {
        return $this->ItemPrice;
    }

    function get_ItemDes() {
        return $this->ItemDes;
    }

    function get_ItemTitle() {
        return $this->ItemTitle;
    }

    function get_ItemImg() {
        return $this->ItemImg;
    }

    function get_ItemType() {
        return $this->ItemType;
    }

    function get_ItemImg2() {
        return $this->ItemImg2;
    }

    function get_ItemImg3() {
        return $this->ItemImg3;
    }

    function get_ItemSize() {
        return $this->ItemSize;
    }

    function set_ItemID($ItemID) {
        $this->ItemID = $ItemID;
    }

    function set_ItemName($ItemName) {
        $this->ItemName = $ItemName;
    }

    function set_ItemPrice($ItemPrice) {
        $this->ItemPrice = $ItemPrice;
    }

    function set_ItemDes($ItemDes) {
        $this->ItemDes = $ItemDes;
    }

    function set_ItemTitle($ItemTitle) {
        $this->ItemTitle = $ItemTitle;
    }

    function set_ItemImg($ItemImg) {
        $this->ItemImg = $ItemImg;
    }

    function set_ItemType($ItemType) {
        $this->ItemType = $ItemType;
    }

    function set_ItemImg2($ItemImg2) {
        $this->ItemImg2 = $ItemImg2;
    }

    function set_ItemImg3($ItemImg3) {
        $this->ItemImg3 = $ItemImg3;
    }

    function set_ItemSize($ItemSize) {
        $this->ItemSize = $ItemSize;
    }


}


?>
