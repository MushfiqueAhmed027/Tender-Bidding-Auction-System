@extends('layouts.app')
{{-- @section('page-title','Home Page') --}}

@section('content')
 <div class="col-12">
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Role DataTable
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
                    @can('role_create')
                    <a href="{{route('role.create')}}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                        @endcan
						<span>
							<i class="la la-cart-plus"></i>
							<span>New Role</span>
						</span>
					</a>
				</li>
			
            </ul>
        </div>
	</div>
		
    
    <div class="m-portlet__body">
		<!--begin: Datatable -->
		{{-- <table class="table table-dark" id="m_table_1"> --}}
            <table id="m_table_1"  style="background-color:#F7DC6F" class="table table-striped- table-bordered table-hover table-checkable">

								<thead>
                                    <tr bgcolor="#D4EFDF">
                                        <th scope="col"><h5>id</h5></th>
                                        <th scope="col"><h5>Name</h5></th>
                                        {{-- <th scope="col">Role_Name</th>
                                        <th scope="col">Permissions</th> --}}
                                        <th scope="col"><h5>Action</h5></th>
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $i=>$row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td><h6>{{$row->name}}</h6></td>
                                    {{-- <td>{{$row->role_name}}</td>
                                    <td> 
                                        @if($row->perms())
                                        <ul style="margin-left: 20px">
                                            @foreach($row->perms()->get() as $permission)
                   
                                            <li> {{ $permission->name }} </li>
                                            @endforeach
                                        </ul>
                                         @endif
                                           </td>
                                    <td> --}}
										<td>
                                        <form action="{{route('role.destroy',$row->id)}}" method="POST">
                                            @can('role_show')
                                            <a class="btn btn-info" href="{{ route('role.show',$row->id) }}">Show</a>
                                            @endcan
                                            @can('role_edit')
											<a class="btn btn-primary" href="{{route('role.edit',$row->id)}}">Edit</a>
										   @endcan
											@csrf
                                            @method('DELETE')
                                            @can('role_delete')
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