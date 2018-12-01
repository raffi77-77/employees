<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

/**
 * Home page controller.
*/
class HomeController extends Controller
{
    public function index() {
        $pageTitle = 'Employees | Home';

        /** Get table fields */
        $table_fields = Employee::tableFields();
        unset($table_fields[  array_search('created_at', $table_fields) ]);
        unset($table_fields[  array_search('updated_at', $table_fields) ]);
        $table_fields[ array_search('date_of_birth', $table_fields) ] = 'age';


        return view('home')->with([
            'title' => $pageTitle,
            'table_fields' => $table_fields
        ]);
    }
}
