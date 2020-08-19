<?php

namespace App\Http\Controllers;

use App\Bidder;
use App\Category;
use Auth;
use Session;
use Illuminate\Http\Request;

class BidderController extends Controller
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
         $this->middleware('permission:bidder_show|bidder_create|bidder_edit|bidder_delete', ['only' => ['index','show']]);
         $this->middleware('permission:bidder_create', ['only' => ['create','store']]);
         $this->middleware('permission:bidder_edit', ['only' => ['edit','update']]);
         $this->middleware('permission:bidder_delete', ['only' => ['destroy']]);
    }

    
    public function index(Request $request)
    {
        $request->session()->forget('bidder');
        $bidder = Bidder::all();
        // $categories=Category::all();
        return view('admin.bidder.index',compact('bidder',$bidder));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function createStep1(Request $request)
    {
        session()->forget('next_step');
        $bidder = $request->session()->get('bidder');
        $category = Category::all();
        return view('admin.bidder.create_step1',compact('bidder','category', $bidder,$category));

      // dd($bidder);
    }

    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'company_name' => 'required',
            'categories_id'=> 'required',
            'legal_status' => 'required',
            'registration_no' => 'required',
            'establishment_year' =>'required',
            'TIN'=>'required',
            'license_no'=>'required',
            'BIN'=>'required',
            'phone_no' =>'required',
            'description'=>'required',
            //'filename' => 'required|file|mimes:doc,pdf,docx,zip,csv,txt',
            'Head_office_address' =>'required',
            'Zip_code'=>'required',
            'company_website' => 'required',
            
        ]);

       if(empty($request->session()->get('bidder'))){
            $bidder = new Bidder();
            $bidder->fill($validatedData);
            $request->session()->put('bidder', $bidder);
        }else{
            $bidder = $request->session()->get('bidder');
            $bidder->fill($validatedData);
            $request->session()->put('bidder', $bidder);
        }
      
        session(['next_step' => $request->next_step]);
        return redirect('admin/bidder/create_step2');

    }

    public function createStep2(Request $request)
    {
        session()->forget('next_step');
        $bidder = $request->session()->get('bidder');
        return view('admin.bidder.create_step2',compact('bidder', $bidder));
    }
    

    public function postCreateStep2(Request $request)
    {
        $bidder = $request->session()->get('bidder');
        $validatedData = $request->validate([
            'title' =>'required',
            'name' => 'required',
            'gender' => 'required',
            'national_id' => 'required',
            'department' => 'required',
    
        ]);

        if(empty($request->session()->get('bidder'))){
            $bidder = new Bidder();
            $bidder->fill($validatedData);
            $request->session()->put('bidder', $bidder);
        }else{
            $bidder = $request->session()->get('bidder');
            $bidder->fill($validatedData);
            $request->session()->put('bidder', $bidder);
        }

        session(['next_step' => $request->next_step]);
        return redirect('admin/bidder/create_step3');

    }

    public function createStep3(Request $request)
    {
        session()->forget('next_step');
        $bidder = $request->session()->get('bidder');
        return view('admin.bidder.create_step3',compact('bidder', $bidder));
    }
    
    public function postCreateStep3(Request $request) 
    {
        $bidder = $request->session()->get('bidder');
       // $this->validate($request, [

       //     'trade_license' => '',

        //    'trade_license.*' => 'mimes:doc,pdf,docx,zip,csv'

 //   ]);

   /* $this->validate($request, [

        'trade_license' => 'required',

        'trade_license.*' => 'mimes:doc,pdf,docx,zip,csv,txt'

]);*/



         /*   if($request->hasfile('trade_license'))

            {

                foreach($request->file('trade_license') as $bidder)

                {
                    //$name = time().'.'.$bidder->extension();
                  $name = date("F j, Y, g:i:s a").'-'.$file->getClientOriginalName();
                  //  dd($name);

                    $bidder->move(public_path().'/files/', $name);  
                // dd($file);

                    $data[] = $name;  
                

                }

            }*/



          //  $bidder= new Bidder();

           // $bidder->trade_license=json_encode($data);

           // $bidder->save($data);

          //  dd($bidder);




      //  dd($bidder);
       $validatedData = $request->validate([
         
           'trade_license' => 'required',
            'trade_license.*' =>'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg',
           'memorandum_of_article' => 'required',
            'memorandum_of_article.*' =>'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg',
            'TIN_certificate' => 'required',
            'TIN_certificate.*' =>'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg',
            'BIN_certificate' => 'required',
            'BIN_certificate.*' =>'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg',
            'bank_solvency_certificate' => 'required',
            'bank_solvency_certificate.*' =>'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg',
            'associates_membership_certificate' =>'required',
            'associates_membership_certificate.*' =>'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg',
            'company_profile' => 'required',
            'company_profile.*' =>'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg'
           
            
        ]);
        $path = storage_path('files');

            if (!file_exists($path)) {
               mkdir($path, 0777, true);
           }

            $file[] = $request->file('trade_license','memorandum_of_article','TIN_certificate','BIN_certificate',
            'bank_solvency_certificate','associates_membership_certificate','company_profile');

            $name = uniqid() . '_' . trim($file->getClientOriginalName());

            $file->move($path, $name);

            return response()->json([
               'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
            ]);
            $file = File::create($request->all());
         foreach ($request->input('trade_license', []) as $file) {
               $project->addMedia(storage_path('public/files/' . $file))->toMediaCollection('trade_license');
           }
      
       if ($files = $request->file('trade_license')) {
            $destinationPath = 'files/'; // upload path
            $trade_license = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $trade_license);
          //  $insert['trade_license'] = "$trade_license";
         }
         if ($files = $request->file('memorandum_of_article')) {
            $destinationPath = 'files/'; // upload path
            $memorandum_of_article = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $memorandum_of_article);
            //$insert['memorandum_of_article'] = "$memorandum_of_article";
         }
         if ($files = $request->file('TIN_certificate')) {
            $destinationPath = 'files/'; // upload path
            $TIN_certificate = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $TIN_certificate);
           // $insert['TIN_certificate'] = "$TIN_certificate";
         }
         if ($files = $request->file('BIN_certificate')) {
            $destinationPath = 'files/'; // upload path
            $BIN_certificate = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $BIN_certificate);
           // $insert['BIN_certificate'] = "$BIN_certificate";
         }
         if ($files = $request->file('bank_solvency_certificate')) {
            $destinationPath = 'files/'; // upload path
            $bank_solvency_certificate = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $bank_solvency_certificate);
           // $insert['bank_solvency_certificate'] = "$bank_solvency_certificate";
         }
         if ($files = $request->file('associates_membership_certificate')) {
            $destinationPath = 'files/'; // upload path
            $associates_membership_certificate = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $associates_membership_certificate);
           // $insert['associates_membership_certificate'] = "$associates_membership_certificate";
         }
         if ($files = $request->file('company_profile')) {
            $destinationPath = 'files/'; // upload path
            $company_profile= date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $company_profile);
          //  $insert['company_profile'] = "$company_profile";
         }

         $check = Bidder::insertGetId($insert);
      
    
                $bidder= new Bidder();
    
                $bidder->trade_license=json_encode($data);
    
             //  $bidder->save();
    
    
       if(empty($request->session()->get('bidder'))){
            $bidder = new Bidder();
            $bidder->fill($validatedData);
            //$bidder->trade_license=json_encode($data);
           // $file->filenames=json_encode($data);
            $request->session()->put('bidder', $bidder);
        }else{
            $bidder = $request->session()->get('bidder');
          //  $bidder->fill($validatedData);
            $request->session()->put('bidder', $bidder);
        }
        
        session(['next_step' => $request->next_step]);
        return redirect('admin/bidder/create_step4');

    }

    public function createStep4(Request $request)
    {
        session()->forget('next_step');
        $bidder = $request->session()->get('bidder');
        return view('admin.bidder.create_step4',compact('bidder',$bidder));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* if($request->get('image'))
        {
          $image = $request->get('image');
          $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('image'))->save(public_path('/public/files/').$name);
        }*/

      //  $file = File::create($request->all());
      /*  foreach ($request->input('trade_license', []) as $file) {
            $file->addMedia(storage_path('public/files/' . $file))->toMediaCollection('trade_license');
        }*/
     
        
        $bidder = $request->session()->get('bidder');
      
        $bidder->save();
        return redirect('admin/bidder');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bidder = Bidder::find($id);
        return view('admin.bidder.show',compact('bidder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidder $bidder)
    {
       // $company = Company::find($company);
       // $company = $request->session()->get('company');
        return view('admin.bidder.edit',compact('bidder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bidder $bidder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidder  $bidder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $bidder = Bidder::find($id);
        $bidder->delete();
         return redirect()->action('BidderController@index')->with('success','BIDDER Delete Successfully');
    }
}
