<?php
namespace coding\app\controllers;
class UsersController{

    public static  function list(){
        require_once("app/views/app-publisher-list.php");

    }
    public static  function login(){
        require_once("app/views/login.php");

    }

    public static  function signup(){
        require_once("app/views/signup.php");

    }
    public static  function add(){
        require_once("app/views/app-publisher-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-publisher-edit.php");

    }
    public static  function add_pay(){
        require_once("app/views/app-paymentMethod-add.php");

    }

    public static  function edit_pay(){
        require_once("app/views/app-paymentMethod-edit.php");

    }
    public static  function  add_cat(){
        require_once("app/views/app-category-add.php");

    }
    public static  function  edit_cat(){
        require_once("app/views/app-category-edit.php");

    }
}
?>