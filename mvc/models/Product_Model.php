<?php
class Product_Model extends DB{
    public function GetID($id_catgory_product = [""]){
        $sql = "SELECT * FROM tbl_product where id_catgory_product ='".$id_catgory_product."'";
        return mysqli_query($this->con,$sql);
    }
}
?>