<?php

namespace App\Models;

use App\Core\DB;

class HomeModel

{
    public function index()

    {
        $db= new DB();
        $sql = 'SELECT * FROM USERS';
       return $db->Read($sql);
    }
}