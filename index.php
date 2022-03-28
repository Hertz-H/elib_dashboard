<?php
require_once __DIR__ . '/vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\{CategoryController,PaymentMethodController,AuthorController,BookController,AddressController,CityController,OfferController,UsersController,HomeController,CheckoutController,OrderController,CategoriesController,BooksController,Book_pageController,PublisherController,Controller};
// use coding\app\controllers\HomeController;
$system=new AppSystem;


Router::get('/add_order',[OrderController::class,'add']);
Router::get('/edit_order',[OrderController::class,'edit']);
Router::get('/list_order',[OrderController::class,'show']);





Router::get('/add_author',[AuthorController::class,'add']);
Router::get('/edit_author',[AuthorController::class,'edit']);
Router::get('/list_author',[AuthorController::class,'show']);

Router::get('/add_offer',[OfferController::class,'add']);
Router::get('/edit_offer',[OfferController::class,'edit']);
Router::get('/list_offer',[OfferController::class,'show']);

Router::get('/add_city',[CityController::class,'add']);
Router::get('/edit_city',[CityController::class,'edit']);
Router::get('/list_city',[CityController::class,'show']);

Router::get('/add_address',[AddressController::class,'add']);
Router::get('/edit_address',[AddressController::class,'edit']);
Router::get('/list_address',[AddressController::class,'show']);

Router::get('/add_payment',[PaymentMethodController::class,'add']);
Router::get('/edit_payment',[PaymentMethodController::class,'edit']);
Router::get('/list_payment',[PaymentMethodController::class,'show']);

Router::get('/add_cat',[CategoryController::class,'add']);
Router::get('/edit_cat',[CategoryController::class,'edit']);
Router::get('/list_cat',[CategoryController::class,'show']);

Router::get('/add_user',[UsersController::class,'add']);
Router::get('/edit_user',[UsersController::class,'edit']);
Router::get('/list_user',[UsersController::class,'show']);

Router::get('/edit_publisher',[PublisherController::class,'edit']);//fill the array with the function and the path 
Router::get('/list_publishers',[PublisherController::class,'show']);//fill the array with the function and the path
// Router::get('/add_publisher',[PublisherController::class,'add']);

Router::get('/add_book',[BookController::class,'add']);
Router::get('/edit_book',[BookController::class,'edit']);
// Router::get('/list_book',[BookController::class,'show']);
// Router::get('/add_publisher',[PublisherController::class,'add']);//fill the array with the function and the path 
// Router::get('/add_publisher',[PublisherController::class,'edit']);//fill the array with the function and the path 
// Router::get('/add_publisher',[PublisherController::class,'show']);//fill the array with the function and the path 


Router::get('/books',function(){
  echo "books route path";
});
Router::get('/home',[HomeController::class,'load']);
Router::get('/check_out',[CheckoutController::class,'load']);
Router::get('/category',[CategoriesController::class,'load']);
Router::get('/book',[BooksController::class,'load']);
// Router::get('/book_page',[book_pageController::class,'load']);



// Router::get('/order_edit',[OrderController::class,'edit']);OrderController
// Router::get('/order_',[OrderController::class,'add']);OrderController

// Router::get('/users',[UsersController::class,'show']);
Router::get('/login',[UsersController::class,'login']);
Router::get('/signup',[UsersController::class,'signup']);



/*
call check_request and send the request method and the url to the 
excute and the excute based at the url and the method gets the method and excutes it 

*/
$system->start();

