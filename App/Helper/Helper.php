<?php

namespace App\Helper;


class Helper
{
    public static function loadView($view,$data)
    {
        extract($data);
        $path = realpath( __DIR__ . '..\\..\\..\\Views\\' .$view .'View.php');
        include $path;

    }

}