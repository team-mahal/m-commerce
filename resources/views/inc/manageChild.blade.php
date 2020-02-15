<div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar52">
    <i class="fa fa-plus-square  add"></i>
    <i class="fa fa-minus-square remove"></i>
</div>
<ul class="category-sub-menu">

    @foreach($childs as $child)

        <li>

            {{ $child->name }}

            @if(count($child->childs))

                @include('inc.manageChild',['childs' => $child->childs])

            @endif

        </li>

    @endforeach

</ul>