<?php
class Controller{
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }
    public function view($view,$data=[]){
        require_once "./mvc/views/Users/".$view.".php";
    }
    public function viewadmin($view,$data=[]){
        require_once "./mvc/views/admin/".$view.".php";
    }
}
?>