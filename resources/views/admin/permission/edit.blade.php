@extends('layouts.app')
{{-- @section('page-title','Create Permission') --}}

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
                    <h3 class="m-portlet__head-text">
                        Edit Permission
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="m-login__form m-form" method="POST" action="{{ route('permission.update',$permission->id) }}">
             @csrf
             @method('PUT')
            <div class="m-portlet__body">
               
                <div class="form-group m-form__group">
                    <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $permission->name }}" required autocomplete="name" autofocus>

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
                                <input id="permission_name" type="permission_name" class="form-control @error('permission_name') is-invalid @enderror" name="permission_name" value="{{ $permission->permission_name }}" required autocomplete="permission_name">

                                @error('permission_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                </div> --}}
           
               
                
              
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
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