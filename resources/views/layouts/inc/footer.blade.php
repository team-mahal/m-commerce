  <div class="footer-container">
    <div class="footer-top-before">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 links contact_ft">
                    <h3>CONTACT US</h3>
                    <div class="title" data-target="#footer_sub_menu_col_1" data-toggle="collapse">
                        <div class="navbar-toggler collapse-icons hidden-md-up">
                            <div class="fa fa-plus add"></div>
                            <div class="fa fa-minus remove"></div>
                        </div>
                    </div>
                    <ul id="footer_sub_menu_col_1" class="collapse">
                        <li>
                            <?php $address=\App\Models\Setting::find(3) ?>
                            @if($address)
                                <div class="fa fa-map-marker"></div>
                               {!! $address->value !!}
                            @endif
                        </li>
                        <li>
                            <?php $address=\App\Models\Setting::find(2) ?>
                            @if($address)
                               <div class="fa fa-phone"></div>
                                <a href="">{!! $address->value !!}</a>
                            @endif
                        </li>
                        <li>
                            <?php $address=\App\Models\Setting::find(1) ?>
                            @if($address)
                                <div class="fa fa-envelope"></div>
                                {!! $address->value !!}
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 links bullet">
                    <h3>Pages</h3>
                    <div class="title" data-target="#footer_sub_menu_col_2" data-toggle="collapse">
                        <div class="navbar-toggler collapse-icons hidden-md-up">
                            <div class="fa fa-plus add"></div>
                            <div class="fa fa-minus remove"></div>
                        </div>
                    </div>
                    <ul id="footer_sub_menu_col_2" class="collapse">
                        <li><a href="{{ url('termofuse') }}" title="">Term of Use</a></li>
                        <li><a href="{{ url('paymentmethod') }}" title="">Payment Methods</a></li>
                        <li><a href="{{ url('shopingguide') }}" title="">Shipping Guide</a></li>
                        <li><a href="{{ url('locationsweship') }}" title="">Locations We Ship To</a></li>
                        <li><a href="{{ url('estimateddeliverytime') }}" title="">Estimated Delivery Time</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 links product">
                    <div class="payment">
                        <h3>Category</h3>
                        <ul id="footer_sub_menu_col_4" class="collapse">
                            @forelse($footercategories as $key => $value)
                                <li><a href="{{ url('category/'.$value->id) }}">{{ $value->name }}</a></li>
                            @empty
                                <li>Empty</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 links about_ft">
                    <div class="opening">
                        <h3>Category</h3>
                        <div class="title" data-target="#footer_sub_menu_col_4" data-toggle="collapse">
                            <div class="navbar-toggler collapse-icons hidden-md-up">
                                <div class="fa fa-plus add"></div>
                                <div class="fa fa-minus remove"></div>
                            </div>
                        </div>
                        <ul id="footer_sub_menu_col_4" class="collapse">
                            @forelse($footercategoriesright as $key => $value)
                                <li><a href="{{ url('category/'.$value->id) }}">{{ $value->name }}</a></li>
                            @empty
                                <li>Empty</li>
                            @endforelse
                        </ul>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="footer-address fieldFullWidth" style="left: 50%; position: relative; width: 1903px; margin-left: -951.5px;">
                    <div class="container">
                        <p> Design & Developed By <a href="https://www.techics.com" target="_blank">Tech ICS</a>.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>