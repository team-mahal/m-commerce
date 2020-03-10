@extends('layouts.app')

@section('content')
<section id="wrapper">
    <div class="container">
        <div id="content-wrapper">
            <section id="main" class="min-height">
                <section id="content" class="page-home my-3">
                   <div class="product-tab">
                        <ul class="tab d-flex">
                            @foreach($alphabet as $al)
                                <li class="d-flex"><a class="{{ $char == $al ? 'current-tab' : '' }}" href="/generic?char={{ $al }}"> {{ $al }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="d-flex" style="flex-wrap: wrap;">
                        @forelse($brand as $b)
                            <div class="card m-3">
                                <div class="item">
                                    <a class="img-wrapper" href="{{ url('allproduct?generic='.$b->id) }}" title="brand1">
                                        <img class="img-responsive" src="{{ $b->image }}" alt="brand1" style="width: 200px;height: 100px">
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p>Empty</p>
                        @endforelse
                    </div>
                </section>
            </section>
        </div>
    </div>
</section>
@endsection