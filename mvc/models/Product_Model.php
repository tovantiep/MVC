<?php
class Product_Model extends DB{
    public function GetID(){
        $sql = "SELECT * FROM tbl_product";
        return mysqli_query($this->con,$sql);
    }
    public function Get_ID1(){
        $sql = "SELECT * FROM tbl_product where id_catgory_product = 1";
        return mysqli_query($this->con,$sql);
    }
    public function Get_ID2(){
        $sql = "SELECT * FROM tbl_product where id_catgory_product = 2";
        return mysqli_query($this->con,$sql);
    }
    public function Get_ID3(){
        $sql = "SELECT * FROM tbl_product where id_catgory_product = 3";
        return mysqli_query($this->con,$sql);
    }
}
?>