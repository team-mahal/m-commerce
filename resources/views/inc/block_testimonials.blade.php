<div class="block block_testimonials">
        <div class="overlay_testimonials">
            <div class="container">
                <div class="row">
                    <div id="testimonials_block_right">
                        <div class="title">
                            <h2 class="title_font">WHAT CLIENT SAY</h2>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#slide').cycle({
                                    fx: 'scrollHorz',
                                    speed: 1000,
                                    timeout: 3000000,
                                    next: '.next',
                                    prev: '.prev'
                                });
                                $('#media_post').fancybox();
                                $('.fancybox-media')
                                    .attr('rel', 'media-gallery')
                                    .fancybox({
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        prevEffect: 'none',
                                        nextEffect: 'none',
                                        arrows: false,
                                        helpers: {
                                            media: {},
                                            buttons: {}
                                        }
                                    });
                                if ($(window).width() < 768) {
                                    $('#left_column #wrapper').css({
                                        'display': 'none'
                                    });
                                    $('#right_column #wrapper').css({
                                        'display': 'none'
                                    });
                                }
                            });
                        </script>
                        <div class="bx-controls-direction">
                            <a class="prev bx-prev" href=""></a>
                            <a class="next bx-next" href=""></a>
                        </div>
                        <div id="wrapper-testimonials" class="block_content">

                            <div id="slide-panel">
                                <div id="slide">

                                    @forelse($testimonials as $key => $testimonial)
                                    <div class="main-block">
                                        <div class="content_test_top">
                                            <p class="des_testimonial">{{ str_limit($testimonial->content, $limit = 200, $end = '...') }}</p>
                                        </div>
                                        <div class="media">
                                            <div class="content_test">
                                                <p class="des_namepost">{{ $testimonial->user->name }}</p>
                                                <p class="des_company">{{ $testimonial->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <p>Empty</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>