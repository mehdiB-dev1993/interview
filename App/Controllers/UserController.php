<?php

namespace App\Controllers;

use App\Helper\Helper;
use App\Models\UserModel;

class UserController
{
  public function insert()
  {
      $model = new UserModel();
      $result = $model->AddEmployee();
    // echo json_encode($result);
      echo $result;

  }

  public function showForm()
  {
      Helper::loadView('home/EmployeeForm',[]);
  }
}

