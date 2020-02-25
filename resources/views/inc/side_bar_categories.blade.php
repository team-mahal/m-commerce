<div id="fieldblockcategories" class="block horizontal_mode clearfix">
	<div class="container">
		<div class="text2-border">
				<h2 class="title_font">
						<a class="title_text">
						Product Categories
						</a>
				</h2>
		</div>
		<div class="box_categories">
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
