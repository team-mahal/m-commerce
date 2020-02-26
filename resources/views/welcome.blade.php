@extends('layouts.app')

@section('content')
    @include('layouts.inc.slider');
    
    <br><br>
    <section id="wrapper">
        <div class="container">
            <div id="content-wrapper">

                <section id="main">
                    <section id="content" class="page-home">
                        <div class="row">
                            <div class="col-xs-12 col-md-9">
                                <div id="fieldtabproductsisotope" class="horizontal_mode">
                                    <ul class="fieldtabproductsisotope-filters">
                                        <li class="fieldtabproductsisotope-filter title_font">
                                            <a href="#" data-filter="new-arrivals" class="active">
                                            <span class="text">New Arrivals</span> </a>
                                        </li>
                                        <li class="fieldtabproductsisotope-filter title_font">
                                            <a href="#" data-filter="hot-products" class="">
                                            <span class="text">HOT PRODUCTS</span> </a>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="fieldtabproductsisotope-products">
                                            <ul class="isotope-grid">
                                                @foreach($newarrivels as $new)
                                                    <li class="col-xs-12 col-sm-6 col-md-3 isotope-item item new-arrivals">
                                                         @include('inc.singleproduct',['new'=>$new])
                                                    </li>
                                                    <li class="isotope-item item grid-sizer"></li>
                                                @endforeach
                                                @foreach($hotproduct as $new)
                                                    <li class="col-xs-12 col-sm-6 col-md-3 isotope-item item hot-products">
                                                        @include('inc.singleproduct',['new'=>$new])
                                                    </li>
                                                    <li class="isotope-item item grid-sizer"></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                 
                                </div>

                                @include('inc.mostviewproduct')

                            </div>

                        @include('inc.model')
                        
                        @include('inc.sidebar')

                        </div>
                        
                        @include('inc.blogpost')

                    </section>
                </section>
            </div>
        </div>
    </section>

@endsection