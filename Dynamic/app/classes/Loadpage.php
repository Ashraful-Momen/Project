<?php
namespace App\classes;

class Loadpage
{
    public $data = [];
    public $products = [];

    public function loadPage()
    {
       header('Location: action.php?page=home');
    }


   

}