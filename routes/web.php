<?php

Route::get('/', "HomeController@index");

Route::resource('employee', 'EmployeeController');


