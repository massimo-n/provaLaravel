@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
k
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<!-- heading-banner start -->
<div class="heading-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Login</li>
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
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-fields">
                        <h2>
                            Login</h2>
                        <p>
                            <label>
                                Eemail address <span class="required">*</span></label>
                            <input type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" required autofocus/>

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
                    </div>
                    <div class="form-action">
                        <p class="lost_password">
                            <a href="{{ route('password.request') }}">Lost your password?</a></p>
                        <input type="submit" value="Login" />
                        <label>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember me
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- my-account-area end -->
@endsection
