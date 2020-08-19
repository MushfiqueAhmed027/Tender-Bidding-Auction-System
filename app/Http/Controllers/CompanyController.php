<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use Auth;
use Session;
class CompanyController extends Controller
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
         $this->middleware('permission:company_show|company_create|company_edit|company_delete', ['only' => ['index','show']]);
         $this->middleware('permission:company_create', ['only' => ['create','store']]);
         $this->middleware('permission:company_edit', ['only' => ['edit','update']]);
         $this->middleware('permission:company_delete', ['only' => ['destroy']]);
    }

    
    public function index(Request $request)
    {
        $request->session()->forget('company');
        $company = Company::all();
        return view('admin.company.index',compact('company',$company));
    }

   

    public function createStep1(Request $request)
    {
        session()->forget('next_step');
        $company = $request->session()->get('company');
        return view('admin.company.create_step1',compact('company', $company));

      // dd($company);
    }


    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'company_name' => 'required',
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

       if(empty($request->session()->get('company'))){
            $company = new Company();
            $company->fill($validatedData);
            $request->session()->put('company', $company);
        }else{
            $company = $request->session()->get('company');
            $company->fill($validatedData);
            $request->session()->put('company', $company);
        }
      
        session(['next_step' => $request->next_step]);
        return redirect('admin/company/create_step2');

    }



    public function createStep2(Request $request)
    {
        session()->forget('next_step');
        $company = $request->session()->get('company');
        return view('admin.company.create_step2',compact('company', $company));
    }
    


    public function postCreateStep2(Request $request)
    {
        $company = $request->session()->get('company');
        $validatedData = $request->validate([
            'title' =>'required',
            'name' => 'required',
            'gender' => 'required',
            'national_id' => 'required',
            'department' => 'required',
           
            'address_line_1' =>'required',
            'address_line_2' => 'required',
            'state' =>'required',
            'city' =>'required',
            'country'=>'required',
            
        ]);

        if(empty($request->session()->get('company'))){
            $company = new Company();
            $company->fill($validatedData);
            $request->session()->put('company', $company);
        }else{
            $company = $request->session()->get('company');
            $company->fill($validatedData);
            $request->session()->put('company', $company);
        }

        session(['next_step' => $request->next_step]);
        return redirect('admin/company/create_step3');

    }
    public function createStep3(Request $request)
    {
        session()->forget('next_step');
        $company = $request->session()->get('company');
        return view('admin.company.create_step3',compact('company',$company));
    }
    
    public function edit( Company $company)
    {
       // $company = Company::find($company);
       // $company = $request->session()->get('company');
        return view('admin.company.edit',compact('company'));
    }

    public function store(Request $request)
   {
    $company = $request->session()->get('company');
    $company->save();
    return redirect('admin/company');
   }
   public function update(Request $request,Company $company)
   {
  //  $company = $request->session()->get('company');
   //$company=Company::find($company);
   //$company = $request->session()->get('company');
  //  $company->save();
   //$company->update($request->all());
    //return redirect()->action('CompanyController@index');
    $validatedData = $request->validate([
        'company_name' => 'required',
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
        'title' =>'required',
        'name' => 'required',
        'gender' => 'required',
        'national_id' => 'required',
        'department' => 'required',
       
        'address_line_1' =>'required',
        'address_line_2' => 'required',
        'state' =>'required',
        'city' =>'required',
        'country'=>'required',
        
    ]);
    $company->update($request->all());
    return redirect('admin/company');
   }
   public function show(Company $company)
   {
    return view('admin.company.show',compact('company'));
   }
   public function destroy($id)
   {
       Company::where('id',$id)->delete();
        return redirect()->action('CompanyController@index')->with('success','Company Delete Successfully');
   }
}
