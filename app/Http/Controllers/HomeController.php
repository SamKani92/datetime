<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
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

    /**
     * Calculate the difference between the two dates.
     *
     * @return View
     */
    public function result(Request $request)
    {
    	$date1 = Carbon::createFromFormat('Y-m-d H:i:s', $request->datetime1);
    	$date2 = Carbon::createFromFormat('Y-m-d H:i:s', $request->datetime2);

    	//dd($date1->diffInDays($date2));

        return view('result');
    }
}