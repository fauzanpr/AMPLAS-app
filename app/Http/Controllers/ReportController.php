<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('reportedAccount')       
        ->get()
        ->groupBy('reported_account');
        // dd($reports);
        $title = "Pelaporan";
        return view('admin.pelaporan', compact('reports', 'title'));
    }

    public function show(Report $report)
    {   
        $title = 'Pelaporan Detail';
        $details = $report->with('reportType')
        ->where('reported_account', $report->reported_account)
        ->get()
        ->groupBy('type_id');
        // dd($details);
        return view('admin.detail_pelaporan', compact('details', 'title'));
    }
}
