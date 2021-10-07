<?php
class Product_Model extends DB{
    public function GetID($id_catgory_product = [""]){
        $sql = "SELECT * FROM tbl_product where id_catgory_product ='".$id_catgory_product."'";
        return mysqli_query($this->con,$sql);
    }
    public function insert($title_product,$price_product,$id_catgory_product,$img_product,$desc_product){
        $sql ="INSERT INTO tbl_product( title_product, price_product, id_catgory_product, img_product, desc_product) 
            VALUES  ('$title_product','$price_product','$id_catgory_product','$img_product','$desc_product')";
        $result = false;
        if (mysqli_query($this->con,$sql)) {
           $result = true;
        }
        return json_encode($result);
    }

}
?>