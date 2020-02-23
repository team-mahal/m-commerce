@extends('layouts.app')

@section('content')
<section id="wrapper" class="mt-5">
    <div class="container">
        <div id="content-wrapper">
        	<div class="card p-3 mt-5">
        		<h2 class="text-center">Term Of Use</h2>
        		{!! $termofuse->content !!}
        	</div>
       	</div>
    </div>
</section>
@endsection