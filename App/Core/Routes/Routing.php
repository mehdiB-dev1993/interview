<?php

namespace App\Core\Routes;

use App\Core\Routes\Route;
use App\Core\Request;

class Routing
{
  public $Routes;
  public $CR;
  public $CMethod;
  public $Action;

  public function __construct()
  {
      $this->Routes = Route::Routes();
      $Request = new Request;
      $this->CR = $Request->REQUEST_URI;
      $this->CMethod = $Request->REQUEST_METHOD;
      $this->RunController();
  }

  public function checkExistRoute()
  {

      $status = 0;
      foreach ($this->Routes as $key => $val)
      {
          if($val['METHOD'] === strtolower($this->CMethod) && strtolower($val['URI']) == str_replace('//', '/', strtolower($this->CR)))
          {
              $status = 1;
              $this->Action =  $this->ExplodeAction($val['ACTION']);
          }
      }
        return $status;
  }

  public function ExplodeAction($action)
  {
      $result = explode('@',$action);
      $class = $result[0];
      $func = $result[1];
      return ['class' => $class,'func' => $func];
  }
  public function RunController()
  {
      if($this->checkExistRoute() === 1 ){
          $class = 'App\\Controllers\\' . $this->Action['class'] .'Controller';
          $fn = $this->Action['func'];
          $controller = new $class;
          $controller->$fn();
      }
  }
}