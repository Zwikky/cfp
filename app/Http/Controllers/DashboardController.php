<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Charts\MonthlyFeedback;

class DashboardController extends Controller
{


    public function index() {

        $chart = new MonthlyFeedback;

        $chart->labels(['Jan', 'Feb', 'Mar']);
        $chart->dataset('Complaints', 'line', [10, 25, 13]);

        return view('app.dashboard', compact('chart'));
    }
}
