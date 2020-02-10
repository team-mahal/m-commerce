<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="smart-blog-home-post block horizontal_mode">
            <h2 class="title_block title_font"><a class="title_text" href="{{ url('blogs') }}">NEW BLOGS</a></h2>

            <div class="row">
                <div id="smart-blog-custom" class="sdsblog-box-content grid carousel-grid owl-carousel">
                    @foreach($posts as $post)
                        <div class="item sds_blog_post">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                        <a href="{{ url('post/'.$post->id) }}">
                                            <img alt="Proin gravida nibh velit auctor bibendum" class="feat_img_small" src="{{ asset($post->image)  }}">
                                        </a>
                                        <p class="block_post_date">
                                            <span class="date_added">{{ $post->created_at->format('d') }} {{ $post->created_at->format('M') }}</span>
                                            <span class="block_post_date_line"></span>
                                        </p>
                                    </div>
                                    <div class="border_content">
                                        <div class="right_blog_home">
                                            <div class="content">
                                                <h3 class="sds_post_title"><a href="{{ url('post/'.$post->id) }}">{{ $post->title }}</a></h3>
                                                <p>
                                                    {!! str_limit($post->description, $limit = 100, $end = '...') !!}
                                                </p>
                                            </div>
                                            <a href="{{ url('blogs') }}" class="r_more">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>