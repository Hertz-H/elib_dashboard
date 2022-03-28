<?php
namespace coding\app\controllers;
class OfferController {
    public static function load(){
          require_once("app/views/order.php");
        // echo "from home ";
        }
        public static  function add(){
          require_once("app/views/app-offer-add.php");
  
      }
  
      public static  function edit(){
          require_once("app/views/app-offer-edit.php");
  
      }
  
}





?>