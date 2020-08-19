@extends('layouts.app')
{{-- @section('page-title','User List') --}}

@section('content')
<div class="col-12">
<div class="m-portlet m-portlet--mobile">
	
		
    
    <div class="m-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-dark" id="m_table_1">
								<thead>
                                    <tr>
                                       
                                        <th scope="col">Name</th>
										<th scope="col">Email</th>
										<th  scope="col">Roles</th>
                                        {{-- <th scope="col">Type</th> --}}
                                        {{-- <th scope="col">Action</th> --}}
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                                <tr>
                                   
                                    <td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>
										@if(!empty($user->getRoleNames()))
										  @foreach($user->getRoleNames() as $v)
										<h4>	 <label class="badge badge-success">{{ $v }}</label></h4>
										  @endforeach
										@endif
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