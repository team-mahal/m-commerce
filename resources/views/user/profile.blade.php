@extends('layouts.app')

@section('content')
<div class="container min-h">
	<br><br>
	<br><br>
	<div class="card p-3">
		<div class="text-center">
			<img src="{{ asset('uploads/profile/'.Auth::user()->profile) }}" alt="sdf" style="width: 100px;border-radius: 50%;border: 2px solid #86BD3D;">
		</div>
		<form class="form-horizontal py-3 my-5" action="{{ url('updateprofile/'.Auth::user()->id) }}" method="post" enctype="multipart/form-data">
	                {{ csrf_field() }}
			<div class="row">
				<!-- Text input-->
				<div class="col-md-12">
					<div class="form-group">
					  <label class="control-label" for="textinput">Name</label>  
					  <input id="textinput" name="name" type="text" placeholder="Name" value="{{ Auth::user()->name }}" class="form-control input-md">
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
					  <label class="control-label" for="textinput">E-mail</label>  
					  <input id="textinput" name="email" type="text" placeholder="Email" value="{{ Auth::user()->email }}" class="form-control input-md">
					</div>
				</div>
				

				<div class="col-md-12">
					<div class="form-group">
					  <label class="control-label" for="textinput">Birth day</label>  
					  <input id="textinput" name="birthday" type="date" value="{{ Auth::user()->birthday }}" placeholder="Email" class="form-control input-md">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group" style="margin-top: 20px;">
						 <label class="radio-inline">
					      <input type="radio" name="optradio" checked> Male
					    </label>
					    <label class="radio-inline">
					      <input type="radio" name="optradio"> Female
					    </label>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
					  <label class="control-label" for="textinput">Profile</label>  
					  <input id="textinput" name="profile" type="file" class="form-control input-md">
					</div>
				</div>

				<!-- Button -->
				<div class="col-md-12 text-center">
					<button id="singlebutton" name="singlebutton" class="btn btn-primary">submit</button>
				</div>
			</div>
		</form>
	</div>

	<br><br>
	<div class="card" style="padding-bottom: 42px;">
		<div class="panel panel-default">
	        <div class="panel-heading py-3 text-center">Change password</div>

	        <div class="panel-body">
	            @if (session('error'))
	                <div class="alert alert-danger">
	                    {{ session('error') }}
	                </div>
	            @endif
	            @if (session('success'))
	                <div class="alert alert-success">
	                    {{ session('success') }}
	                </div>
	            @endif
	            <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
	                {{ csrf_field() }}

	                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
	                    <label for="new-password" class="col-md-4 control-label">Current Password</label>

	                    <div class="col-md-6">
	                        <input id="current-password" type="password" class="form-control" name="current-password" required>

	                        @if ($errors->has('current-password'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('current-password') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>
					<br><br><br>
	                <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
	                    <label for="new-password" class="col-md-4 control-label">New Password</label>

	                    <div class="col-md-6">
	                        <input id="new-password" type="password" class="form-control" name="new-password" required>

	                        @if ($errors->has('new-password'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('new-password') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>
					<br>
	                <div class="form-group py-3">
	                    <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

	                    <div class="col-md-6">
	                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
	                    </div>
	                </div>
					<br>
	                <div class="form-group">
	                    <div class="col-md-6 col-md-offset-4">
	                        <button type="submit" class="btn btn-primary">
	                            Change Password
	                        </button>
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
</div>
<br><br>
@endsection