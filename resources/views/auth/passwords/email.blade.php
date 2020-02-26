@extends('layouts.app')

@section('content')
<div class="container">
   <section id="main">
        <br><br>
       
        <section id="content" class="page-content card card-block">
            <section class="register-form">
                <div class="panel panel-default" style="min-height: 250px">
                    <div class="panel-heading"><h3>Reset Password</h3></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}
                        <br>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="">E-Mail Address</label>
                                <div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>  
                            <br>
                            <div class="form-group">
                                <div class="" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </section>
        </section>
    </section>
</div>
@endsection
