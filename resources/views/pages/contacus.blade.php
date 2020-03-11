@extends('layouts.app')

@section('content')
<style>
#wrapper input[type=text], select, textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
}

#wrapper input[type=submit]:hover {
	background-color: #45a049;
}

</style>
<section id="wrapper" class="mt-5">
		<div class="container">
			<div id="content-wrapper">
				<div class="card p-3 mt-5 mh">
					<h2 class="text-center">Contact Us</h2>
					<div class="container">
						<form action="{{ url('contacus') }}" method="post">
							{{ csrf_field() }}
							<label for="fname">First Name</label>
							<input type="text" id="fname" name="name" placeholder="Your name.." required>

							<label for="email">Email</label>
							<input type="text" id="email" name="email" placeholder="Your Email.." required >

							<label for="message">Message</label>
							<textarea id="message" required name="message" placeholder="Write something.." style="height:200px"></textarea>
							
							@if(env('GOOGLE_RECAPTCHA_KEY'))
							     <div class="g-recaptcha"
							          data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
							     </div>
							@endif

							<input type="submit" value="Submit" class="btn btn-primary">
						</form>
					</div>
				</div>
			</div>
		</div>
</section>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection