<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController
{
  public function insert()
  {
      $model = new UserModel();
      $result = $model->AddEmployee();
      echo $result;



  }
}

