<?php
namespace coding\app\controllers;
class BookController{
    
    public static  function show(){
        require_once("app/views/app-publisher-list.php");

    }
    public static  function add(){
        require_once("app/views/app-book-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-book-edit.php");

    }
}
?>