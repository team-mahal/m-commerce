@extends('layouts.app')

@section('content')
<div class="container min-h">
	<form class="form-horizontal py-3 my-5">
		<div class="row">
			<!-- Text input-->
			<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label" for="textinput">Name</label>  
				  <input id="textinput" name="name" type="text" placeholder="Name" value="{{ Auth::user()->name }}" class="form-control input-md">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label" for="textinput">E-mail</label>  
				  <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
				</div>
			</div>
			

			<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label" for="textinput">E-mail</label>  
				  <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
				</div>
			</div>


			<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label" for="textinput">E-mail</label>  
				  <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label" for="textinput">E-mail</label>  
				  <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
				</div>
			</div>


			<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label" for="textinput">E-mail</label>  
				  <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
				</div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="singlebutton"></label>
			  <div class="col-md-4">
			    <button id="singlebutton" name="singlebutton" class="btn btn-primary">submit</button>
			  </div>
			</div>
		</div>
	</form>
</div>
@endsection