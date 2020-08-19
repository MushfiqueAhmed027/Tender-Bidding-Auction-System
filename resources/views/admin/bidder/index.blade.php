@extends('layouts.app')
@section('content')
 
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Bidder DataTable
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					@can('bidder_delete')
					<a href={{"bidder/create_step1"}} class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
						@endcan
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Bidder</span>
						</span>
					</a>
				</li>
			
            </ul>
        </div>
	</div>
		
    
    <div class="m-portlet__body">
		@if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" style="background-color:#FCF3CF " id="m_table_1">
								<thead>
                                    <tr bgcolor="#F5EEF8">
                                        <th scope="col">id</th>
										<th scope="col">Name</th>
										<th scope="col">Type</th>
										<th scope="col">Legal Status</th>
										<th scope="col">Registration no</th>
										<th scope="col">Establishment Year</th>
										<th scope="col">Tax Identification Number</th>
										<th scope="col">Trade License Number</th>
										<th scope="col">Business Identification Number</th>
										<th scope="col">Phone No</th>
										<th scope="col">Description</th>
										<th scope="col">Head Office</th>
										<th scope="col">Zip Code</th>
										<th scope="col">Company Website</th>
										<th scope="col">Title</th>
										<th scope="col">Name</th>
										<th scope="col">Gender</th>
										<th scope="col">National Id</th>
										<th scope="col">Department</th>
                                        {{-- <th scope="col">Trade License</th>
                                        <th scope="col">Memorandum of Article</th>
                                        <th scope="col">TIN Certificate</th>
                                        <th scope="col">BIN Certificate</th>
										<th scope="col">Bank Solvency Certificate</th>
										<th scope="col">Associates Membership Certificate</th>
										<th scope="col">Company Profile</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach($bidder as $i=>$row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
									<td>{{$row->company_name}}</td>
									<td>{{$row->categories->name}}</td>
									<td>{{$row->legal_status}}</td>
									<td>{{$row->registration_no}}</td>
									<td>{{$row->establishment_year}}</td>
									<td>{{$row->TIN}}</td>
									<td>{{$row->license_no}}</td>
									<td>{{$row->BIN}}</td>
									<td>{{$row->phone_no}}</td>
									<td>{!!$row->description!!}</td>
									<td>{{$row->Head_office_address}}</td>
									<td>{{$row->Zip_code}}</td>
									<td>{{$row->company_website}}</td>
									<td>{{$row->title}}</td>
									<td>{{$row->name}}</td>
									<td>{{$row->gender}}</td>
									<td>{{$row->national_id}}</td>
									<td>{{$row->department}}</td>
                                    {{-- <td>{{$row->trade_license}}</td>
                                    <td>{{$row->memorandum_of_article}}</td>
                                    <td>{{$row->TIN_certificate}}</td>
									<td>{{$row->BIN_certificate}}</td>
									<td>{{$row->bank_solvency_certificate}}</td>
									<td>{{$row->associates_membership_certificate}}</td>
                                    <td>{{$row->company_profile}}</td> --}}
                                   
                                    <td>
										<form action="{{route('bidder.destroy',$row->id)}}" method="POST">
											{{-- <a class="btn btn-primary btn-sm" href="{{route('tor.show',$row->id)}}">View</a> --}}
											@can('bidder_edit')
											<a class="btn btn-success btn-success"  href="{{route('bidder.edit',$row->id)}}">Edit</a>
											@endcan
											<br><br>
											@can('bidder_show')
											<a class="btn btn-primary btn-info" href="{{route('bidder.show',$row->id)}}">Show</a>
											@endcan
											<br><br>
										@csrf
										@method('DELETE')
										@can('bidder_delete')
										<button type="submit" class="btn btn-danger">Delete</button>
										@endcan
										
									</form>
									</td>
                                   
                                </tr>
                            @endforeach
                            </tbody>
        </table>
    </div>
</div>
</div>



@stop
