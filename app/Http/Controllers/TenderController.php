<?php

namespace App\Http\Controllers;
use App\Tor;
use App\Tender;
use App\Category;
use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;
class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    function __construct()
    {
         $this->middleware('permission:tender-show');
         $this->middleware('permission:tender-create', ['only' => ['create','store']]);
         $this->middleware('permission:tender-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:tender-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $tenders = Tender::all();
        return view('admin.tender.index',compact('tenders'));
    }

    public function showAllTender(Request $request)
    {
        $tenders = Tender::all();
        $tor=Tor::all();
        $user=User::all();
        $showCounts = Tender::all()->count('id');
        $showName = Tender::where('name')->get('name');
        $upcoming_names= Tender::where('name','>=',Carbon::now()->subdays(30))->get('name');
       
        $upcoming_dates= Tender::where('publication_date','>=',Carbon::now()->subdays(30))->get(['publication_date']);
        $closing_dates= Tender::where('closing_date','>=',Carbon::now()->subdays(2))->get(['closing_date']);
        return view('admin.dashboard.dashboard',compact('tenders','tor','user','showCounts', 'showName','upcoming_dates','upcoming_names','closing_dates',$tenders,$tor,$user,$showName,$showCounts,$upcoming_names, $upcoming_dates,$closing_dates));
        //echo $showCounts;
    

        // return view('admin.dashboard.dashboard',compact('showCounts',$showCounts));
    }
    public function reporting(){
      $tenders=Tender::all();
      $tor=Tor::all();
      return view ('admin.dashboard.report',compact('tenders','tor',$tenders,$tor));
    }

    // public function showMonthlyTender(Request $request)
    // {
    //     $showCounts = Tender::all()->count('budget');

    //     //echo $showCounts;
    

    //     return view('admin.dashboard.dashboard',compact('showCounts',$showCounts));
    // }
    public function showClosingDate(Request $request){
      // $upcoming_dates =Tender::all()->ImportantDate::where('closing_date' , '>', DATE('Y-m-d'))
      //               ->orderBy('id', asc)
      //               ->limit(5)
      //               ->get();
      $upcoming_names= Tender::where('name','>=',Carbon::now()->subdays(30))->get(['name']);
      $upcoming_dates= Tender::where('publication_date','>=',Carbon::now()->subdays(30))->get(['publication_date']);
                    return view('admin.dashboard.dashboard',compact('upcoming_dates','upcoming_names',$upcoming_names, $upcoming_dates));
    }

    // public function showpublishingDate(Request $request){
     

    //   $recent_dates = ImportantDate::where('publication_date', '<', DATE('Y-m-d'))
    //                 ->orderBy('id', desc)
    //                 ->limit(5)
    //                 ->get();
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $company = Company::pluck('company_name','id');
      //  $category= Category::pluck('name','id');
        return view('admin.tender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
             $this->validate($request,[
            'name' => 'required',
           'category_name' => 'required',
           'budget' =>'required',
           // 'category' => 'required|array',
            'description'=>'required',
            'publication_date'=>'required',
            'meeting_start_date'=>'required',
            'closing_date'=>'required',
          //  'permission.*' => 'required|string' 

             
       
           ]);
           $tender = new Tender();
         $tender->name = $request->name;
         $tender->category_name = $request->category_name;
         $tender->budget = $request->budget;
         $tender->description = $request->description;
         $tender->publication_date = $request->publication_date;
         $tender->meeting_start_date = $request->meeting_start_date;
         $tender->closing_date = $request->closing_date;
         $tender->save();
         return redirect()->action('TenderController@index')->with('success',"Tender Updated Successfully");
         //  $tender = new Tender ();
         //  $tender ->name = $request->name;
          // $tender ->company_name = $request->company_name;
          // $tender ->category = $request->category;
        //  $tender->description = $request->description;
        //  $tender->publication_date =$request->publication_date;
        //  $tender->meeting_start_date =$request->meeting_start_date;
         // $tender->closing_date =$request->closing_date;
         // $tender->save();
         //  $tender = new Tender ();
        //   $tender = Tender::create($request->all());
       // $tender = Tender::create($request->all());
        /* foreach ($request->company as $value) {
               $tender->attachCompany($value);
           }
           foreach ($request->category as $value) {
            $tender->attachCategory($value);
           }*/
           // $tender = Tender::create($request->all());
            
       // $tender->company()->sync($request->input('company', []));
       // $tender->category()->sync($request->input('category', []));
       
           //return redirect()->route('admin.tender.index');*/
           //$tender->company()->sync($request->input('company', []));
       //return redirect()->action('TenderController@index')->with('success','Tenders Created Successfully');
     // $tender = Tender::create($request->all());
      //$tender->category()->sync($request->input('categories', []));
       // dd(request()->all());
      // $tender=Tender::create($request->all());
      // return redirect()->route('admin.tender.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
       // $company = Company::pluck('company_name','id');
       // $category= Category::pluck('name','id');
     //  $tender = Tender::all();
        return view('admin.tender.show',compact('tender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tender = Tender::find($id);
        return view('admin.tender.edit',compact('tender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
           'category_name' => 'required',
           // 'category' => 'required|array',
            'description'=>'required',
            'publication_date'=>'required',
            'meeting_start_date'=>'required',
            'closing_date'=>'required',
          //  'permission.*' => 'required|string' 

             
       
           ]);
         //  $tender->update($request->all());
           //return redirect()->route('admin.tender.index');
           $tender = Tender::find($id);
         //  $tender = new Tender();
         $tender->name = $request->name;
         $tender->category_name = $request->category_name;
         $tender->description = $request->description;
         $tender->publication_date = $request->publication_date;
         $tender->meeting_start_date = $request->meeting_start_date;
         $tender->closing_date = $request->closing_date;
         $tender->save();
         return redirect()->action('TenderController@index')->with('success',"Tender Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tender = Tender::find($id);
        $tender->delete();
        return redirect()->action('TenderController@index')->with('success',"Tender Deleted Successfully");
    }
}
