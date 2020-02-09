@extends('layouts.app')

@section('content')
<div class="container">
    <section id="main">
        <header class="page-header">
            <h1>
              Create an account
            </h1>
        </header>
        <section id="content" class="page-content card card-block">
            <section class="register-form">
                <p>Already have an account? <a href="{{ url('login') }}">Log in instead!</a></p>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} row">
                                <label class="col-md-3 form-control-label required form-group">
                                    name
                                </label>
                                <div class="col-md-6">

                                    <input class="form-control has-error" name="name" value="{{ old('name') }}" type="text" value="" required="">

                                </div>

                                <div class="col-md-12">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


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
                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="">
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

                            <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }} row">
                                <label class="col-md-3 form-control-label required form-group">
                                    Confirm Password
                                </label>
                                <div class="col-md-6">

                                    <div class="input-group js-parent-focus">
                                        <input class="form-control js-child-focus js-visible-password" name="password_confirmation" type="password">
                                        <span class="input-group-btn">
                                            <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">Show</button>
                                        </span>
                                    </div>

                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </section>
        </section>
    </section>
</div>
@endsection
