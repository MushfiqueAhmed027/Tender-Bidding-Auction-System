<?php

namespace App\Http\Controllers\Admin;
use App\Tor;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    	return view('admin.dashboard.dashboard');
    }
   /* public function index(){

        $tor = Tor::pluck('name','id','subject','type','submitted_on');
        return view('admin.dashboard.dashboard',compact('tor'));
    }*/
    public function showAllTor(Request $request)
    {
        $allTor = Tor::where('id', '!=', null)->get();

        return view('admin.dashboard.dashboard')->with('allTor', $allTor);
    }
    public function store(){
        $users = DB::select('select year(date) as year, month(date) as month, sum(budget) as total_budget from tender_table group by year(date), month(date)');
        return view('total_budget',['tor'=>$tor]);
        }
    }
 
