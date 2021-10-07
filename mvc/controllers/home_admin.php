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
        public function insert_view(){
            $this->viewadmin("masterlayout",[
            "page"=>"view_admin/insert_product"]);
        }
        public function insert()
        {
            $result_mess = false;
            if (isset($_POST["submit"])) {
                if (empty($_POST["title_product"])) {            
                    $this->viewadmin("masterlayout",[
                        "page"=>"view_admin/insert_product",
                        "result_mess"=>$result_mess,
                    ]);
                }
                $title_product = $_POST["title_product"];
                $price_product = $_POST["price_product"];
                $id_catgory_product = $_POST["id_catgory_product"];
                $img_product = $_POST["img_product"];
                $desc_product = $_POST["desc_product"];
                $kq = $this->Product_Model->insert($title_product,$price_product,$id_catgory_product,$img_product,$desc_product);
                // echo $kq;
                $this->viewadmin("masterlayout",[
                    "page"=>"view_admin/insert_product",
                    "result"=>$kq,
                ]);
            }
        }
}
?>