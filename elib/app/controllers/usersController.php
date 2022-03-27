<?php
namespace coding\app\controllers;
class UsersController{

    public static  function show(){
        require_once("app/views/dashboard/app-book-list.php");
    }
    public static  function login(){
        require_once("app/views/login.php");

    }

    public static  function signup(){
        require_once("app/views/signup.php");

    }

}
?>