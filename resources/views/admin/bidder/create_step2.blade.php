@extends('layouts.app')
{{-- @section('page-title','bidder Profile') --}}

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
                            <h4 >Personal Details</h4>
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
                    {{-- <div class="m-portlet__body"> --}}
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
						 <!--begin: Form Wizard Form-->
						<div class="m-wizard__form">
							<!--
								1) Use m-form--label-align-left class to alight the form input lables to the right
								2) Use m-form--state class to highlight input control borders on form validation
							-->
							<form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="post" action="/admin/bidder/create_step2" enctype="multipart/form-data">
								@csrf   
								<input type="hidden" value="3" id="next_step"  name="next_step">
                                <div class="m-portlet__body">
                                    <div class="m-form__section m-form__section--first">
                                        {{-- <div class="m-form__heading">
                                            <h4 >Personal Details</h4>
                                        </div> --}}
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
                                            <label class="col-xl-3 col-lg-3 col-form-label">Name*:</label>
                                            <div class="col-xl-9 col-lg-9">
                                                <input id="name" type="text"  class="form-control m-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
												<label class="col-xl-4 col-lg-4 col-form-label">Gender*:</label>
												
                                            
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
                                                <label class="col-xl-3 col-lg-3 col-form-label">National Id*:</label>
                                                <div class="col-xl-9 col-lg-9">
                                                <input type="text" id="national_id" class="form-control m-input @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id" autofocus>
												@error('national_id')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
										       @enderror
											</div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Department*:</label>
                                                <div class="col-xl-9 col-lg-9">
                                                <input type="text" id="department" class="form-control m-input @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}">
												@error('department')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
										       @enderror   
											</div>
											</div>
											
                                    </div> 
                                    </div>  
                                </div>
                        
                     </div>

                       <!--begin: Form Actions -->
					   <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
						<div class="m-form__actions m-form__actions">
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-4 m--align-left">
									<a href="create_step1" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
										<span>
											<i class="la la-arrow-left"></i>&nbsp;&nbsp;
											<span>Back</span>
										</span>
									</a>
								</div>
								<div class="col-lg-6 m--align-right">
									<button type="submit" class="btn btn-primary">
										{{ __('Save & Continue') }}
									</button>
								</div>
								<div class="col-lg-1"></div>
							</div>
						</div>
					</div>
                    </div>
					</div>
                    
					<!--end: Form Actions -->
				
    </div>
                    </div>
                </form>
              </div>
           </div>
        </div>
    {{-- </div>
</div>
     --}}
    
@stop