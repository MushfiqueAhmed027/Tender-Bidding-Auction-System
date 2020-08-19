@extends('layouts.app')

@section('content')
 <div class="col-md-12">
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3>Recent Tender</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
			

            </ul>
        </div>
	</div>
		
    
    <div class="m-portlet__body">
      
		@if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" style="background-color:#FCF3CF" id="m_table_1">
								<thead>
                 <tr bgcolor="#F5EEF8">
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
										<th scope="col">Subject</th>
										<th scope="col">Type</th>
                    <th scope="col">Submission Date</th>
										<th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach($tor as $i=>$row)
                      <tr>
                         <th scope="row">{{$loop->iteration}}</th>
                             <td>{{$row->name}}</td>
                             <td><a  href="{{route('tor.show',$row->id)}}">{!!$row->subject!!}</td>
                             <td>{{$row->type}}</td>
                             <td>{{$row->submitted_on}}</td>               
                             <td>
                              {{-- @can('tor-apply') --}}
                                  <a class="btn btn-primary btn-sm" href="{{route('bsf.create',$row->id,$row->name)}}">Apply</a>
                                  {{-- @endcan --}}
                            
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
