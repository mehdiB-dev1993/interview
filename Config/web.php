<?php


use App\Core\Routes\Route;

Route::Get('/','Home@index');
Route::Post('/employee/add','User@insert');