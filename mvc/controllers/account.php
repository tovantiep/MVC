<?php
class account extends Controller{
    public $Product_Model;
    public $login_Model;
    function __construct()
    {
        $this->Product_Model = $this->model("Product_Model");
        $this->login_Model = $this->model("login_Model");

    }
        public function Sayhi(){
            $this->viewadmin("masterlayout",[
            "page"=>"Account/index"    ,
            "account"=>$this->login_Model->Getall(),
            ]);
        }
           public function delete($id_account)
            {
                if ($this->login_Model->delete($id_account)) {
                    echo '<script type="text/javascript">';
                    echo 'alert("Xóa thành công!")';
                    echo '</script>';
                } 
               $kq =$this->login_Model->delete($id_account);
               $this->viewadmin("masterlayout",[
                "page"=>"Account/index"    ,
            "account"=>$this->login_Model->Getall(),
                ]);
            }
        }

?>