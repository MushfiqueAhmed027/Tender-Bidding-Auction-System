@extends('layouts.app')
{{-- @section('page-title','User List') --}}

@section('content')
<div class="col-12">
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					User DataTable
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					{{-- @can('User_Create') --}}
					<a href="{{route('user.create')}}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
						{{-- @endcan --}}
						<span>
							<i class="la la-cart-plus"></i>
							<span>New User</span>
						</span>
					</a>
				</li>
			
            </ul>
        </div>
	</div>
		
    
    <div class="m-portlet__body">
		<!--begin: Datatable -->
		{{-- <table class="table table-dark" id="m_table_1"> --}}
		
				
			<table id="m_table_1"  style="background-color:#E5E7E9 " class="table table-striped- table-bordered table-hover table-checkable">
								<thead>
                                    <tr bgcolor="#AED6F1">
                                        <th  scope="col" ><h5>#</h5></th>
                                        <th scope="col" ><h5>Name</h5></th>
										<th scope="col"><h5>Email</h5></th>
										<th  scope="col"><h5>Roles</h5></th>
                                        {{-- <th scope="col">Type</th> --}}
                                        <th scope="col"><h5>Action</h5></th>
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td><strong>{{$user->name}}</strong></td>
									<td><strong>{{$user->email}}</strong></td>
									<td><strong>
										@if(!empty($user->getRoleNames()))
										  @foreach($user->getRoleNames() as $v)
										<h4>	 <label class="badge badge-success">{{ $v }}</label></strong></h4>
										  @endforeach
										@endif
									  </td>
                                    {{-- <td>{{$user->type}}</td> --}}
                                    <td>
										<form action="{{route('user.destroy',$user->id)}}" method="POST">
											{{-- @can('user_show') --}}
											{{-- @can('User_Show') --}}
											<a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>
									
											{{-- @endcan --}}
											{{-- @can('user_edit') --}}
											{{-- @if(auth()->user()->can('user_edit') && $some_other_condition) --}}
											{{-- @can('User_Edit') --}}
											<a class="btn btn-primary" href="{{route('user.edit',$user->id)}}">Edit</a>
											{{-- @endif --}}
										   {{-- @endcan --}}
											@csrf
											@method('DELETE')
											{{-- @can('user_delete') --}}
											{{-- @can('User-Create') --}}
											{{-- @if(auth()->user()->can('user_delete') && $some_other_condition) --}}
											<button type="submit" class="btn btn-danger">Delete</button>
											{{-- @endif --}}
											{{-- @endcan --}}
											{{-- <a class="btn btn-warning" href="{{action('UserController@downloadPDF', $user->id)}}">Download PDF</a> --}}
										</form>
									</td>
                                   
                                </tr>
                            @endforeach
                            </tbody>
		</table>
		
    </div>
</div>
</div>
</div>
<script>
	<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
</script>

@stop