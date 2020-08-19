@extends('layouts.app')
@section('content')
  <!-- BEGIN: Subheader -->

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
                                Create Bidder Profile
                              
                            </h3>
                        </div>
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
                   
                        <!--begin: Form Body -->
                    <div class="m-portlet__body">
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
                                                           Bidder Information 
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
                                            
                                            <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">							
                                                        <span class="m-wizard__step-seq">3.</span>
                                                        <span class="m-wizard__step-label">
                                                            Legal Documents
                                                        </span>
                                                        <span class="m-wizard__step-icon"><i class="la la-check"></i></span> 
                                                    </a>									
                                                </div>
                                            </div>
                                            
                                            <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
                                                <div class="m-wizard__step-info">
                                                    <a href="#" class="m-wizard__step-number">
                                                        <span class="m-wizard__step-seq">4.</span>
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

                            <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                                <div class="row">
                                    <div class="col-xl-10 offset-xl-1">
                                        <div class="m-form__section m-form__section--first">
                                            <form action="/admin/bidder/create_step4" method="post" >
                                                @csrf   
                                            <table class="table">
                                               
                                                <tr>
                                                    <td>Company Name:</td>
                                                    <td><strong>{{$bidder->company_name}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Legal Status:</td>
                                                    <td><strong>{{$bidder->legal_status}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Registration No:</td>
                                                    <td><strong>{{$bidder->registration_no}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Establishment Year:</td>
                                                    <td><strong>{{$bidder->establishment_year}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Tax Identification Number:</td>
                                                    <td><strong>{{$bidder->TIN}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Trade License Number:</td>
                                                    <td><strong>{{$bidder->license_no}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Business Identification Number:</td>
                                                    <td><strong>{{$bidder->BIN}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone No:</td>
                                                    <td><strong>{{$bidder->phone_no}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Description:</td>
                                                    <td><strong>{!!$bidder->description!!}</strong></td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>Head Office Address:</td>
                                                    <td><strong>{{$bidder->Head_office_address}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Zip Code:</td>
                                                    <td><strong>{{$bidder->Zip_code}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Company Website:</td>
                                                    <td><strong>{{$bidder->company_website}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Title:</td>
                                                    <td><strong>{{$bidder->title}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td><strong>{{$bidder->name}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender:</td>
                                                    <td><strong>{{$bidder->gender}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>National Id:</td>
                                                    <td><strong>{{$bidder->national_id}}</strong></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Department:</td>
                                                    <td><strong>{{$bidder->department}}</strong></td>
                                                </tr>
{{--    
                                                <tr>
                                                    <td>Trade License:</td>
                                                    <td><strong>{{$bidder->trade_license}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Memorandum of Article:</td>
                                                    <td><strong>{{$bidder->memorandum_of_article}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>TIN Certificate:</td>
                                                    <td><strong>{{$bidder->TIN_certificate}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>BIN Certificate:</td>
                                                    <td><strong>{{$bidder->BIN_certificate}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Solvency Certificate:</td>
                                                    <td><strong>{{$bidder->bank_solvency_certificate}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Associates Membership Certificate:</td>
                                                    <td><strong>{{$bidder->associates_membership_certificate}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Company Profile:</td>
                                                    <td><strong>{{$bidder->company_profile}}</strong></td>
                                                </tr> --}}
                                             
                                            </table>
                                            <div>
                                                
                                            </div>
                                            <a type="button" href="/admin/company/create_step1" class="btn btn-warning">Back to Step 1</a>
                                            <a type="button" href="/admin/company/create_step2" class="btn btn-warning">Back to Step 2</a>
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
              </div>
           </div>
        </div>
    {{-- </div>
</div> --}}
                    

@stop