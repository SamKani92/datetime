<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
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
    	// Instantiate Carbon dates from user input
    	$date1 = Carbon::createFromFormat('Y-m-d H:i:s', $request->datetime1);
    	$date2 = Carbon::createFromFormat('Y-m-d H:i:s', $request->datetime2);

    	// Get difference in days, weekdays, and weeks
    	$days = $date1->diffInDays($date2);
    	$weekdays = $date1->diffInWeekDays($date2);
    	$weeks = $date1->diffInWeeks($date2);

    	// Convert days based on user input
    	switch ($request->convert) {
            case "seconds": $convertResult = $days * 86400; break;
            case "minutes": $convertResult = $days * 1440; break;
            case "hours": $convertResult = $days * 24; break;
            case "years": $convertResult = $days / 365; break;
        }

    	// Display results with correct plural forms and rounding
    	$days = $days.' '.Str::plural('day', $days);
		$weekdays = $weekdays.' '.Str::plural('weekday', $weekdays);
		$weeks = $weeks.' '.Str::plural('week', $weeks);
		$convertResult = round($convertResult, 2).' '.Str::plural($request->convert, $convertResult);

        return view('result', compact('date1', 'date2', 'days', 'weekdays', 'weeks', 'convertResult'));
    }
}