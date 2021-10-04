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
    "title" => $this->Product_Model->GetID(),
    "pizza" => $this->Product_Model->Get_ID1(),
    "salad" => $this->Product_Model->Get_ID2(),
    "noodle" => $this->Product_Model->Get_ID3(),
   ]);
    }  
}
?>