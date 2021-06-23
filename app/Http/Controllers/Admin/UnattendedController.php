<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reports;
use DB;


class UnattendedController extends Controller
{
    public function index()
    {
        // $reports = DB::select('SELECT * FROM `reports` WHERE status=completed');

        $reports = Reports::paginate(5);
        return view('admin.unattended',compact('reports'));
    }
    function fetch_data()
    {
        
    	return view('admin.unattended');
    }
}
