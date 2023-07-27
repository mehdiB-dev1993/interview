<?php
namespace App\Models;

use App\Core\DB;

class UserModel

{
    public function AddEmployee()
    {

        $db = new DB();

        $query = "INSERT INTO users (username,password,fullname,email,phone,address,gender)
                                    VALUES (:username, :password, :fullname,:email,:phone,:address,:gender)";
        $lastInsertId = $db->Create($query,$_POST);
        $aliasName = $_POST['aliasName'];
        $query = "Insert Into user_role (userID,alias_name) values (:lastInsertId,:aliasName)";
        $db->Create($query,['lastInsertId' => $lastInsertId,'aliasName' => $aliasName]);
        return  $lastInsertId;







    }
}