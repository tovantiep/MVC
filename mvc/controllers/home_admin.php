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
            "product"=>$this->Product_Model->Getall(),
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
                else{
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
        
        public function update($id_product){
            $this->viewadmin("masterlayout",[
                "page"=>"view_admin/update_product",
                "update"=>$this->Product_Model->update($id_product),
            ]);
        }
        public function edit($id_product){
            $result_mess = false;
            if (isset($_POST["submit"])) {
              if (empty($_POST["title_product"])) {
                    $this->viewadmin("masterlayout",[
                    "page"=>"view_admin/update_product",
                    "result_mess"=>$result_mess,
                    "update"=>$this->Product_Model->update($id_product),
                ]);
              }
              else {
                $title_product = $_POST["title_product"];
                $price_product = $_POST["price_product"];
                $id_catgory_product = $_POST["id_catgory_product"];
                $desc_product = $_POST["desc_product"];
                $kq = $this->Product_Model->update_product($id_product,$title_product,$price_product,$id_catgory_product,$desc_product);
                $this->viewadmin("masterlayout",[
                    "page"=>"view_admin/update_product",
                    "result"=>$kq,
                    "update"=>$this->Product_Model->update($id_product),
                ]);
                }
              }
            }
           public function delete($id_product)
            {
                if ($this->Product_Model->delete($id_product)) {
                   
                    echo '<script type="text/javascript">';
                    echo 'alert("Xóa thành công!")';
                    echo '</script>';
                } 
               $kq =$this->Product_Model->delete($id_product);
               $this->viewadmin("masterlayout",[
                "page"=>"view_admin/index"    ,
                "product"=>$this->Product_Model->Getall(),
                ]);
            }
        }

?>