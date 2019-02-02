@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lead Form</div>

                <div class="card-body">

                    @if(session('success'))
                    <div class="alert alert-success">
                        <strong>{{session('success')}}<strong>
                                </div>
                                @endif

                                <form method="POST" action="{{ url('lead/create') }}" autocomplete="off">
                                    @csrf

                                    <div class="form-group row">

                                        <label for="firstname" class="col-md-2 col-form-label ">{{ __('FirstName:') }}</label>

                                        <div class="">
                                            <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" autofocus required>

                                            @if ($errors->has('firstname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <label for="lastname" class="col-md-2 col-form-label ">{{ __('LastName:') }}</label>

                                        <div class="">
                                            <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" autofocus>

                                            @if ($errors->has('lastname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('PhoneNumber') }}</label>

                                        <div class="col-md-6">
                                            <input id="phonenumber" type="text" class="form-control{{ $errors->has('phonenumber') ? ' is-invalid' : '' }}" name="phonenumber"  value="{{ old('phonenumber') }}" required>

                                            @if ($errors->has('phonenumber'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phonenumber') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" >{{ old('address') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="squarefeet" class="col-md-4 col-form-label text-md-right">{{ __('Home Sqft') }}</label>

                                        <div class="col-md-6">
                                            <input id="squarefeet" type="text" class="form-control{{ $errors->has('squarefeet') ? ' is-invalid' : '' }}" name="squarefeet" value="{{ old('squarefeet') }}">

                                            @if ($errors->has('squarefeet'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('squarefeet') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                 </div>
             </div>
        </div>
    </div>
@endsection
