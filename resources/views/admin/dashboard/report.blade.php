@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-12">
    <div class="m-portlet m-portlet--mobile">

    <div class="row">
        <div class="col-md-6">
        <div class="m-portlet__body">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Tender Data Table
                    </h3>
                </div>
            </div>
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" style="background-color:#FCF3CF" id="m_table_1">
                                    <thead>
                                        <tr bgcolor="#F5EEF8">
                                            <th scope="col">#</th>
                                            <th scope="col">Tender Name</th>
                                            <th scope="col">Category Name</th>
                                          
                                            <th scope="col">Closing Date</th>
                                            {{-- <th scope="col">Action</th> --}}
                                        </tr>
                            </thead>
    
                            <tbody>
                                @foreach($tenders as $key=> $tender)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$tender->name}}</td>
                                        <td>{{$tender->category_name}}</td>
                                      
                                        <td>{{$tender->closing_date}}</td>
                                        {{-- <td>
                                            <form action="{{route('tender.destroy',$tender->id)}}" method="POST">
                                                @can('tender-edit')
                                                <a class="btn btn-primary" href="{{route('tender.edit',$tender->id)}}">Edit</a>
                                                @endcan
                                                <br><br>
                                                @can('tender-show')
                                                <a class="btn btn-success" href="{{route('tender.show',$tender->id)}}">Show</a>
                                                @endcan
                                                <br><br>
                                                @csrf
                                                @method('DELETE')
                                                @can('tender-delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                @endcan
                                            </form>
                                        </td> --}}
                                       
                                    </tr>
                                @endforeach
                           </tbody>
                          
            </table>
        </div>
        </div>
        <div class="col-md-6">
        <div class="m-portlet__body">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Tor Data Table
                    </h3>
                </div>
            </div>
          
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" style="background-color:#EAFAF1" id="m_table_1">
                                    <thead>
                                        <tr bgcolor="#F5EEF8 ">
                                            <th scope="col">id</th>
                                            <th scope="col">Name</th>
                                            {{-- <th scope="col">Type</th> --}}
                                           
                                            <th scope="col">Subject</th>
                                            {{-- <th scope="col">Type</th> --}}
                                       
                                            <th scope="col">Submission Date</th>
                                         
                                        </tr>
                            </thead>
                            <tbody>
                                @foreach($tor as $i=>$row)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$row->name}}</td>
                                        {{-- <td>{{$row->categories->name}}</td> --}}
                                      
                                        <td>{!!$row->subject!!}</td>
                                        {{-- <td>{{$row->type}}</td> --}}
                                        
                                        <td>{{$row->submitted_on}}</td>
                                      
                                        
                                       
                                    </tr>
                                @endforeach
                                </tbody>
            </table>
        </div>
    

    </div>
    </div>
    </div>
</div>
</div>
    <!--End::Section-->

    @stop