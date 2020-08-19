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
                  	<!--begin: Message container -->
                    {{-- <div class="m-portlet__padding-x">
                        <!-- Here you can put a message or alert -->
                    </div> --}}
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
                        <!--end: Form Wizard Head -->
                                    <!--begin: Form Wizard Form-->
                            <div class="m-wizard__form">
                                <!--
                                    1) Use m-form--label-align-left class to alight the form input lables to the right
                                    2) Use m-form--state class to highlight input control borders on form validation
                                -->
                                <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="post" action="/admin/tor/create_step1" >
                                    @csrf   
                                    <input type="hidden" value="2" id="next_step"  name="next_step">   
                                    <!--begin: Form Body -->
                                        <div class="m-portlet__body">
                                                            <!--begin: Form Wizard Step 1-->
                                                <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                                                    <div class="row">
                                                        <div class="col-xl-10 offset-xl-1">
                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="m-form__heading">
                                                                    <h3 class="m-form__heading-title">Other Documents must be submitted</h3>
                                                                </div>
                                                                                                        <div class="form-group m-form__group row">
                                                                                                            <label class="col-xl-3 col-lg-3 col-form-label"><strong>Name*:</strong></label>
                                                                                                            <div class="col-xl-9 col-lg-9">
                                                                                                                @inject('templates', 'App\Template')
                                                                                                                {{-- @foreach($templates as $template) --}}
                                                                                                                <input id="name" type="text" class="form-control m-input @error('name') is-invalid @enderror" name="name" value="{{$templates->first('name')}}" required autocomplete="name" autofocus >
                                                                                                                <span class="m-form__help">Please enter your company names</span>
                                                                                                                {{-- @endforeach --}}
                                                                                                                @error('name')
                                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                                    <strong>{{ $message }}</strong>
                                                                                                                </span>
                                                                                                            @enderror
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group m-form__group row">
                                                                                                            <label class="col-xl-3 col-lg-3 col-form-label">Category:</label>
                                                                                                            <div class="col-xl-9 col-lg-9">
                                                                                                                <div class="col-xl-9 col-lg-9">
                                                                                                                    <select name="categories_id" id="categories_id" class="form-control m-input">
                                                                                                                        <option value="">Select</option>
                                                                                                                        @foreach($category as $categories)
                                                                                                                        
                                                                                                                    <option value="{{$categories->id}}">{{$categories->name}}
                                                                                                                            </option>
                                                                                                                              
                                                                                                                               @endforeach
                                                                                                                    </select>
                                                                                                               
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group m-form__group row">
                                                                                                            <label class="col-xl-3 col-lg-3 col-form-label">Date*:</label>
                                                                                                            <div class="col-xl-9 col-lg-9">
                                                                                                                <input id="date" type="date" class="form-control m-input @error('date') is-invalid @enderror"  name="date" value="{{ old('date') }}" required autocomplete="date" autofocus >
                                                                                                                @error('date')
                                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                                    <strong>{{ $message }}</strong>
                                                                                                                </span>
                                                                                                            @enderror
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group m-form__group row">
                                                                                                            <label class="col-form-label col-lg-3 col-sm-12">Subject*</label>
                                                                                                        
                                                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                                    <textarea class="form-control" id="subject" name="subject">"{{$templates->first('subject')}}"</textarea> 
                                                                                                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                                                    <script>
                                                                                                                        CKEDITOR.replace( 'subject' );
                                                                                                                    </script> 
                                                                                                                </div>
                                                                                                            
                                                                                                        </div>
                                                                                                        <div class="form-group m-form__group row">
                                                                                                            <label class="col-xl-3 col-lg-3 col-form-label">Tor Type*:</label>
                                                                                                            <div class="col-xl-9 col-lg-9">
                                                                                                                <div class="col-xl-9 col-lg-9">
                                                                                                                    <select name="type" class="form-control m-input">
                                                                                                                        <option value="">Select</option>
                                                                                                                        <option value="Open_Tender">Open Tender</option>
                                                                                                                        <option value="Selective_Tender">Selective Tender</option>
                                                                                                                        <option value="Negotiated_Tender">Negotiated Tender</option>
                                                                                                                        <option value="Single_stage_&_two_stage_Tender">Single-stage & two-stage Tender</option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    
                                                                                                    
                                                                                                        <div class="form-group m-form__group row">
                                                                                                            <label class="col-form-label col-lg-3 col-sm-12">Background*</label>
                                                                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                                <textarea class="form-control" id="background" name="background">"{!!$templates->first('background')!!}"</textarea> 
                                                                                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                                                <script>
                                                                                                                    CKEDITOR.replace( 'background' );
                                                                                                                </script> 
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    
                                                                                                    </div>
                                                                                    
                                                                                                      
                                                                                                    
                                                                                            
                                                                                                    <div class="form-group m-form__group row">
                                                                                                        <label class="col-form-label col-lg-3 col-sm-12">Objective*</label>
                                                                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                            <textarea class="form-control" id="objective" name="objective">"{!!$templates->first('objective')!!}"</textarea> 
                                                                                                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                                            <script>
                                                                                                                CKEDITOR.replace( 'objective' );
                                                                                                            </script> 
                                                                                                        </div>
                                                                                                    </div>
                                                                                                
                                                                                               
                                                                                                <div class="form-group m-form__group row">
                                                                                                    <label class="col-form-label col-lg-3 col-sm-12">Work Required*</label>
                                                                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                        <textarea class="form-control" id="work_required" name="work_required">"{!!$templates->first('work_required')!!}"</textarea> 
                                                                                                        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                                        <script>
                                                                                                            CKEDITOR.replace( 'work_required' );
                                                                                                        </script> 
                                                                                                    </div>
                                                                                                </div>
                                                                                            
                                                                                            
                                                                                            <div class="form-group m-form__group row">
                                                                                                <label class="col-form-label col-lg-3 col-sm-12">Scope Of Work*</label>
                                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                    <textarea class="form-control" id="scope_of_work" name="scope_of_work">"{!!$templates->first('work_required')!!}"</textarea> 
                                                                                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                                    <script>
                                                                                                        CKEDITOR.replace( 'scope_of_work' );
                                                                                                    </script> 
                                                                                                </div>
                                                                                            </div>
                                                                                        
                                                                
                                                                                            <div class="form-group m-form__group row">
                                                                                                <label class="col-form-label col-lg-3 col-sm-12">Roles and Responsibilities*</label>
                                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                    <textarea class="form-control" id="roles_responsibilities" name="roles_responsibilities">"{!!$templates->first('roles_responsibilities')!!}"</textarea> 
                                                                                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                                    <script>
                                                                                                        CKEDITOR.replace( 'roles_responsibilities' );
                                                                                                    </script> 
                                                                                                </div>
                                                                                            </div>
                                                                                        
                                                                                        
                                                                                        <div class="form-group m-form__group row">
                                                                                            <label class="col-form-label col-lg-3 col-sm-12">Time Frame*</label>
                                                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                <textarea class="form-control" id="time_frame" name="time_frame">"{!!$templates->first('time_frame')!!}"</textarea> 
                                                                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                                <script>
                                                                                                    CKEDITOR.replace( 'time_frame' );
                                                                                                </script> 
                                                                                            </div>
                                                                                        </div>
                                                                                    
                                                                                    
                                                                                    <div class="form-group m-form__group row">
                                                                                        <label class="col-form-label col-lg-3 col-sm-12">Deliverables*</label>
                                                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                            <textarea class="form-control" id="deliverables" name="deliverables">>"{!!$templates->first('deliverables')!!}"</textarea> 
                                                                                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                            <script>
                                                                                                CKEDITOR.replace( 'deliverables' );
                                                                                            </script> 
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                               
                                                                                <div class="form-group m-form__group row">
                                                                                    <label class="col-form-label col-lg-3 col-sm-12">Terms and Conditions*</label>
                                                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                        <textarea class="form-control" id="terms_conditions" name="terms_conditions">"{!!$templates->first('terms_conditions')!!}"</textarea> 
                                                                                        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                        <script>
                                                                                            CKEDITOR.replace( 'terms_conditions' );
                                                                                        </script> 
                                                                                    </div>
                                                                                </div>
                                                                            
                                                                            
                                                                            <div class="form-group m-form__group row">
                                                                                <label class="col-form-label col-lg-3 col-sm-12">Specification of the Service Provider*</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <textarea class="form-control" id="service_provider" name="service_provider">"{!!$templates->first('service_provider')!!}"</textarea> 
                                                                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                    <script>
                                                                                        CKEDITOR.replace( 'service_provider' );
                                                                                    </script> 
                                                                                </div>
                                                                            </div>
                                                                        
                                                                       
                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-form-label col-lg-3 col-sm-12">Assignment Location*</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                <textarea class="form-control" id="assignment_location" name="assignment_location">"{!!$templates->first('assignment_location')!!}"</textarea> 
                                                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                <script>
                                                                                    CKEDITOR.replace( 'assignment_location' );
                                                                                </script> 
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-form-label col-lg-3 col-sm-12">Guidelines for Applying Procedure*</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                <textarea class="form-control" id="applying_procedure" name="applying_procedure">"{!!$templates->first('applying_procedure')!!}"</textarea> 
                                                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                <script>
                                                                                    CKEDITOR.replace( 'applying_procedure' );
                                                                                </script> 
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group m-form__group row">
                                                                            <label class="col-form-label col-lg-3 col-sm-12">Evaluation Criteria*</label>
                                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                <textarea class="form-control" id="evaluation_criteria" name="evaluation_criteria">"{!!$templates->first('evaluation_criteria')!!}"</textarea> 
                                                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                                <script>
                                                                                    CKEDITOR.replace( 'evaluation_criteria' );
                                                                                </script> 
                                                                            </div>
                                                                        </div>
                                                                    
                                                                    </div>
                                                           

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <!--end: Form Wizard Step 1-->        
                                          
                                        </div>
                                         <!--end: Form Body -->
                                                    <!--begin: Form Actions -->
                                        <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                                            <div class="m-form__actions m-form__actions">
                                                <div class="row">
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-4 m--align-left">
                                                        <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
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
                                        <!--end: Form Actions -->
                                    
                                     
                                </form>
                            </div>
                            <!--end: Form Wizard Form-->
                     </div>
		   </div>
           <!--End::Main Portlet-->
        </div>
    {{-- </div>
</div> --}}


@stop