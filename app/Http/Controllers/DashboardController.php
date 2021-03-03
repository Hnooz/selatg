<?php

namespace App\Http\Controllers;

use App\User;
use App\Report;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia()->render('Dashboard/Index',[
            'userCount' => User::all()->count(),
            'productCount' => Product::all()->count(),
            'reportsCount' => Report::all()->count(),
            'reports' =>    Report::take(6)->get(),
        ]);
    }

    public function ui()
    {
        return inertia()->render('Dashboard/UI');
    }
}
