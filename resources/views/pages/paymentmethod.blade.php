@extends('layouts.app')

@section('content')
<section id="wrapper" class="mt-5">
    <div class="container">
        <div id="content-wrapper">
        	<div class="card p-3 mt-5 mh">
        		<h2 class="text-center">Payment Method</h2>
        		@if(count($data)>0)
        		<table class="table table-bordered">
        			<tr>
        				<th>SL</th>
        				<th>Name</th>
        				<th>Logo</th>
        				<th>Description</th>
        			</tr>
        			@foreach($data as $key => $var)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $var->name }}</td>
							<td>
								@if(!is_null($var->logo))
									<img src="{{ asset($var->logo) }}" alt="" width="50px">
								@else
									{{ $var->name }}
								@endif
							</td>
							<td>{{ $var->description }}</td>
						</tr>
					@endforeach
				</table>
    			@else
    				<p>Empty</p>
    			@endif
        		</table>
        	</div>
       	</div>
    </div>
</section>
@endsection