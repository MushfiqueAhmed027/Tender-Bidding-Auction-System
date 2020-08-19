@extends('layouts.app')
@section('content')

<div class="col-12">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <hr>
            <h2> show Profile</h2>
            <hr>
        </div>
        <div class="pull-right">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a class="btn btn-primary" href="{{ route('user.index') }}">  Back</a>
        </div>
    </div>
   
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <h5>  <strong>Name:</strong>
            {{ $user->name }}</h5>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <h5>  <strong>Email:</strong>
            {{ $user->email }}</h5>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <h5> <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label></h5>
                @endforeach
            @endif
        </div>

    </div>

  
   
</div>
</div>
@stop