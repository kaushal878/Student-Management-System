<?php

namespace App\Http\Controllers;

class ReportController extends Controller
{
    public function students()
    {
        return view('reports.students');
    }

    public function attendance()
    {
        return view('reports.attendance');
    }

    public function results()
    {
        return view('reports.results');
    }
}
