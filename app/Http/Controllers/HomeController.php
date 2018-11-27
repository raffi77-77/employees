<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Home page controller.
*/
class HomeController extends Controller
{
    public function index() {
        $pageTitle = 'Employees | Home';
        return view('home')->with([
            'title' => $pageTitle
        ]);
    }
}
