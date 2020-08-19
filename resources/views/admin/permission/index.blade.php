@extends('layouts.app')
{{-- @section('page-title','Permission Page') --}}

@section('content')
 <div class="col-12">
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Permissions DataTable
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					@can('permission_create')
					<a href="{{route('permission.create')}}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
						@endcan
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Permission</span>
						</span>
					</a>
				</li>
		
            </ul>
        </div>
	</div>
		
    
    <div class="m-portlet__body">
		<!--begin: Datatable -->
		{{-- <table class="table table-dark" id="m_table_1"> --}}
			<table id="m_table_1"  style="background-color:#ABEBC6" class="table table-striped- table-bordered table-hover table-checkable">

								<thead>
                                    <tr bgcolor="#D4EFDF">
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        {{-- <th scope="col">Role_Name</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $i=>$row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$row->name}}</td>
                                    {{-- <td>{{$row->role_name}}</td> --}}
                                    {{-- <td> 
                                      
                                      
									
                                       
                                            @foreach($row-> as $role)
                   
                                             {{ $role->name }} 
                                            @endforeach
                                  
                                      
                                        
                                           </td> --}}
                                    <td>
										<form action="{{route('permission.destroy',$row->id)}}" method="POST">
											@can('permission_edit')
											<a class="btn btn-primary" href="{{route('permission.edit',$row->id)}}">Edit</a>
										   @endcan
											@csrf
											@method('DELETE')
											@can('permission_delete')
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
</div>



@stop
