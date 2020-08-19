@extends('layouts.app')

@section('content')
 
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				
			</div>
		</div>
		
	</div>
		
    <div class="m-portlet__body">
		@if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
								<thead>
                                    <tr>
                                        <th scope="col">id</th>
										<th scope="col">Name</th>
										<th scope="col">Type</th>
										<th scope="col">Date</th>
										<th scope="col">Subject</th>
										<th scope="col">Type</th>
										<th scope="col">Background</th>
										<th scope="col">Objective</th>
										<th scope="col">Work Required</th>
										<th scope="col">Scope Of Work</th>
										<th scope="col">Roles& Responsibilities</th>
										<th scope="col">Time Frame</th>
										<th scope="col">Deliverables</th>
										<th scope="col">Terms Conditions</th>
										<th scope="col">Service Provider</th>
                                        <th scope="col">Assignment Location</th>
                                        <th scope="col">Applying Procedure</th>
										<th scope="col">Evaluation Criteria</th>
										<th scope="col">Documents Submit</th>
                                        <th scope="col">Financial Offer</th>
                                        <th scope="col">Submission Date</th>
                                        <th scope="col">Acknowledgement</th>
                                        <th scope="col">Tenderer Signature</th>
                                        <th scope="col">Note</th>
										{{-- <th scope="col">Action</th> --}}
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach($tor as $i=>$row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
									<td>{{$row->name}}</td>
									<td>{{$row->categories->name}}</td>
									<td>{{$row->date}}</td>
									<td>{!!$row->subject!!}</td>
									<td>{{$row->type}}</td>
									<td>{!!$row->background!!}</td>
									<td>{!!$row->objective!!}</td>
									<td>{!!$row->work_required!!}</td>
									<td>{!!$row->scope_of_work!!}</td>
									<td>{!!$row->roles_responsibilities!!}</td>
									<td>{!!$row->time_frame!!}</td>
									<td>{!!$row->deliverables!!}</td>
									<td>{!!$row->terms_conditions!!}</td>
									<td>{!!$row->service_provider!!}</td>
									<td>{!!$row->assignment_location!!}</td>
									<td>{!!$row->applying_procedure!!}</td>
									<td>{!!$row->evaluation_criteria!!}</td>
									<td>{!!$row->documents_submit!!}</td>
                                    <td>{!!$row->financial_offer!!}</td>
                                    <td>{{$row->submitted_on}}</td>
                                    <td>{!!$row->acknowledgement!!}</td>
                                    <td>{{$row->tenderer_signature}}</td>
                                    <td>{!!$row->note!!}</td>
                                   
                                    {{-- <td>
										
											
											
											<form action="{{route('tor.destroy',$row->id)}}" method="POST">
												@can('tor-show')
												<a class="btn btn-primary btn-sm" href="{{route('tor.show',$row->id)}}">View</a>
												@endcan
												<br><br>
												@can('tor-edit')
												<a class="btn btn-success btn-success btn-sm"  href="{{route('tor.edit',$row->id)}}">Edit</a>
												@endcan
												<br><br>
											@csrf
											@method('DELETE')
											@can('tor-delete')
											<button type="submit" class="btn btn-danger btn-sm">Delete</button>
											@endcan
											
											
										</form>
										
									</td> --}}
                                   
                                </tr>
                            @endforeach
                            </tbody>
        </table>
    </div>
</div>
</div>



@stop
