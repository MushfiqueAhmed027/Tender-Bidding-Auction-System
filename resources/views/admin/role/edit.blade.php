@extends('layouts.app')
{{-- @section('page-title','Create Role') --}}

@section('content')
    <!--begin::Portlet-->
    <div class="col-12">
    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                    </span>
                    <h3>Role Edit</h3>
                    {{-- <h3 class="m-portlet__head-text">
                        Square & Solid Input Style
                    </h3> --}}
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
        <!--begin::Form-->
        <form class="m-login__form m-form" method="POST" action="{{ route('role.update',$role->id) }}">
             @csrf
             @method('PUT')
            <div class="m-portlet__body">
                <div class="form-group m-form__group m--margin-top-10">
                    {{-- <div class="alert m-alert m-alert--default" role="alert">
                        The example form below demonstrates common HTML form elements solid background style:
                    </div> --}}
                </div>
                <div class="form-group m-form__group">
                    <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $role->name}}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br/>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="form-group m-form__group">
                    <label for="role_name" class="col-md-4 col-form-label text-md-left">{{ __('Role Name') }}</label>

                            <div class="col-md-8">
                                <input id="role_name" type="role_name" class="form-control @error('role_name') is-invalid @enderror" name="role_name" value="{{ $role->role_name }}" required autocomplete="role_name">

                                @error('role_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div> --}}
                {{-- <div class="form-group m-form__group">
                    <label for="permission" class="col-md-4 col-form-label text-md-left">{{ __('Permission') }}</label>
               
                    <div class="form-group m-form__group">
						<label for="exampleSelect2">Permission</label>
						<select multiple="permission" name="permission" class="form-control m-input" id="permission" type="multiple">
							<option value="">Please Select</option>
                                        @foreach(\App\Permission::all() as $permission)
                                        <option value="{{$permission->id}}">{{$permission->name}}</option>
                                            @endforeach
						</select>
					</div>
                        @error('permission')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div> --}}
               
                
              
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </form>
        <!--end::Form-->			
    </div>
    <!--end::Portlet-->
    </div>
    @stop