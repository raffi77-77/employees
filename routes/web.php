<?php

Route::get('/', "HomeController@index");

Route::get('/employee/getlist', ['as' => 'employee.getlist', 'uses' => "EmployeeController@getEmployeeList"]);
Route::get('/employee/getdata/{id}', "EmployeeController@getEmployeeData");
Route::resource('employee', 'EmployeeController');

