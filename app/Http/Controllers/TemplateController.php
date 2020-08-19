<?php

namespace App\Http\Controllers;
// use App\Tender;
use App\Template;
// use App\Category;
use PDF;
use Auth;
use Session;
use Illuminate\Http\Request;

class TemplateController extends Controller
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
         $this->middleware('permission:template_show');
         $this->middleware('permission:template_create', ['only' => ['create','store']]);
         $this->middleware('permission:template_edit', ['only' => ['edit','update']]);
         $this->middleware('permission:template_delete', ['only' => ['destroy']]);
    }
    
    public function index(Request $request)
    {
        $request->session()->forget('template');
        $template = Template::all();
        // $template = DB::table('templates')->where('name', 'BRAC')->first();
        // dd($template);
        return view('admin.template.index',compact('template',$template));
    }

  
    public function createStep1(Request $request)
    {
        session()->forget('next_step');
        $template = $request->session()->get('template');
        // $category = Category::all();
        return view('admin.template.create_step1',compact('template', $template));

      // dd($template);
    }

    
    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            // 'categories_id'=> 'required',
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

       if(empty($request->session()->get('template'))){
            $template = new template();
            $template->fill($validatedData);
            $request->session()->put('template', $template);
        }else{
            $template = $request->session()->get('template');
            $template->fill($validatedData);
            $request->session()->put('template', $template);
        }
      
        session(['next_step' => $request->next_step]);
        return redirect('admin/template/create_step2');

    }

    public function createStep2(Request $request)
    {
        session()->forget('next_step');
        $template = $request->session()->get('template');
        return view('admin.template.create_step2',compact('template', $template));
    }

    public function postCreateStep2(Request $request)
    {
        $template = $request->session()->get('template');
        $validatedData = $request->validate([
            'documents_submit' =>'required',
           
        ]);

        if(empty($request->session()->get('template'))){
            $template = new template();
            $template->fill($validatedData);
            $request->session()->put('template', $template);
        }else{
            $template = $request->session()->get('template');
            $template->fill($validatedData);
            $request->session()->put('template', $template);
        }

        session(['next_step' => $request->next_step]);
        return redirect('admin/template/create_step3');

    }

    public function createStep3(Request $request)
    {
        session()->forget('next_step');
        $template = $request->session()->get('template');
        return view('admin.template.create_step3',compact('template', $template));
    }

    public function postCreateStep3(Request $request)
    {
        $template = $request->session()->get('template');
        $validatedData = $request->validate([
            'financial_offer' =>'required',
           
        ]);

        if(empty($request->session()->get('template'))){
            $template = new template();
            $template->fill($validatedData);
            $request->session()->put('template', $template);
        }else{
            $template = $request->session()->get('template');
            $template->fill($validatedData);
            $request->session()->put('template', $template);
        }

        session(['next_step' => $request->next_step]);
        return redirect('admin/template/create_step4');

    }

    public function createStep4(Request $request)
    {
        session()->forget('next_step');
        $template = $request->session()->get('template');
        return view('admin.template.create_step4',compact('template', $template));
    }

    public function postCreateStep4(Request $request)
    {
        $template = $request->session()->get('template');
        $validatedData = $request->validate([
            'submitted_on' =>'required',
            'acknowledgement' =>'required',
            'tenderer_signature' =>'required',
            'note' =>'required',
           
        ]);

        if(empty($request->session()->get('template'))){
            $template = new template();
            $template->fill($validatedData);
            $request->session()->put('template', $template);
        }else{
            $template = $request->session()->get('template');
            $template->fill($validatedData);
            $request->session()->put('template', $template);
        }

        session(['next_step' => $request->next_step]);
        return redirect('admin/template/create_step5');

    }

    public function createStep5(Request $request)
    {
        session()->forget('next_step');
        $template = $request->session()->get('template');
        return view('admin.template.create_step5',compact('template',$template));
    }
    
 
    public function store(Request $request)
    {
        $template = $request->session()->get('template');
        $template->save();
        return redirect('admin/template');
    }

    public function show(Template $template)
    {
        return view('admin.template.show',compact('template'));
    }
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
      //  $template = template::find($id);
      //  return view('admin.template.edit',compact('template'));
      return view('admin.template.edit',compact('template'));
    }

    /**
     * Update the specified resource in stemplateage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
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
       // $template = template::find($id);
        $template->update($request->all());
        return redirect('admin/template');
    //  $template->save();
     //    return redirect()->action('templateController@index')->with('success',"template Updated Successfully");
    }
    // public function show(Request $request)
    // {
    //     $request->session()->forget('template');
    //     $template = Template::all();
    //     return view('admin.template.show',compact('template',$template));
    // }
    /**
     * Remove the specified resource from stemplateage.
     *
     * @param  \App\template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        template::where('id',$id)->delete();
         return redirect()->action('templateController@index')->with('success','template Delete Successfully');
    }

    public function export_pdf($id)
    {
      // Fetch all customers from database
     // $data = template::get();
      // Send data to the view using loadView function of PDF facade
      $pdf = PDF::loadView('template/{id}');
      // If you want to stemplatee the generated pdf to the server then you can use the stemplatee function
      //$pdf->save(stemplateage_path().'_filename.pdf');
      // Finally, you can download the file using download function
      return $pdf->download('template.pdf');
    }
}
