@extends('layouts.app')
{{-- @section('page-title','Create Permission') --}}

@section('content')
    <!--begin::Portlet-->
    <div class="col-md-12">
    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                        Create Permission
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="m-login__form m-form" method="POST" action="{{ route('permission.store') }}">
             @csrf
            <div class="m-portlet__body">
                
                <div class="form-group m-form__group">
                    <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                {{-- <div class="form-group m-form__group">
                    <label for="permission_name" class="col-md-4 col-form-label text-md-left">{{ __('permission Name') }}</label>

                            <div class="col-md-8">
                                <input id="permission_name" type="permission_name" class="form-control @error('permission_name') is-invalid @enderror" name="permission_name" value="{{ old('permission_name') }}" required autocomplete="permission_name">

                                @error('permission_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div> --}}
                {{-- <div class="form-group m-form__group">
                    <label for="role" class="col-md-4 col-form-label text-md-left">{{ __('Role') }}</label>
               
                    <div class="form-group m-form__group">
					
						<select multiple="role" name="role" class="form-control m-input" id="role" type="multiple">
							<option value="">Please Select</option>
                                        @foreach(\App\Role::all() as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
						</select>
					</div>
                         @error('role')
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
    </div>
    <!--end::Portlet-->
    @stop