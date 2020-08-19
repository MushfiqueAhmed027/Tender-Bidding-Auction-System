<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;
use App\Tor;
use App\Bidder;
use App\Bsf;
// use Auth;
use Session;
class BsfController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // function __construct()
    // {
    //      $this->middleware('permission:bsf_show|bsf_create|bsf_edit|bsf_delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:bsf_create', ['only' => ['create','store']]);
    //      $this->middleware('permission:bsf_edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:bsf_delete', ['only' => ['destroy']]);
    // }
    
   public function index(){
       $bsf=Bsf::all();
    //    $bsf = Bsf::whereHas('tors', function($tors) {
    //     return $torst->where('user_id','=',Auth::user()->id);
    //     //Provides a filter for bidders, post which are related to user
    // })->with('post')->get();
    //    $tor=Tor::all();
    //    $bidders=Bidder::all();
    
        // $bsf=DB::table('bsfs')
        // ->leftJoin('bidders','bsfs.bidders_id','bidders.id')
        // ->select('bsfs.*','bidders.registration_no')
        // ->get();
        // dd($bsf);
       return view('admin.bsf.index',compact('bsf',$bsf));
   }
    public function create(){

        $form=DB::table('tors')
        ->leftjoin('bsfs','tors.id','=','bsfs.id')
        ->select('subject')
        
        ->get();

        // $form_0=DB::table('categories')
        // ->leftjoin('bsfs','categories.id','=','bsfs.id')
        // ->select('name')
        
        // ->get();

        $form_1=DB::table('tors')
        ->leftjoin('bsfs','tors.id','=','bsfs.id')
        ->select('scope_of_work')
        
        ->get();
        $form_2=DB::table('bidders')
        ->leftjoin('bsfs','bidders.id','=','bsfs.id')
        ->select('registration_no')
        
        ->get();
       
        $form_3=DB::table('bidders')
        ->leftjoin('bsfs','bidders.id','=','bsfs.id')
        ->select('TIN')
        
        ->get();
      
        $form_4=DB::table('bidders')
        ->leftjoin('bsfs','bidders.id','=','bsfs.id')
        ->select('license_no')
        
        ->get();
        
        $form_5=DB::table('bidders')
        ->leftjoin('bsfs','bidders.id','=','bsfs.id')
        ->select('BIN')
        
        ->get();
        
        $form_6=DB::table('bidders')
        ->leftjoin('bsfs','bidders.id','=','bsfs.id')
        ->select('phone_no')
        
        ->get();
        
        $form_7=DB::table('bidders')
        ->leftjoin('bsfs','bidders.id','=','bsfs.id')
        ->select('company_website')
        
        ->get();
        // $term= DB::table('tors')
        //       ->whereDate('submitted_on', '>=', Carbon::now()->toDateString())
        //         ->get();
        //       dd($term);
        $bsf=Bsf::all();
        $tor=Tor::all();
        $bidder=Bidder::all();
        // $bidder=Bidder::where('bidders_id',$bsf->id)->get();
        // dd($bidder);
        return view ('admin.bsf.create',compact('form','form_1','form_2','form_3','form_4',
        'form_5','form_6','form_7'));
        // return view('admin.bsf.create',compact('tor','bsf','bidder'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'understanding_of_work'=>'required',
            'tors_id',
            'bidders_id',
            
        ]);
        $bsf = Bsf::create($request->all());
        $bsf->fill($validatedData);
        $bsf->save();
        // $bsf = new Bsf();
        // $bsf->understanding_of_work = $request->understanding_of_work;
        // $bsf->tors_id = Auth::id();
        // $bsf->bidders_id = Auth::id();
        // $bsf->save();


       
        // return redirect()->action('bsfController@index')->with('success','bsfs Created Successfully');
        return redirect('admin/bsf/show');
    }
    public function apply(){
        return view('admin.bsf.show');
    }
    public function list(Request $request){
    //    return view ('admin.bsf.list') ;
    $bsf = Bsf::all();
    $tors=Tor::all();
    // $bsf = Bsf::orderBy('id','DESC')->paginate(5);
    return view('admin.bsf.list',compact('bsf','tors'));
    }

    // public function submission(){
    //     $bsf=Bsf::all();
    //     //    $tor=Tor::all();
    //        return view('admin.bsf.index',compact('bsf',$bsf));
    // }
}
