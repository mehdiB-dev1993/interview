<?php
namespace App\Controllers;
use App\Helper\Helper;
use App\Models\HomeModel;

class HomeController
{
    public function index()
    {
        $model = new HomeModel();
        $result = $model->index();
       Helper::loadView('Home/Home',$result);
    }
}