@extends('layouts.app')
@section('content')

      
   <!--begin::Portlet-->
<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
               
                <h3 class="m-portlet__head-text">
                   
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form class="m-login__form m-form" method="POST" action="{{ route('tor.store') }}">
        @csrf
        <div class="m-portlet__body">
            <div class="m-form__section m-form__section--first">
              
                <div class="form-group m-form__group row">
                    
                    <label class="col-lg-2 col-form-label">Tender Name:</label>
                    <div class="col-lg-12">
                        @foreach($tor as $tors)
                    <input type="name" class="form-control m-input" name="name" value="Application for {{$tors->name}}">
                    @endforeach
                    {{-- value="{{$form[1]->subject}}" --}}
                    
                    {{-- @foreach(\App\Tor::all() as $tor)
                                    <option value="{{$tor->id}}">{{$tor->name}}</option>
                                        @endforeach --}}
                        {{-- <input id="name" type="text" class="form-control m-input @error('name') is-invalid @enderror"  name="name" value="{{ $tor->name }}" required autocomplete="name" autofocus > --}}
                    {{-- <input id="name_{{$tors->id}}" type="text" class="form-control @error('name_{{$tors->id}}') is-invalid @enderror" name="name_{{$tors->id}}" value="{{ old('name_' . {{$tors->id}},$tor->name) }}"    required autocomplete="name" autofocus> --}}
                        {{-- @foreach (\App\Tor::all() as $tors as $tor)
                        {{$tor->name}}
                      @endforeach --}}
                        {{-- <input type="email" class="form-control m-input" placeholder="Enter email">
                        {{$TorName}} --}}

                    </div>
                </div>
               
                <div class="form-group m-form__group row">
                    <label class="col-lg-2 col-form-label">Scope of Work:</label>
                    <div class="col-lg-12">
                        @foreach($tor as $tors)
                        <textarea class="form-control" id="scope_of_work" name="scope_of_work">{{$tors->scope_of_work}}</textarea> 
                                                                        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                        <script>
                                                                            CKEDITOR.replace( 'scope_of_work' );
                                                                        </script> 
                     @endforeach
                    </div>

                </div>
                <div class="form-group m-form__group row">
                    <label class="col-lg-4 col-form-label">Understanding of Work:</label>
                    <div class="col-lg-12">
                        <textarea class="form-control" id="understanding_of_work" name="understanding_of_work"></textarea> 
                                                                        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                        <script>
                                                                            CKEDITOR.replace( 'understanding_of_work' );
                                                                        </script> 
                  
                    </div>
                </div>
                <input type="checkbox" id="same" name="same" onchange= "addressFunction()"/>              
                <label for = "same">Terms & condition <strong>(If Applicable)</strong></label> 
                <div class="form-group m-form__group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Registration No*:</label>
                    <div class="col-xl-9 col-lg-9">
                        @foreach($bidder as $bidders)
                     
                        <input id="registration_no" type="text" class="form-control m-input @error('registration_no') is-invalid @enderror" name="registration_no" value="{{$bidders->registration_no}}" required autocomplete="registration_no" autofocus >
                    @endforeach
                        @error('registration_no')
                      
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
            
                <div class="form-group m-form__group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Tax Identification Number (TIN)*:</label>
                    <div class="col-xl-9 col-lg-9">
                        @foreach($bidder as $bidders)
                        <input id="TIN" type="text" class="form-control m-input @error('TIN') is-invalid @enderror"  name="TIN" value="{{$bidders->TIN}}"  required autocomplete="TIN" autofocus >
                        @endforeach
                        @error('TIN')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Trade License Number*:</label>
                    <div class="col-xl-9 col-lg-9">
                        @foreach($bidder as $bidders)
                        <input id="license_no" type="text" class="form-control m-input @error('license_no') is-invalid @enderror"  name="license_no" value="{{$bidders->license_no}}" required autocomplete="license_no" autofocus >
                       @endforeach
                        @error('license_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Business Identification Number (BIN)*:</label>
                    <div class="col-xl-9 col-lg-9">
                        @foreach($bidder as $bidders)
                        <input id="BIN" type="text" class="form-control m-input @error('BIN') is-invalid @enderror"  name="BIN" value="{{$bidders->BIN}}" required autocomplete="BIN" autofocus >
                       @endforeach
                        @error('BIN')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                
            
                <div class="form-group m-form__group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Phone No*</label>
                    <div class="col-xl-9 col-lg-9">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                            @foreach($bidder as $bidders)
                            <input id="phone_no" type="text"  class="form-control m-input @error('phone_no') is-invalid @enderror"   name="phone_no" value="{{$bidders->phone_no}}" required autocomplete="phone_no" autofocus >
                       @endforeach
                        </div>
                        <span class="m-form__help">Enter your valid phone Number</span>
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Company Website*:</label>
                    <div class="col-xl-9 col-lg-9">
                        @foreach($bidder as $bidders)
                        <input id="company_website" type="text" class="form-control m-input @error('company_website') is-invalid @enderror"  name="company_website" value="{{$bidders->company_website}}" required autocomplete="company_website" autofocus>
                       @endforeach
                        <span class="m-form__help">Enter your valid website address. e.g:  www.xyz.com</span>
                    </div>
                </div>
               
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
       
       
      
     
   

          
           

       
    </form>
    <!--end::Form-->
</div>
<!--end::Portlet-->
{{-- <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
    <a  href="../../../crud/forms/widgets/form-repeater.html" class="m-menu__link " >
        <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
        <span class="m-menu__link-text">Form Repeater</span></a></li> --}}
{{-- <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/custom/crud/forms/widgets/form-repeater.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/custom/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
  WebFont.load({
    google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
    active: function() {
        sessionStorage.fonts = true;
    }
  });
</script>
<script>
$(document).ready(function(){
    var basePath = $("#base_path").val();
    $("#compant_name").autocomplete({
        source: function(request, cb){
            console.log(request);
            
            $.ajax({
                url: basePath+'get-employess/'+request.term,
                method: 'GET',
                dataType: 'json',
                success: function(res){
                    var result;
                    result = [
                        {
                            label: 'There is no matching record found for '+request.term,
                            value: ''
                        }
                    ];

                    console.log("Before format", res);
                    

                    if (res.length) {
                        result = $.map(res, function(obj){
                            return {
                                label: obj.id,
                                value: obj.id,
                                data : obj
                            };
                        });
                    }

                    console.log("formatted response", result);
                    cb(result);
                }
            });
        },
        select: function( event, selectedData ) {
            console.log(selectedData);

            if (selectedData && selectedData.item && selectedData.item.data){
                var data = selectedData.item.data;

                $('#company_name').val(data.company_name);
                $('#legal_status').val(data.legal_status);
                $('#registration_no').val(data.registration_no);
                $('#establishment_year').val(data.establishment_year);
                $('#TIN').val(data.TIN);
                $('#BIN').val(data.BIN);
                $('#license_no').val(data.license_no);
                $('#phone_no').val(data.phone_no);
                $('#description').val(data.company_website);
             
            }
            
        }  
    });  
});
</script> --}}


@stop