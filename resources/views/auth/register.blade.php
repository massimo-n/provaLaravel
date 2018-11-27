@extends('layouts.app')

@section('content')
<!-- heading-banner start -->
<div class="heading-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- heading-banner end -->
<!-- my-account-area start -->
<div class="my-account-area">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-fields">
                        <h2>
                            Register</h2>
                        <p>
                            <label>
                                Name <span class="required">*</span></label>
                            <input id="name" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </p>

                        <p>
                            <label>
                                E-mail <span class="required">*</span></label>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </p>

                        <p>
                            <label>
                                Password <span class="required">*</span></label>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </p>

                        <p>
                            <label>
                                Confirm password <span class="required">*</span></label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </p>
                    </div>
                    <div class="form-action">
                        <input type="submit" value="Register" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- my-account-area end -->
@endsection
