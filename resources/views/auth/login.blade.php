@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                        
            <section id="main">
             
                <header class="page-header">
                    <h1>
                      Log in to your account
                    </h1>
                </header>

                <section id="content" class="page-content card card-block">

                    <section class="login-form">

                        <form id="login-form" method="POST" action="{{ route('login') }}">
                             {{ csrf_field() }}
                            <section>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} row">
                                    <label class="col-md-3 form-control-label required form-group">
                                        Email
                                    </label>
                                    <div class="col-md-6">

                                        <input class="form-control has-error" name="email" value="{{ old('email') }}" type="email" value="" required="">

                                    </div>

                                    <div class="col-md-12">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} row">
                                    <label class="col-md-3 form-control-label required form-group">
                                        Password
                                    </label>
                                    <div class="col-md-6">

                                        <div class="input-group js-parent-focus">
                                            <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}" required="">
                                            <span class="input-group-btn">
                                                <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">Show</button>
                                            </span>
                                        </div>

                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="forgot-password">
                                    <a href="/password/reset" rel="nofollow">
                                        Forgot your password?
                                    </a>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </section>

                            <footer class="form-footer text-xs-center clearfix">
                                <input type="hidden" name="submitLogin" value="1">

                                <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                    Sign in
                                </button>

                            </footer>
                        </form>

                    </section>
                    <hr>

                    <div class="no-account">
                        <a href="{{ url('register') }}" data-link-action="display-register-form">
                      No account? Create one here
                    </a>
                    </div>

                </section>

            </section>

        </div>
    </div>
</div>
@endsection
