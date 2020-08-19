@extends('layouts.app')

@section('content')
  <!-- BEGIN: Subheader -->

<!-- END: Subheader -->	
{{-- 
<div class="m-content">
    <div class="row"> --}}
        <div class="col-xl-12">
         <!--Begin::Main Portlet-->
		   <div class="m-portlet">
               <!--begin: Portlet Head-->
                <div class="m-portlet__head" >
                 <h3><p> {!!$tor->subject!!}</h3>  </p> 
                   
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
                       
                       
                        <!--end: Form Wizard Head -->

                            <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                                <div class="row">
                                    <div class="col-xl-10 offset-xl-1">
                                        <div class="m-form__section m-form__section--first">
                                            
                                            <table class="table">
                                               
                                                <tr>
                                                    <td>Name:</td>
                                                    <td><strong>{{$tor->name}}</strong></td>
                                                </tr>
                                                {{-- <tr>
                                                    <td>Category:</td>
                                                    <td><strong>{{$row->categories->name}}</strong></td>
                                                </tr> --}}
                                                <tr>
                                                    <td>Date:</td>
                                                    <td><strong>{{$tor->date}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Subject:</td>
                                                    <td><strong>{!!$tor->subject!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Type:</td>
                                                    <td><strong>{{$tor->type}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Background:</td>
                                                    <td><strong>{!!$tor->background!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Objective:</td>
                                                    <td><strong>{!!$tor->objective!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Work Required:</td>
                                                    <td><strong>{!!$tor->work_required!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Scope Of Work:</td>
                                                    <td><strong>{!!$tor->scope_of_work!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Roles& Responsibilities:</td>
                                                    <td><strong>{!!$tor->roles_responsibilities!!}</strong></td>
                                                </tr>
                                        
                                                <tr>
                                                    <td>Time Frame:</td>
                                                    <td><strong>{!!$tor->time_frame!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Deliverables:</td>
                                                    <td><strong>{!!$tor->deliverables!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Terms Conditions:</td>
                                                    <td><strong>{!!$tor->terms_conditions!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Service Provider:</td>
                                                    <td><strong>{!!$tor->service_provider!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Assignment Location:</td>
                                                    <td><strong>{!!$tor->assignment_location!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Applying Procedure:</td>
                                                    <td><strong>{!!$tor->applying_procedure!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Evaluation Criteria:</td>
                                                    <td><strong>{!!$tor->evaluation_criteria!!}</strong></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Documents Submit:</td>
                                                    <td><strong>{!!$tor->documents_submit!!}</strong></td>
                                                </tr>
   
                                                <tr>
                                                    <td>Financial Offer:</td>
                                                    <td><strong>{!!$tor->financial_offer!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Submission Date:</td>
                                                    <td><strong>{{$tor->submitted_on}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Acknowledgement:</td>
                                                    <td><strong>{!!$tor->acknowledgement!!}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Tenderer Signature:</td>
                                                    <td><strong>{{$tor->tenderer_signature}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Note:</td>
                                                    <td><strong>{!!$tor->note!!}</strong></td>
                                                </tr>
                                             
                                            </table>
                                            <div>
                                                
                                            </div>
                                     
                                       
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