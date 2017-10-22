@extends('auth.default')

@section('content')


    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" method="POST" action="{{ route('login') }}"  novalidate="novalidate">
        {{ csrf_field() }}
        <h3 class="form-title font-green" >Sign In</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">



           <input id="name" type="text" class="form-control placeholder-no-fix" name="name" placeholder="Username" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif

        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


            <input id="password"  type="password" class="form-control form-control-solid placeholder-no-fix" autocomplete="off" placeholder="Password" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif

        </div>
        <div class="form-actions" style="text-align: center !important;">
            <button type="submit" class="btn green uppercase">
                Login
            </button>


        </div>
        <div class="create-account">
            <p>
                <a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" method="POST" action="{{ route('register') }}" novalidate="novalidate">
        <h3 class="font-green">Sign Up</h3>
        <p class="hint"> Enter your personal details below: </p>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <input id="name" type="text" class="form-control placeholder-no-fix" name="name" placeholder="Username" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif

        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input  type="password" class="form-control placeholder-no-fix" autocomplete="off" id="register_password" placeholder="Password" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control placeholder-no-fix" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required>
        </div>
         <div class="form-group margin-top-20 margin-bottom-20">

            <div id="register_tnc_error"> </div>
        </div>
        <div class="form-actions">
            <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>
            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->

@endsection
