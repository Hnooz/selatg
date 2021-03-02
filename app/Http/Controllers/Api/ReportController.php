<?php

namespace App\Http\Controllers\Api;

use App\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReportRequest;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();

        return response()->json([
            'data' => $reports,
            'status' => 200,
            'error' => false,
            'message' => ''
        ]);
    }

    public function store(StoreReportRequest $request)
    {
        $data = $request->validated();

        $report = Report::create($data);

        return response()->json([
            'data' => $report,
            'status' => 201,
            'error' => false,
            'message' => ''
        ]);
    }
}
