@extends('layouts.app')

@section('content')
<section id="wrapper" class="mt-5">
    <div class="container">
        <div id="content-wrapper">
          <div class="card p-3 mt-5 mh">
            <h2 class="text-center">Estimated Delivery Time</h2>
            @if(isset($data))
            	{!! $data->content !!}
            @endif
          </div>
        </div>
    </div>
</section>
@endsection