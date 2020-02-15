<div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar52">
    <i class="fa fa-plus-square  add"></i>
    <i class="fa fa-minus-square remove"></i>
</div>
<div class="collapse" id="exCollapsingNavbar52">
    <ul class="category-sub-menu">
        @foreach($childrens as $category)
            <li data-depth="{{ $key+1 }}">
                <a class="category-sub-link" href="">{{ $category->name }}</a>
                <span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar53">
                    <i class="fa fa-plus-square arrow-right"></i>
                    <i class="fa fa-minus-square arrow-down"></i>
                </span>
                @if(isset($category->children))
                    @include('inc.categories',['key'=>$key++,'childrens'=>$category->children])
                @endif
            </li>
        @endforeach
    </ul>
</div>