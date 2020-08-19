<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Tor;
use App\Bidder;
use App\Test;

class TestController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    
   public function index(){
       $test=Test::all();
       return view ('admin.test.index',compact('test'));
   }
   public function create(){
       $tor=Tor::get();
       $bidder=Bidder::get();
       return view('admin.test.create',compact('tor','bidder'));
   }
   public function store(Request $request){
       $valibateData=$request->validate(
           [
               'name'=>'required',
               'tors_id',
               'bidders_id',
           ]
           );
        
           $test = Test::create(['name' => $request->input('name')]);
      
           $test->save();
        //    return redirect('admin.test.index');
           return redirect()->action('TestController@index')->with('success','test Created Successfully');
   }
   public function list(){
       $list=DB::table('tests')
       ->join('tors','tests.tors_id','tors.id')
       ->select('tests.*','tors.name')
    //    ->->where('tors.id')
       ->get();
       dd($list);
       return view('admin.test.list','list');
      
   }
}
