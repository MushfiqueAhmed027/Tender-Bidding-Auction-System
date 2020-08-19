@extends('layouts.app')
{{-- @section('page-title','Edit User') --}}

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
                    <h3>Edit User</h3>
                    {{-- <h3 class="m-portlet__head-text">
                        Square & Solid Input Style
                    </h3> --}}
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="m-login__form m-form" method="POST" action="{{ route('user.update',$user->id) }}">
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
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="form-group m-form__group">
                    <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    <span class="m-form__help">We'll never share your email with anyone else.</span>
                </div>
                {{-- <div class="form-group m-form__group">
                    <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
                {{-- <div class="form-group m-form__group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                    </div>
                </div>
                {{-- <div class="form-group m-form__group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Select Type') }}</label>
                        <div class="col-md-8">
                            <select class="form-control" name="type">
                                <option value="">Please Select One</option>
                                <option value="Tender">Tenderer</option>
                                <option value="Bidder">Bidder</option>
                               
                            </select>
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