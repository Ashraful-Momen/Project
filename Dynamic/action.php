<?php
require_once 'vendor/autoload.php';
use App\classes\Loadpage;
use App\classes\Slider;
use App\classes\Database;

include 'pages/include/header.php';

if(isset($_GET["page"])){
    if( 'home' == $_GET["page"]){

        include 'pages/frontend/home.php';
    }

    if('add-slider'==$_GET['page']){
       

        if(isset($_POST["add_slider_submit"])){
            $slider = new Slider($_POST,$_FILES);
            $slider->slider_items();
        };
        include 'pages/admin/add-slider.php';
    }
    if('singIN'==$_GET['page']){
        include 'pages/frontend/singIN.php';
    }
    if('userData'==$_GET['page']){
        include 'pages/admin/userData.php';
    }
  
}
include 'pages/include/footer.php';

