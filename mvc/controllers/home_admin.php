<?php
class Home_admin extends Controller{
    public $Product_Model;
    function __construct()
    {
        $this->Product_Model = $this->model("Product_Model");
    }
        public function Sayhi(){
            $this->viewadmin("masterlayout",[
            "page"=>"view_admin/index"    ,
            "product"=>$this->Product_Model->GetID(),
            ]);
        }
}
?>