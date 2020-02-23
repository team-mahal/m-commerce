@extends('layouts.app')

@section('content')
<div class="container min-h">
	<br><br>
	<br><br>
	<div class="card p-3">
		<form class="form-horizontal py-3 my-5" action="{{ url('testimonial') }}" method="post">
			{{ csrf_field() }}
			<div class="row">
				@if(count($testimonials)>0)
				<table class="table table-bordered">
					<tr>
						<th>SL</th>
						<th>Message</th>
						<th>Action</th>
					</tr>
					@foreach($testimonials as $key => $testimonial)
						<tr>
							<td>{{  $key+1 }}</td>
							<td>{{ $testimonial->content }}</td>
							<td><a href="{{ url('testimonial/'.$testimonial->id) }}" class="btn btn-sm btn-danger">Delete</a></td>
						</tr>
					@endforeach
				</table>
				@else
					<p class="p-3">Empty</p>
				@endif
				<div class="col-md-12">
					<div class="form-group">
					  <label class="control-label" for="textinput">Text</label>  
					  <textarea style="background: #f1f1f1;height: 200px;" name="content" class="form-control" id="" cols="30" rows="30"></textarea>
					</div>
				</div>

				<!-- Button -->
				<div class="col-md-12 text-center">
					<button id="singlebutton" name="singlebutton" class="btn btn-primary">submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
<br><br>
@endsection