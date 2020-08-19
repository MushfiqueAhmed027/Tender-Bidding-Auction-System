@extends('layouts.app')
{{-- @section('page-title','Company Page') --}}

@section('content')
 
<!-- END: Subheader -->	
{{-- <div class="m-content">
    <div class="row"> --}}
        <div class="col-xl-12">
         <!--Begin::Main Portlet-->
		   <div class="m-portlet">
               <!--begin: Portlet Head-->
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Bidder Profile
                                {{-- <small>form wizard example</small> --}}
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
                                    <i class="flaticon-info m--icon-font-size-lg3"></i>
                                </a>	
                            </li>	
                        </ul>
                    </div>
                </div>
                <!--end: Portlet Head-->
               <!--begin: Form Wizard-->
			  <div class="m-wizard m-wizard--5 m-wizard--success" id="m_wizard">
                  	<!--begin: Message container -->
                    <div class="m-portlet__padding-x">
                        <!-- Here you can put a message or alert -->
                    </div>
                    <!--end: Message container -->
                    <!--begin: Form Wizard Head -->
                        <div class="m-wizard__head m-portlet__padding-x">	
                            <div class="row">
                                <div class="col-xl-10 offset-xl-1">			 
                                    <!--begin: Form Wizard Nav -->
                                    <div class="m-wizard__nav">
                                        <div class="m-wizard__steps">							 
                                            <div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_1">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">							
                                                        <span class="m-wizard__step-seq">1.</span>
                                                        <span class="m-wizard__step-label">
                                                            Company Information 
                                                        </span>
                                                        <span class="m-wizard__step-icon"><i class="la la-check"></i></span> 
                                                    </a>									
                                                </div>
                                            </div>
                                            
                                            <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">							
                                                        <span class="m-wizard__step-seq">2.</span>
                                                        <span class="m-wizard__step-label">
                                                            Personal Address
                                                        </span>
                                                        <span class="m-wizard__step-icon"><i class="la la-check"></i></span> 
                                                    </a>									
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">
                                                        <span class="m-wizard__step-seq">3.</span>
                                                        <span class="m-wizard__step-label">
                                                            Confirmation
                                                        </span>
                                                        <span class="m-wizard__step-icon"><i class="la la-check"></i></span>
                                                    </a>										
                                                </div>
                                            </div>
                                        </div>	
                                    </div>	
                                    <!--end: Form Wizard Nav -->						 
                                </div>
                            </div>					
                        </div>
                        <!--end: Form Wizard Head -->
                                     <!--begin: Form Wizard Form-->
                                     <div class="m-wizard__form">
                                        <!--
                                            1) Use m-form--label-align-left class to alight the form input lables to the right
                                            2) Use m-form--state class to highlight input control borders on form validation
                                        -->
                                        <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="post" action="{{ route('bidder.update',$bidder->id) }}" >
                                            @csrf
                                            @method('PUT')  
                                            
                                            <!--begin: Form Body -->
                                                <div class="m-portlet__body">
                                                                    <!--begin: Form Wizard Step 1-->
                                                        <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                                                            <div class="row">
                                                                <div class="col-xl-10 offset-xl-1">
                                                                    <div class="m-form__section m-form__section--first">
                                                                        <div class="m-form__heading">
                                                                            <h3 class="m-form__heading-title">Company Details</h3>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Company's Name:</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="company_name" type="text" class="form-control m-input @error('company_name') is-invalid @enderror" name="company_name" value="{{ $bidder->company_name }}" required autocomplete="company_name" autofocus >
                                                                                <span class="m-form__help">Please enter your company names</span>
                                                                                @error('company_name')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Legal Status:</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <div class="col-xl-9 col-lg-9">
                                                                                    <select name="legal_status" class="form-control m-input">
                                                                                        <option value="">Select</option>
                                                                                        <option value="Private">Private Ltd</option>
                                                                                        <option value="Public">Public</option>
                                                                                        <option value="Partnership">Partnership</option>
                                                                                        <option value="Government_Undertaking">Government Undertaking</option>
                                                                                    </select>
                                                                                </div>
                                                                            
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Registration No:</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="registration_no" type="text" class="form-control m-input @error('registration_no') is-invalid @enderror" name="registration_no" value="{{ $bidder->registration_no }}" required autocomplete="registration_no" autofocus >
                                                                                @error('registration_no')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Establishment Year:</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="establishment_year" type="date" class="form-control m-input @error('establishment_year') is-invalid @enderror"  name="establishment_year" value="{{ $bidder->establishment_year }}" required autocomplete="establishment_year" autofocus >
                                                                                @error('establishment_year')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Tax Identification Number (TIN):</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="TIN" type="text" class="form-control m-input @error('TIN') is-invalid @enderror"  name="TIN" value="{{ $bidder->TIN}}" required autocomplete="TIN" autofocus >
                                                                                @error('TIN')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Trade License Number:</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="license_no" type="text" class="form-control m-input @error('license_no') is-invalid @enderror"  name="license_no" value="{{ $bidder->license_no }}" required autocomplete="license_no" autofocus >
                                                                                @error('license_no')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Business Identification Number (BIN):</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="BIN" type="text" class="form-control m-input @error('BIN') is-invalid @enderror"  name="BIN" value="{{ $bidder->BIN }}" required autocomplete="BIN" autofocus >
                                                                                @error('BIN')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Phone No</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                                                    <input id="phone_no" type="text"  class="form-control m-input @error('phone_no') is-invalid @enderror"   name="phone_no" value="{{$bidder->phone_no }}" required autocomplete="phone_no" autofocus >
                                                                                </div>
                                                                                <span class="m-form__help">Enter your valid phone Number</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-form-label col-lg-3 col-sm-12">Description *</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                <textarea class="form-control" id="description" name="description"></textarea> 
                                                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                <script>
                                                                                    CKEDITOR.replace( 'description' );
                                                                                </script> 
                                                                            </div>
                                                                        </div>
                                                                     
                                                                    </div>
                                                                
                                                                    
                                                                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
        
                                                                    <div class="m-form__section">
                                                                        <div class="m-form__heading">
                                                                            <h3 class="m-form__heading-title">
                                                                                Mailing Address 
                                                                                <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i>
                                                                            </h3>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">Head Office Address:</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="Head_office_address"  type="text" class="form-control m-input @error('Head_office_address') is-invalid @enderror" name="Head_office_address" value="{{ $bidder->Head_office_address }}" required autocomplete="Head_office_address" autofocus>
                                                                                <span class="m-form__help">Street address, P.O. box, company name, c/o</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">Zip Code:</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="Zip_code" type="text" class="form-control m-input @error('Zip_code') is-invalid @enderror"  name="Zip_code" value="{{ $bidder->Zip_code }}" required autocomplete="Zip_code" autofocus >
                                                                                <span class="m-form__help">Enter your valid city code</span>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                       
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-xl-3 col-lg-3 col-form-label">Company Website:</label>
                                                                            <div class="col-xl-9 col-lg-9">
                                                                                <input id="company_website" type="text" class="form-control m-input @error('company_website') is-invalid @enderror"  name="company_website" value="{{ $bidder->company_website }}" required autocomplete="company_website" autofocus>
                                                                                <span class="m-form__help">Enter your valid website address. e.g:  www.xyz.com</span>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                        <!--end: Form Wizard Step 1-->        
                                                  
                                                </div>
                                               
                                            
                                             
                                        
                                    </div>
                                    <!--end: Form Wizard Form-->
                             </div>
                   </div>
                   <!--End::Main Portlet-->
                   <div class="m-wizard__form">
                    <!--
                        1) Use m-form--label-align-left class to alight the form input lables to the right
                        2) Use m-form--state class to highlight input control borders on form validation
                    -->
                    <div class="m-form__section m-form__section--first">
                        <div class="m-form__heading">
                            <h3 class="m-form__heading-title">Personal Details</h3>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Title:</label>
                            <div class="col-xl-9 col-lg-9">
                                <select name="title" class="form-control m-input">
                                    <option value="">Select</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Mrs">Mrs</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">* Name:</label>
                            <div class="col-xl-9 col-lg-9">
                                <input id="name" type="text"  class="form-control m-input @error('name') is-invalid @enderror" name="name" value="{{ $bidder->name }}" required autocomplete="name" autofocus>
                                <span class="m-form__help">Please enter your first and last names</span>
                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            
                            <div class="m-radio-inline">
                                <label class="col-xl-4 col-lg-4 col-form-label">*Gender:</label>
                                
                            
                                <label class="m-radio">
                                    <input type="radio" name="gender" value="Male" {{{ (isset($bidder->gender) && $bidder->gender == 'Male') ? "checked" : "" }}}> Male
                                    <span></span>
                                </label>
                                    <label class="m-radio">
                                        <input type="radio" name="gender" value="Female" {{{ (isset($bidder->gender) && $bidder->gender == 'Female') ? "checked" : "" }}}> Female
                                        <span></span>
                                        </label>
                           
                           
                            </div>
                            
                        </div>
                    

                    
                            <div class="form-group m-form__group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">* National Id:</label>
                                <div class="col-xl-9 col-lg-9">
                                <input type="text" id="national_id" class="form-control m-input @error('national_id') is-invalid @enderror" name="national_id" value="{{ $bidder->national_id}}" required autocomplete="national_id" autofocus>
                                @error('national_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Department:</label>
                                <div class="col-xl-9 col-lg-9">
                                <input type="text" id="department" class="form-control m-input @error('department') is-invalid @enderror" name="department" value="{{ $bidder->department }}">
                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror   
                            </div>
                            </div>
                            
                           
                    </div>  
                    <!--begin: Form Actions -->
					   <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
						<div class="m-form__actions m-form__actions">
							<div class="row">
								<div class="col-lg-1"></div>
								
								<div class="col-lg-6 m--align-right">
									<button type="submit" class="btn btn-primary">
										{{ __('Save') }}
									</button>
								</div>
								<div class="col-lg-1"></div>
							</div>
						</div>
                    </div>
                </div>
        </div>
    </form>







                </div>
            {{-- </div>
        </div> --}}
        
        @stop