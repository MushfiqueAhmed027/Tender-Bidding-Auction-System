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
                            <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="post" action="/admin/bidder/create_step4" enctype="multipart/form-data">
                                    @csrf   
                                    <input type="hidden" value="3" id="next_step"  name="next_step">   
                                    <!--begin: Form Body -->
                                        <div class="m-portlet__body">
                                                            <!--begin: Form Wizard Step 1-->
                                                <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                                                    <div class="row">
                                                        <div class="col-xl-10 offset-xl-1">
                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="m-form__heading">
                                                                    <h3 class="m-form__heading-title">Bidder Details</h3>
                                                                </div>
                                                               

                                                            

                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Trade License*:</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <div class="form-group">
                                                                           
                                                                            <div  id="document-dropzone" class="needsclick dropzone @error('trade_license') is-invalid @enderror" name="trade_license" value="{{ old('trade_license') }}">
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        {{-- Name/Description fields, irrelevant for this article --}}
                                                                        
                                                                       
                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Memorandum of Article*:</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <div class="form-group">
                                                                          
                                                                            <div id="document-dropzone" class="needsclick dropzone @error('memorandum_of_article') is-invalid @enderror" name="memorandum_of_article" value="{{ old('memorandum_of_article') }}">
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        {{-- Name/Description fields, irrelevant for this article --}}
                                                                        
                                                                       
                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">TIN Certificate*:</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <div class="form-group">
                                                                           
                                                                            <div id="document-dropzone" class="needsclick dropzone @error('TIN_certificate') is-invalid @enderror" name="TIN_certificate" value="{{ old('TIN_certificate') }}">
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        {{-- Name/Description fields, irrelevant for this article --}}
                                                                        
                                                                       
                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">BIN Certificate*:</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <div class="form-group">
                                                                           
                                                                            <div id="document-dropzone" class="needsclick dropzone @error('BIN_certificate') is-invalid @enderror" name="BIN_certificate" value="{{ old('BIN_certificate') }}">
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        {{-- Name/Description fields, irrelevant for this article --}}
                                                                        
                                                                       
                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Bank Solvency Certificate*:</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <div class="form-group">
                                                                          
                                                                            <div id="document-dropzone" class="needsclick dropzone @error('bank_solvency_certificate') is-invalid @enderror" name="bank_solvency_certificate" value="{{ old('bank_solvency_certificate') }}">
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        {{-- Name/Description fields, irrelevant for this article --}}
                                                                        
                                                                       
                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Associates Membership Certificate*:</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <div class="form-group">
                                                                          
                                                                            <div id="document-dropzone" class="needsclick dropzone @error('associates_membership_certificate') is-invalid @enderror" name="associates_membership_certificate" value="{{ old('associates_membership_certificate') }}">
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        {{-- Name/Description fields, irrelevant for this article --}}
                                                                        
                                                                       
                                                    
                                                                    </div>
                                                                </div>
                                                              
                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Company Profile*:</label>
                                                                    <div class="col-xl-9 col-lg-9">
                                                                        <div class="form-group">
                                                                          
                                                                            <div id="document-dropzone" class="needsclick dropzone @error('company_profile') is-invalid @enderror" name="company_profile" value="{{ old('company_profile') }}">
                                                                    
                                                                            </div>
                                                                        </div>
                                                                        {{-- Name/Description fields, irrelevant for this article --}}
                                                                        
                                                                       
                                                    
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
@section('scripts')
<script>
  var uploadedDocumentMap = {}
  Dropzone.options.documentDropzone = {
    url: 'admin/bidder/create_step3',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="trade_license[]" value="' + response.name + '">')
      $('form').append('<input type="hidden" name="memorandum_of_article[]" value="' + response.name + '">')
      $('form').append('<input type="hidden" name="TIN_certificate[]" value="' + response.name + '">')
      $('form').append('<input type="hidden" name="BIN_certificate[]" value="' + response.name + '">')
      $('form').append('<input type="hidden" name="bank_solvency_certificate[]" value="' + response.name + '">')
      $('form').append('<input type="hidden" name="associates_membership_certificate[]" value="' + response.name + '">')
      $('form').append('<input type="hidden" name="company_profile[]" value="' + response.name + '">')
      uploadedDocumentMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentMap[file.name]
      }
      $('form').find('input[name="trade_license[]"][value="' + name + '"]').remove()
      $('form').find('input[name="memorandum_of_article[]"][value="' + name + '"]').remove()
      $('form').find('input[name="TIN_certificate[]"][value="' + name + '"]').remove()
      $('form').find('input[name="BIN_certificate[]"][value="' + name + '"]').remove()
      $('form').find('input[name="bank_solvency_certificate[]"][value="' + name + '"]').remove()
      $('form').find('input[name="associates_membership_certificate[]"][value="' + name + '"]').remove()
      $('form').find('input[name="company_profile[]"][value="' + name + '"]').remove()
    },
    init: function () {
      @if(isset($bidder) && $bidder->document)
        var files =
          {!! json_encode($bidder->document) !!}
        for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          file.previewElement.classList.add('dz-complete')
          //  $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
            $('form').append('<input type="hidden" name="trade_license[]" value="' + file.file_name + '">')
            $('form').append('<input type="hidden" name="memorandum_of_article[]" value="' + file.file_name + '">')
            $('form').append('<input type="hidden" name="TIN_certificate[]" value="' + file.file_name + '">')
            $('form').append('<input type="hidden" name="BIN_certificate[]" value="' + file.file_name + '">')
            $('form').append('<input type="hidden" name="bank_solvency_certificate[]" value="' + file.file_name + '">')
            $('form').append('<input type="hidden" name="associates_membership_certificate[]" value="' + file.file_name + '">')
            $('form').append('<input type="hidden" name="company_profile[]" value="' + file.file_name + '">')
        }
      @endif
    }
  }
</script>


@stop

@stop