<?php
namespace App\Models;

use App\Core\DB;
use App\Helper\Helper;

class UserModel

{
    public function AddEmployee()
    {
         $db = new DB();

         $id = $db->Create('users',$_POST['formData']);

         $_POST['formData2']['userID'] = $id;

         $result = $db->create('user_role',$_POST['formData2']);
         return $id;

    }
}