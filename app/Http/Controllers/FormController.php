<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use App\Tor;
use App\Bidder;
use App\Form;
class FormController extends Controller
{
    public function create(){
           // $form=DB::table('forms')
        // ->join('tors','forms.tor_id','tors.id')
        // ->get();
        // $form=Form::all();
        $form=DB::table('tors')
        ->leftjoin('forms','tors.id','=','forms.id')
        ->select('subject')
        
        ->get();

        $form_1=DB::table('tors')
        ->leftjoin('forms','tors.id','=','forms.id')
        ->select('scope_of_work')
        
        ->get();
        $form_2=DB::table('bidders')
        ->leftjoin('forms','bidders.id','=','forms.id')
        ->select('registration_no')
        
        ->get();
       
        $form_3=DB::table('bidders')
        ->leftjoin('forms','bidders.id','=','forms.id')
        ->select('TIN')
        
        ->get();
        
        $form_4=DB::table('bidders')
        ->leftjoin('forms','bidders.id','=','forms.id')
        ->select('license_no')
        
        ->get();
        
        $form_5=DB::table('bidders')
        ->leftjoin('forms','bidders.id','=','forms.id')
        ->select('BIN')
        
        ->get();
        
        $form_6=DB::table('bidders')
        ->leftjoin('forms','bidders.id','=','forms.id')
        ->select('phone_no')
        
        ->get();
        
        $form_7=DB::table('bidders')
        ->leftjoin('forms','bidders.id','=','forms.id')
        ->select('company_website')
        
        ->get();
        // dd($form_7);
        //  dd($form);
        // $tor_id=$request->tor_id;
        //  $tor=DB::table('tors')->where('id',$tor_id)->first();
        // $tor=DB::table('tors')->get();
        // $tor= App\Tor::find(1)->get();
        
        // $tor=DB::table('tors')->
        // ->where-> (($tor->id)>($tor->name));
        //   $tor=Tor::all();
        //  $tor=DB::table('tors')->find('id');
        // $tor = DB::table('tors')->where('name','E-GP')->get();
        // $tor = DB::table('tors')->where('name', 'BRAC')->first();
        // $tor = Category::where('status',1)->pluck('name','id');
        // $tor = Tor::pluck('id','name');
        // $tor = DB::table('tors')->distinct()->get();
        // $tor = DB::table('tors')->get();
        //dd($form);
        // $bidder=Bidder::all();
        // $tor=DB::table('tors')->get('name');
        //  dd($tor);
        // $showName = Tor::where('name')->get('name');
        // dd($showName);
        // $forms=Form::where('tors_id',$torid)->with('Form')->get();
        // return view('admin.form.create',compact('tor','bidder',$bidder,$tor));
        // $tor = DB::table('tors')
        // ->where([['tors.id',$id],['tors.scope_of_work',\App\Tor::tor],['status','approved'],['vehicles.isDeleted','false']])
        // ->join('manufactures','manufactures.id' , '=' , 'vehicles.manufacture_id')
        // ->join('brands','brands.id','=','manufactures.brand_id')
        // ->join('models','models.id' , '=' , 'vehicles.model_id')
        // ->join('model_versions','model_versions.id','=','vehicles.model_version_id')
        // ->join('cities','cities.id' , '=' , 'vehicles.city_id')
        // ->join('model_years','model_years.id','=','vehicles.model_year_id')
        // ->join('engine_types','engine_types.id','=','vehicles.engine_type_id')
        // ->join('transmissions','transmissions.id','=','vehicles.transmission_id')
        // ->select('vehicles.*','engine_types.title as engine_type','transmissions.title as transmission','brands.title as manufacture','models.title as model','model_versions.title as model_version','cities.title as city','model_years.year as year')
        // ->orderby('vehicles.featured','desc')
        // ->get();
        //  $bsf =DB::table('tors')
        //     ->leftjoin('forms', 'tors.id', '=', 'forms.tors_id')
        //     ->join('categories','forms.categories_id','=','categories.id')
        //     // ->join('bidders', 'forms.bidders_id', '=', 'bidders.id')
        //     // ->select('forms.id','categories.name', 'tors.scope_of_work', 'bidders.registration_no','bidders.TIN','bidders.BIN','bidders.license_no','bidders.phone_no')
        // //    ->select('tors.subject','tors.name')
        //     ->get();
        // $bsf = DB::table('tors')->pluck('name','subject');
        // $bsf = date('Y-m-d H:i:s');
    //    $bsf= DB::table('tenders')
    //             ->whereDate('closing_date', '>=', Carbon::now()->toDateString())
    //             ->get();
    //         dd($bsf);
        return view ('admin.form.create',compact('form','form_1','form_2','form_3','form_4','form_5','form_6','form_7',$form,$form_1,$form_2,$form_3,$form_4,$form_5,$form_6,$form_7));
    }

    public function store(Request $request){
        $validatedData = $request->validate([

            'name'=>'required',
            // 'categories_id'=>'required',
            // 'tor_scope_of_work'=>'required',
            // 'understanding_of_work'=>'required',
            // // 'bidder_company_name' => 'required',
           
            // 'bidder_registration_no' => 'required',
            
            // 'bidder_TIN'=>'required',
            // 'bidder_license_no'=>'required',
            // 'bidder_BIN'=>'required',
            // 'bidder_phone_no' =>'required',
        ]);
        $form = new Form();
         $form->name = $request->name;
        $form->save();
        return redirect()->action('FormController@list')->with('success',"Thanks for filling out our form!");
    }
    public function list(){
        return view('admin.form.list');
    }
}
