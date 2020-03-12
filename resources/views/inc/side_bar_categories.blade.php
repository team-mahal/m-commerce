<div id="onecate_products_block" class="block clearfix" style="margin-top: 0px;">
    <div class="container">
        <h4 class="title_block title_font">
            <span class="title_text">PRODUCT CATEGORIES</span>
        </h4>
		<div class="box_categories" id="fieldblockcategories" style="height: 200px;overflow-y: scroll;">
			<div class="row">
				<div id="field_content">
					@forelse($lastcategory as $category)
						<div class="item-inner">
							<a class="name_block" href="{{ url('category/'.$category->id) }}" title="Accessories">
								{{ $category->name }}
							 </a>
						</div>
					@empty
						<p>Empty</p>
					@endforelse
				</div>
			</div>
		</div>
	</div>
</div>              
