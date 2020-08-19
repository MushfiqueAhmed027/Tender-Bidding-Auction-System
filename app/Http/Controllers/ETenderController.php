<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Redirect;
use App\E_tender;
use App\Tor;
use PDF;
use Illuminate\Http\Request;

class ETenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
       // $data = Role::all();
        $tor = Tor::pluck('name','id','subject','type','submitted_on');
        return view('admin.e_tender.index',compact('tor'));

    }

    public function downloadPDF($id) {
        $tor = Tor::find($id);
        $pdf = PDF::loadView('pdf', compact('tor'));
        
        return $pdf->download('tor.pdf');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\E_tender  $e_tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tor $tor)
    {
        //return view('admin.tor.show',compact('tor'));
        return Redirect::action('TorController@show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\E_tender  $e_tender
     * @return \Illuminate\Http\Response
     */
    public function edit(E_tender $e_tender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\E_tender  $e_tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, E_tender $e_tender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\E_tender  $e_tender
     * @return \Illuminate\Http\Response
     */
    public function destroy(E_tender $e_tender)
    {
        //
    }
}
