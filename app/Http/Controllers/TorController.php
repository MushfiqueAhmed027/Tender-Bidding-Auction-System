<?php

namespace App\Http\Controllers;
use App\Tender;
use App\Tor;
use App\Bsf;
use App\Bidder;
use App\Template;
use App\Category;
use DB;
use PDF;
use Illuminate\Http\Request;

class TorController extends Controller
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
         $this->middleware('permission:tor-show');
         $this->middleware('permission:tor-create', ['only' => ['create','store']]);
         $this->middleware('permission:tor-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:tor-delete', ['only' => ['destroy']]);
         $this->middleware('permission:tor-apply', ['only' => ['e_tender']]);
    }
    
    public function index(Request $request)
    {
        $request->session()->forget('tor');
        $tor = Tor::all();
        // $tor = DB::table('tors')->where('name', 'BRAC')->first();
        // dd($tor);
        return view('admin.tor.index',compact('tor',$tor));
    }

    public function showAllTor(Request $request)
    {
        $showCounts = Tor::all()->count('id');

        //echo $showCounts;
    

        return view('admin.dashboard.dashboard',compact('showCounts',$showCounts));
    }

    public function showMonthlyTor(Request $request)
    {
        $showCounts = Tor::all()->count('submitted_on');

        //echo $showCounts;
    

        return view('admin.dashboard.dashboard',compact('showCounts',$showCounts));
    }
   
    public function e_tender(Request $request)
    {
        $request->session()->forget('tor');
        $tor = Tor::all();
        return view('admin.tor.pdf',compact('tor',$tor));
    }
   

    public function list(Request $request){
        session()->forget('next_step');
        $tor = $request->session()->get('tor');
        $tor=Tor::all();
        $template=Template::all();
        $category=Category::all();
        // $template = DB::table('templates')->pluck('name');
        //  dd($template);
        return view ('admin.tor.list',compact('tor','template','category',$tor,$template,$category));
    }


    public function postList(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
           
          
        ]);
        if(empty($request->session()->get('tor'))){
            $tor = new tor();
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }else{
            $tor = $request->session()->get('tor');
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }
      
        session(['next_step' => $request->next_step]);
        return redirect('admin/tor/create_step2');
    }
    public function createStep1(Request $request)
    {
        session()->forget('next_step');
        $tor = $request->session()->get('tor');
        $category = Category::all();
        $template=Template::all();
        return view('admin.tor.create_step1',compact('tor','category','template', $tor,$category,$template));

      // dd($tor);
    }

    
    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'categories_id'=> 'required',
            'date' => 'required',
            'subject' => 'required',
            'type' =>'required',
            'background'=>'required',
            'objective'=>'required',
            'work_required'=>'required',
            'scope_of_work' =>'required',
            'roles_responsibilities'=>'required',
            'time_frame' =>'required',
            'deliverables'=>'required',
            'terms_conditions' => 'required',
            'service_provider' => 'required',
            'assignment_location' => 'required',
            'applying_procedure' => 'required',
            'evaluation_criteria' => 'required',
          
        ]);

       if(empty($request->session()->get('tor'))){
            $tor = new tor();
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }else{
            $tor = $request->session()->get('tor');
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }
      
        session(['next_step' => $request->next_step]);
        // dd($tor);
        return redirect('admin/tor/create_step2');

    }

    public function createStep2(Request $request)
    {
        session()->forget('next_step');
        $tor = $request->session()->get('tor');
        return view('admin.tor.create_step2',compact('tor', $tor));
    }

    public function postCreateStep2(Request $request)
    {
        $tor = $request->session()->get('tor');
        $validatedData = $request->validate([
            'documents_submit' =>'required',
           
        ]);

        if(empty($request->session()->get('tor'))){
            $tor = new Tor();
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }else{
            $tor = $request->session()->get('tor');
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }

        session(['next_step' => $request->next_step]);
        return redirect('admin/tor/create_step3');

    }

    public function createStep3(Request $request)
    {
        session()->forget('next_step');
        $tor = $request->session()->get('tor');
        return view('admin.tor.create_step3',compact('tor', $tor));
    }

    public function postCreateStep3(Request $request)
    {
        $tor = $request->session()->get('tor');
        $validatedData = $request->validate([
            'financial_offer' =>'required',
           
        ]);

        if(empty($request->session()->get('tor'))){
            $tor = new Tor();
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }else{
            $tor = $request->session()->get('tor');
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }

        session(['next_step' => $request->next_step]);
        return redirect('admin/tor/create_step4');

    }

    public function createStep4(Request $request)
    {
        session()->forget('next_step');
        $tor = $request->session()->get('tor');
        return view('admin.tor.create_step4',compact('tor', $tor));
    }

    public function postCreateStep4(Request $request)
    {
        $tor = $request->session()->get('tor');
        $validatedData = $request->validate([
            'submitted_on' =>'required',
            'acknowledgement' =>'required',
            'tenderer_signature' =>'required',
            'note' =>'required',
           
        ]);

        if(empty($request->session()->get('tor'))){
            $tor = new Tor();
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }else{
            $tor = $request->session()->get('tor');
            $tor->fill($validatedData);
            $request->session()->put('tor', $tor);
        }

        session(['next_step' => $request->next_step]);
        return redirect('admin/tor/create_step5');

    }

    public function createStep5(Request $request)
    {
        session()->forget('next_step');
        $tor = $request->session()->get('tor');
        return view('admin.tor.create_step5',compact('tor',$tor));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tor = $request->session()->get('tor');
        $tor->save();
        return redirect('admin/tor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tor  $tor
     * @return \Illuminate\Http\Response
     */
    public function show(Tor $tor)
    {
        return view('admin.tor.show',compact('tor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tor  $tor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tor $tor)
    {
      //  $tor = Tor::find($id);
      //  return view('admin.tor.edit',compact('tor'));
      return view('admin.tor.edit',compact('tor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tor  $tor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tor $tor)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'subject' => 'required',
            'type' =>'required',
            'background'=>'required',
            'objective'=>'required',
            'work_required'=>'required',
            'scope_of_work' =>'required',
            'roles_responsibilities'=>'required',
            'time_frame' =>'required',
            'deliverables'=>'required',
            'terms_conditions' => 'required',
            'service_provider' => 'required',
            'assignment_location' => 'required',
            'applying_procedure' => 'required',
            'evaluation_criteria' => 'required',
            'documents_submit' =>'required',
            'financial_offer' =>'required',
            'submitted_on' =>'required',
            'acknowledgement' =>'required',
            'tenderer_signature' =>'required',
            'note' =>'required',
        ]);
       // $tor = Tor::find($id);
        $tor->update($request->all());
        return redirect('admin/tor');
    //  $tor->save();
     //    return redirect()->action('TorController@index')->with('success',"Tor Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tor  $tor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tor::where('id',$id)->delete();
         return redirect()->action('TorController@index')->with('success','Tor Delete Successfully');
    }

    public function export_pdf($id)
    {
      // Fetch all customers from database
     // $data = Tor::get();
      // Send data to the view using loadView function of PDF facade
      $pdf = PDF::loadView('tor/{id}');
      // If you want to store the generated pdf to the server then you can use the store function
      //$pdf->save(storage_path().'_filename.pdf');
      // Finally, you can download the file using download function
      return $pdf->download('tor.pdf');
    }
  
    public function home(){
        $template=Template::all();
    }

    public function apply(){

     
        $bsf=Bsf::all();
        $tor=Tor::all();
        $bidder=Bidder::all();
     
        return view('admin.tor.apply',compact('tor','bsf','bidder'));
    }
    public function submit(){
     
            $validatedData = $request->validate([
                'understanding_of_work'=>'required',
                'tors_id'=>'required',
                'bidders_id'=>'required',
                
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
    public function downloadPDF($id) {
        $tor = Tor::find($id);
        $pdf = PDF::loadView('admin.tor.invoice', compact('tor'));
        dd($pdf);        
        return $pdf->download('tor.pdf');
}
}
