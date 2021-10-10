<?php
class login_Model extends DB{
   
    public function Getall(){
        $sql = "SELECT * FROM tbl_account_admin";
        return mysqli_query($this->con,$sql);
    }
    public function delete($id_account)
    {
       $sql="DELETE FROM `tbl_account_admin` WHERE id_account = $id_account";
       $result = false;
       if (mysqli_query($this->con,$sql)) {
          $result = true;
       }
       return json_encode($result);
   
    }

}

?>