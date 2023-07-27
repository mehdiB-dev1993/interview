<?php


use App\Core\Routes\Route;

Route::Get('/','Home@index');
Route::Post('/employee/add','User@insert');
Route::Get('/show/form','User@showForm');
Route::Get('/show/form/ticket','Ticket@Create');