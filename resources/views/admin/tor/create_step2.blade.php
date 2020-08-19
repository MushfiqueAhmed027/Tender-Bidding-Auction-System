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
                        <h3>Create Tor</h3>
                        </div>
                    </div>
                   
                </div>
                <!--end: Portlet Head-->
               <!--begin: Form Wizard-->
			  <div class="m-wizard m-wizard--5 m-wizard--success" id="m_wizard">
                
                    <!--begin: Form Wizard Head -->
                        <div class="m-wizard__head m-portlet__padding-x">	
                            		 
                                    <!--begin: Form Wizard Nav -->
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
                                                                        Terms of Reference
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
                                                                       Other Documents
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
                                                                        Financial Offer
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
                                                                        Other Conditions 
                                                                    </span>
                                                                    <span class="m-wizard__step-icon"><i class="la la-check"></i></span>
                                                                </a>										
                                                            </div>
                                                        </div>
            
                                                        <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
                                                            <div class="m-wizard__step-info">
                                                                <a href="#" class="m-wizard__step-number">
                                                                    <span class="m-wizard__step-seq">5.</span>
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
                                    <!--end: Form Wizard Nav -->						 
                               					
                        
						<!--end: Form Wizard Head -->
						 <!--begin: Form Wizard Form-->
						<div class="m-wizard__form">
							<!--
								1) Use m-form--label-align-left class to alight the form input lables to the right
								2) Use m-form--state class to highlight input control borders on form validation
							-->
							<form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="post" action="/admin/tor/create_step2" enctype="multipart/form-data">
								@csrf   
								<input type="hidden" value="3" id="next_step"  name="next_step">
					
                                    <div class="m-form__section m-form__section--first">
                                        <div class="m-form__heading">
                                            <h3 class="m-form__heading-title">Other Documents must be submitted</h3>
                                        </div>
                                      
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Documents Submit*</label>
                                            @inject('templates', 'App\Template')
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                   
                                                    <textarea class="form-control" id="documents_submit" name="documents_submit">"{{$templates->first('documents_submit')}}"</textarea> 
                                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                    <script>
                                                        CKEDITOR.replace( 'documents_submit' );
                                                    </script> 
                                                </div>
                                            
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
</div> --}}
    
    
@stop