<div id="header_mobile_menu" class="navbar-inactive visible-sm visible-xs">
    <div class="container">
        <div class="row">
            <div class="fieldmm-nav col-sm-12 col-xs-12">
                <span class="brand">Categories</span>
                <span id="fieldmm-button"><i class="fa fa-reorder"></i></span>
                <nav id="fieldmegamenu-mobile" class="fieldmegamenu inactive">
                    <ul>
                        <li class="root root-4 ">
                            @forelse($categories as $category)
                                <div class="root-item no-description">
                                    <a href="{{ url('category/'.$category->id) }}">
                                        <div class="title title_font">
                                            <span class="title-text">{{ $category->name }}</span><span class="icon-has-sub fa fa-angle-down"></span>
                                        </div>
                                    </a>
                                </div>
                                @forelse($category->children as $children)
                                    <span class="fieldmegamenu-mobile-handle fa small fa-plus"></span>
                                    <ul class="menu-items col-md-4 col-xs-12" style="display: none;">
                                        <li class="menu-item menu-item-156 depth-1 category menucol-1-2  ">

                                            <div class="title title_font">
                                                <a href="{{ url('category/'.$children->id) }}">
                                                    {{ $children->name }}
                                                </a>
                                            </div>
                                        @forelse($children->children as $child)
                                            <ul class="submenu submenu-depth-2">
                                                <li class="menu-item menu-item-157 depth-2 category   ">
                                                    <div class="title">
                                                        <a href="{{ url('category/'.$child->id) }}"> 
                                                            {{ $child->name }}
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                         @empty
                                            -
                                         @endforelse
                                        </li>
                                    </ul>
                                @empty
                                -
                                @endforelse
                            @empty
                            -
                            @endforelse
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>