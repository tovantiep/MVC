<?php
class Home extends Controller{
    public $Product_Model;
   
    function __construct()
    {
        $this->Product_Model = $this->model("Product_Model");
    }
public function SayHi(){
    $this->Product_Model = $this->model("Product_Model");
    $this->view("masterlayout",[
    "page"=>"home/blog",
    "pizza" => $this->Product_Model->GetID($id_catgory_product = "1"),
    "salad" => $this->Product_Model->GetID($id_catgory_product = "2"),
    "noodle" => $this->Product_Model->GetID($id_catgory_product = "3"),
   ]);
    }  
}
?>