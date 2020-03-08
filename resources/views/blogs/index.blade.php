@extends('layouts.app')

@section('content')
	<section id="wrapper">
		<h2 style="display:none">.</h2>
		<div class="container">

				<br><br>

				<div class="row">

						<div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
									
    						@include('inc.side_bar_categories')

							<div id="best-sellers_block_right" class="block vertical_mode clearfix">
									<h4 class="title_block title_font">      
											<a href="https://demo.fieldthemes.com/ps_medicine/home2/en/best-sales" title="View a top sellers products">
													Top sellers
											</a>
									</h4>

									<div class="row">
											<div id="field_bestsellers" class="carousel-grid owl-carousel owl-theme" style="opacity: 1; display: block;">
													<div class="owl-wrapper-outer">
																@foreach($mostview as $new)
																		@include('inc.single_list_view_product_cart',['new'=>$new])
																		<br>
																@endforeach
													</div>
											</div>
									</div>
							</div>
						</div>

						<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">

								<div id="content" class="block">
										<div itemtype="#" itemscope="" id="sdsblogArticle" class="blog-post">
												<div class="sdsblogArticle-inner" itemprop="articleBody">
														<div id="lipsum">
																<a id="post_images" href="">
																		<img class="img-responsive" src="{{ asset($post->image) }}" alt="Proin gravida nibh velit auctor bibendum">
																</a>
														</div>
														<div class="page-item-title">
																<h1 class="title_font">{{ $post->title }}</h1>
														</div>
														<div class="info-category">
																<span itemprop="articleSection">
																	<i class="fa fa-tags"></i>
																	<a href="">{{ $post->category->name }}</a>
																</span>
																<span>
																	<i class="fa fa-comments"></i>{{ count($post->comments)  }} Comments
																</span>
																<a title="" style="display:none" itemprop="url" href="#"></a>
														</div>
														<div class="sdsarticle-des">
																{!! $post->description !!}
														</div>
												</div>
										</div>

								</div>
								
							 <ul class="comments-list">
									@foreach ($post->comments as $key => $comment_single)
									<li class="comment">
										 
										 <div class="comment-body">
										
												<div class="meta-data">
													 <div class="reply">
																<a href="#comment-form" class="comment-reply-link">
																		<i class="fa fa-reply"></i>
																</a>
													 </div>
													 <div class="comment-author">
															<a href="#">{{ $comment_single->user->name }}</a>

															<?php 
																 $timestamp = strtotime($comment_single->created_at);
																 $date = date('d M Y' ,$timestamp);
																 $time = date('h:i A' ,$timestamp);
															?>
															
													 </div>
													 <div class="comment-content">
															<p><?=  $comment_single->content; ?></p>

															<p>
																 <span class="font-weight-light text-muted"><?= $date ?></span>
																 <span class="font-weight-light text-muted"><?= $time ?></span>
															</p>
													 </div>
												</div>
										 </div>

									 @if(Auth::check())
												<form action="{{ url('post/commentreplay/'.$comment_single->id) }}" method="post">
														 {{ csrf_field() }}
														<div class="form-group mb-1">
															 <input class="form-control" type="text" name="content" value="">
														</div>

														<div class="form-group mb-1">
															 <button class="btn btn-sm btn-success" type="submit">Reply</button>
															 <button class="btn btn-sm btn-danger cancle-reply" type="reset">Cancle</button>
														</div>
												</form>
										@endif
										
										@include('inc.comment_replies',['comment_single' => $comment_single,'depth' => $key])
												
									</li>
								 @endforeach
							 </ul>

								@if(Auth::check())
										<div class="smartblogcomments" id="respond">
												<!-- <h4 id="commentTitle">Leave a Comment</h4> -->
												<h4 class="comment-reply-title" id="reply-title">
											Leave your reply 
											<small style="float:right;">
																<a style="display: none;" href="/wp/sellya/sellya/this-is-a-post-with-preview-image/#respond" id="cancel-comment-reply-link" rel="nofollow">Cancel Reply</a>
														</small>
												</h4>
												<div id="commentInput">
														<div class="row">
																<form action="{{ url('post/comment/'.$post->id) }}" method="post" id="commentform" style="width: 100%;">
																		{{ csrf_field() }}
																		<div class="required form-group col-xs-12">
																				<label>Comment:</label><sup>*</sup>
																				<textarea tabindex="4" class="inputContent form-control grey" name="content"></textarea>
																		</div>
																		<div class="submit title_font  col-xs-12">
																				<input type="submit" name="addComment" id="submitComment" class="bbutton btn btn-default button-medium" value="Submit comment">
																		</div>
																</form>
														</div>
												</div>
										</div>
								@endif
						</div>

				</div>

		</div>

</section>
@endsection