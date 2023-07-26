<?php
namespace App\Controllers;
use App\Helper\Helper;

class HomeController
{
    public function index()
    {
       Helper::loadView('Home/Home');
    }
}