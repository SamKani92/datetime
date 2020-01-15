<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return View
     */
    public function show()
    {
        return view('home');
    }
}