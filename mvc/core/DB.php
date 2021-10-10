<?php
class DB {
    public $conn;
    protected $server = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $db_name = "php";
    function __construct()
    {
        $this->con = mysqli_connect($this->server,$this->username,$this->password);
        mysqli_select_db($this->con, $this->db_name);
        mysqli_query($this->con, "SET NAMES 'utf8");
    }
}
?>