@extends('layouts.app')


@section('content')

{{-- <script>

    //"Accept terms" form submission- By Dynamic Drive
    //For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
    //This credit MUST stay intact for use
    
    var checkobj
    
    function agreesubmit(el){
    checkobj=el
    if (document.all||document.getElementById){
    for (i=0;i<checkobj.form.length;i++){  //hunt down submit button
    var tempobj=checkobj.form.elements[i]
    if(tempobj.type.toLowerCase()=="submit")
    tempobj.disabled=!checkobj.checked
    }
    }
    }
    
    function defaultagree(el){
    if (!document.all&&!document.getElementById){
    if (window.checkobj&&checkobj.checked)
    return true
    else{
    alert("Please read/accept terms to submit form")
    return false
    }
    }
    }
    
    </script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
    <script type="text/javascript">
    function idForm(){
    var selectvalue = $('input[name=choice]:checked', '#idForm').val();


    if(selectvalue == "pc"){
    window.open('create_step1','_self');
    return true;
    }
    else if(selectvalue == "ps2"){
    window.open('create_step1','_self');
    return true;
    }else if(selectvalue == 'ps3'){
    window.open('create_step1','_self');
    return true;
    }else if(selectvalue == 'psp'){
    window.open('create_step1','_self');
    return true;
    }
    // else if(selectvalue == 'bk'){
    // window.open('create_step1','_self');
    // return true;
    // }
    return false;
    };


    </script>
<div class="col-xl-12">
<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    Choose a Basic template for quick creation or start as a blank
                </h3>
            </div>
        </div>
    </div>
    {{-- <form class="m-form m-form--fit m-form--label-align-right" id="applyform" name="applyform" onSubmit="return defaultagree(this)" method="POST" action="/admin/tor/create_step1"> --}}
        <form id="idForm">
        @csrf
        <div class="m-portlet__body">
            <div class="m-form__group form-group row">
                <div class="col-12">
                <label class="col-6 "><h2><span class="badge badge-primary">Tor Category :</span></h2></label>
            </div>
                <div class="col-12">
                    <div class="col-12">
                       
                        {{-- @foreach($templates as $templates) --}}
                        


                        <div class="col-12">
                        <label class="m-radio">
                             {{-- <input type="radio"   name="example_6" value="{{$templates->name}}" onClick="agreesubmit(this)"><h3>{{$templates->skip(2)->take(1)->first('name')}} </h3> --}}
                             <input type="radio" onclick="idForm()"  name="choice" value="pc"/><h3><strong>Video Editing</strong></h3> <br><br>
                        <span></span>
                        </label>
                        </div>
                    
                        {{-- @endforeach --}}
                        <div class="col-12">
                        <label class="m-radio">
                        {{-- <input type="radio" name="example_6" value="{{$templates->skip(1)->take(1)->first('name')}} " onClick="agreesubmit(this)"> <h3>{{$templates->skip(1)->take(1)->first('name')}}</h3> --}}
                        <input type="radio"  onclick="idForm()" name="choice" value="ps2"/><h3><strong>Bridge & Road Construction</strong></h3> <br><br>
                        <span></span>
                        </label>
                        </div>
                        <div class="col-12">
                        <label class="m-radio">
                            {{-- <input type="radio" name="example_6" value="{{$templates->skip(3)->take(1)->first('name')}} " onClick="agreesubmit(this)"><h3>{{$templates->skip(3)->take(1)->first('name')}}</h3> --}}
                            <input type="radio"  onclick="idForm()" name="choice" value="ps3"/><h3><strong>Building Construction</strong></h3><br><br>
                            <span></span>
                        </label>
                        </div>
                        <div class="col-12">
                        <label class="m-radio">
                            {{-- <input type="radio" name="example_6" value="{{$templates->skip(4)->take(1)->first('name')}} " onClick="agreesubmit(this)"> <h3>{{$templates->skip(4)->take(1)->first('name')}}</h3> --}}
                            <input type="radio"  onclick="idForm()" name="choice" value="psp"/><h3><strong>Creative Design & Development</strong></h3> <br><br>
                            <span></span>
                        </label>
                        </div>
                        <div class="col-12">
                            <label class="m-radio">
                                {{-- <input type="radio" name="example_6" value="{{$templates->skip(4)->take(1)->first('name')}} " onClick="agreesubmit(this)"> <h3>{{$templates->skip(4)->take(1)->first('name')}}</h3> --}}
                                <input type="radio"  onclick="idForm()" name="choice" value="psp"/><h3><strong>Making Movie</strong></h3> <br><br>
                                <span></span>
                            </label>
                            </div>
                        {{-- <label class="m-radio">
                            <input type="radio" name="example_6" value="{{$templates->skip(5)->take(1)->first('name')}} "> <p><h3>{{$templates->skip(5)->take(1)->first('name')}}</h3></p>
                            <span></span>
                        </label> --}}
                       
                    </div>
                  
                </div>
            </div><br><br>
            {{-- <div class="col-lg-6 m--align-right">
                <input type="Submit" value="Submit!" disabled>
               {{-- <button name="next" type="submit" disabled id="button02" class="btn btn-primary"> 
                    {{ __('Next') }}
                </button> --}}
            </div> --}}
            {{-- @foreach($tor as $i=>$row)
{{$row->templates->name}}
@endforeach --}}
{{-- @inject('templates', 'App\Template')

<div>
    {{-- Template Name: {{ $templates->first('name') }} --}}
{{-- <p> <h2>Template Name:     {{$templates->skip(2)->take(1)->first('name')}}</h2></p><br> --}}

{{-- </div> --}}
<div>
    {{-- <p> <h2>Template Name:{{$templates->skip(1)->take(1)->first('name')}}</h2></p><br> --}}
    {{-- Template Name:  {{$templates->skip(2)->take(1)->first('name')}} --}}
</div>
<div>
    {{-- <p> <h2>Template Name:{{$templates->skip(0)->take(1)->first('name')}}</h2></p><br> --}}
  {{-- <br><p><h2>Template Name: {{$templates->skip(0)->take(1)->first('name')}}</h2> </p>  --}}
</div>
<div>
    {{-- <p> <h2>Template Name:{{$templates->skip(3)->take(1)->first('name')}}</h2></p><br> --}}
    {{-- Template Name:  {{$templates->skip(4)->take(1)->first('name')}} --}}
</div>
<div>
    {{-- <p> <h2>Template Name:{{$templates->skip(4)->take(1)->first('name')}}</h2></p><br> --}}
    {{-- Template Name:  {{$templates->skip(5)->take(1)->first('name')}} --}}
</div>
        </div>
    </form>
    <script>
        //change two names below to your form's names
        document.forms.applyform.example_6.checked=false
        </script>
        
</div> --}}

</div>
@stop