<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __invoke()
    {
        if (request()->has('state')) 
        {
            $reports = Report::where('state', request('state'))->get();

            return inertia()->render('Dashboard/reports/index', [
                'reports' =>   $reports
            ]);
        }

        if (request()->has('region')) 
        {
            $reports = Report::where('region', request('region'))->get();

            return inertia()->render('Dashboard/reports/index', [
                'reports' =>   $reports
            ]);
        }

        return inertia()->render('Dashboard/reports/index', [
            'reports' => Report::all()
        ]);
    }

}
