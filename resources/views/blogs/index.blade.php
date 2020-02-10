@extends('layouts.app')

@section('content')
	<section id="wrapper">
    <h2 style="display:none">.</h2>
    <div class="container">

        <nav class="breadcrumb">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="https://demo.fieldthemes.com/ps_medicine/home2/en/">
                        <span itemprop="name">Home</span>
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="https://demo.fieldthemes.com/ps_medicine/home2/en/smartblog.html">
                        <span itemprop="name">All Blog News</span>
                    </a>
                </li>

                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="https://demo.fieldthemes.com/ps_medicine/home2/en/smartblog/5_Proin-gravida-nibh-velit-auctor-bibendum-auct.html">
                        <span itemprop="name">Proin gravida nibh velit auctor bibendum</span>
                    </a>
                </li>
            </ol>
        </nav>

        <div class="row">

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">

                <div class="block-categories hidden-sm-down">
                    <ul class="category-top-menu">
                        <li><a class="text-uppercase h6" href="https://demo.fieldthemes.com/ps_medicine/home2/en/2-product-categories">Product Categories</a></li>
                        <li>
                            <ul class="category-sub-menu">
                                <li data-depth="0"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/52-shop">shop</a>
                                    <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar52"><i class="fa fa-plus-square  add"></i><i class="fa fa-minus-square  remove"></i></div>
                                    <div class="collapse" id="exCollapsingNavbar52">
                                        <ul class="category-sub-menu">
                                            <li data-depth="1"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/53-tops">Tops</a><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar53"><i class="fa fa-plus-square   arrow-right"></i><i class="fa fa-minus-square  arrow-down"></i></span>
                                                <div class="collapse" id="exCollapsingNavbar53">
                                                    <ul class="category-sub-menu">
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/59-t-shirts">T-shirts</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/60-blouses">Blouses</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li data-depth="1"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/54-dresses">Dresses</a><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar54"><i class="fa fa-plus-square   arrow-right"></i><i class="fa fa-minus-square  arrow-down"></i></span>
                                                <div class="collapse" id="exCollapsingNavbar54">
                                                    <ul class="category-sub-menu">
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/61-casual-dresses">Casual Dresses</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/62-evening-dresses">Evening Dresses</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/63-summer-dresses">Summer Dresses</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li data-depth="0"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/12-pharmacy">Pharmacy</a>
                                    <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar12"><i class="fa fa-plus-square  add"></i><i class="fa fa-minus-square  remove"></i></div>
                                    <div class="collapse" id="exCollapsingNavbar12">
                                        <ul class="category-sub-menu">
                                            <li data-depth="1"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/86-custom">CUSTOM</a><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar86"><i class="fa fa-plus-square   arrow-right"></i><i class="fa fa-minus-square  arrow-down"></i></span>
                                                <div class="collapse" id="exCollapsingNavbar86">
                                                    <ul class="category-sub-menu">
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/88-platinum-bands">Platinum Bands</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/89-gold-bands">Gold Bands</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/90-silver-bands">Silver Bands</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li data-depth="1"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/87-bags">BAGS</a><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar87"><i class="fa fa-plus-square   arrow-right"></i><i class="fa fa-minus-square  arrow-down"></i></span>
                                                <div class="collapse" id="exCollapsingNavbar87">
                                                    <ul class="category-sub-menu">
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/91-platinum-bands">Platinum Bands</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/92-gold-bands">Gold Bands</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/93-sliver-bands">Sliver Bands</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li data-depth="0"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/13-features">Features</a>
                                    <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar13"><i class="fa fa-plus-square  add"></i><i class="fa fa-minus-square  remove"></i></div>
                                    <div class="collapse" id="exCollapsingNavbar13">
                                        <ul class="category-sub-menu">
                                            <li data-depth="1"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/76-dresses">Dresses</a><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar76"><i class="fa fa-plus-square   arrow-right"></i><i class="fa fa-minus-square  arrow-down"></i></span>
                                                <div class="collapse" id="exCollapsingNavbar76">
                                                    <ul class="category-sub-menu">
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/78-accessories">Accessories</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/79-hats-and-gloves">Hats and Gloves</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/80-lifestyle">Lifestyle</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/81-bras">Bras</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li data-depth="1"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/77-brand">Brand</a><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar77"><i class="fa fa-plus-square   arrow-right"></i><i class="fa fa-minus-square  arrow-down"></i></span>
                                                <div class="collapse" id="exCollapsingNavbar77">
                                                    <ul class="category-sub-menu">
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/82-evening">Evening</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/83-long-sleeved">Long Sleeved</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/84-shrot-sleeved">Shrot Sleeved</a></li>
                                                        <li data-depth="2"><a class="category-sub-link" href="https://demo.fieldthemes.com/ps_medicine/home2/en/85-tanks-and-camis">Tanks and Camis</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li data-depth="0"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/94-hot-deals">Hot Deals</a></li>
                                <li data-depth="0"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/95-toprating">Toprating</a></li>
                                <li data-depth="0"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/96-most-view">Most View</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- MODULE News Products Products -->
                <div id="best-sellers_block_right" class="block vertical_mode clearfix">
                    <h4 class="title_block title_font">      
        <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/best-sales" title="View a top sellers products">
            Top sellers
        </a>
    </h4>

                    <div class="row">
                        <div id="field_bestsellers" class="carousel-grid owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <!--Number Row-->

                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 540px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 270px;">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="product-miniature js-product-miniature" data-id-product="21" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="left-product">
                                                        <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/21-nam-mollis-porta-facilisis.html" class="thumbnail product-thumbnail">
                                                            <span class="cover_image">
                            <img src="https://demo.fieldthemes.com/ps_medicine/home2/85-small_default/nam-mollis-porta-facilisis.jpg" data-full-size-image-url="https://demo.fieldthemes.com/ps_medicine/home2/85-large_default/nam-mollis-porta-facilisis.jpg">
                        </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-product">
                                                        <div class="product-description">
                                                            <div class="product_name"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/21-nam-mollis-porta-facilisis.html">Nam mollis porta facilisis.</a></div>
                                                            <div class="product-price-and-shipping">

                                                                <span class="regular-price">$58.56</span>

                                                                <span class="price">$55.45</span>

                                                            </div>
                                                        </div>
                                                        <div class="quick-view-product">
                                                            <a href="javascript:void(0)" class="quick-view" data-link-action="quickview">
                                                                <i class="fa fa-eye"></i> Quick view
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="item-inner">
                                                <div class="product-miniature js-product-miniature" data-id-product="18" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="left-product">
                                                        <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/18-aliquam-tincidunt-mauris.html" class="thumbnail product-thumbnail">
                                                            <span class="cover_image">
                            <img src="https://demo.fieldthemes.com/ps_medicine/home2/82-small_default/aliquam-tincidunt-mauris.jpg" data-full-size-image-url="https://demo.fieldthemes.com/ps_medicine/home2/82-large_default/aliquam-tincidunt-mauris.jpg">
                        </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-product">
                                                        <div class="product-description">
                                                            <div class="product_name"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/18-aliquam-tincidunt-mauris.html">Aliquam tincidunt mauris.</a></div>
                                                            <div class="product-price-and-shipping">

                                                                <span class="price">$30.39</span>

                                                            </div>
                                                        </div>
                                                        <div class="quick-view-product">
                                                            <a href="javascript:void(0)" class="quick-view" data-link-action="quickview">
                                                                <i class="fa fa-eye"></i> Quick view
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="item-inner">
                                                <div class="product-miniature js-product-miniature" data-id-product="17" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="left-product">
                                                        <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/17-quisque-at-orci-gravid-.html" class="thumbnail product-thumbnail">
                                                            <span class="cover_image">
                            <img src="https://demo.fieldthemes.com/ps_medicine/home2/81-small_default/quisque-at-orci-gravid-.jpg" data-full-size-image-url="https://demo.fieldthemes.com/ps_medicine/home2/81-large_default/quisque-at-orci-gravid-.jpg">
                        </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-product">
                                                        <div class="product-description">
                                                            <div class="product_name"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/17-quisque-at-orci-gravid-.html">Quisque at orci gravid,</a></div>
                                                            <div class="product-price-and-shipping">

                                                                <span class="price">$25.39</span>

                                                            </div>
                                                        </div>
                                                        <div class="quick-view-product">
                                                            <a href="javascript:void(0)" class="quick-view" data-link-action="quickview">
                                                                <i class="fa fa-eye"></i> Quick view
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-controls clickable" style="display: none;">
                                <div class="owl-buttons">
                                    <div class="owl-prev">
                                        <div class="carousel-previous disable-select"><span class="fa fa-angle-left"></span></div>
                                    </div>
                                    <div class="owl-next">
                                        <div class="carousel-next disable-select"><span class="fa fa-angle-right"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    var fieldbestsellers_items = 1;

                    var fieldbestsellers_mediumitems = 1;
                    var fieldbestsellers_autoscroll = false;
                    var fieldbestsellers_pauseonhover = false;
                    var fieldbestsellers_pagination = false;
                    var fieldbestsellers_navigation = true;

                    $(document).ready(function() {
                        $('#field_bestsellers').owlCarousel({
                            itemsCustom: [
                                [0, 1],
                                [320, 1],
                                [479, 1],
                                [768, fieldbestsellers_mediumitems],
                                [992, fieldbestsellers_items],
                                [1200, fieldbestsellers_items]
                            ],
                            responsiveRefreshRate: 50,
                            slideSpeed: 200,
                            paginationSpeed: 500,
                            rewindSpeed: 600,
                            autoPlay: fieldbestsellers_autoscroll,
                            stopOnHover: fieldbestsellers_pauseonhover,
                            rewindNav: true,
                            pagination: fieldbestsellers_pagination,
                            navigation: fieldbestsellers_navigation,
                            navigationText: ['<div class="carousel-previous disable-select"><span class="fa fa-angle-left"></span></div>', '<div class="carousel-next disable-select"><span class="fa fa-angle-right"></span></div>']
                        });
                        if ($(window).width() < 992) {
                            $('#left_column #field_bestsellers').css({
                                'display': 'none'
                            });
                            $('#right_column #field_bestsellers').css({
                                'display': 'none'
                            });
                        }
                    });
                </script>
                <!-- /MODULE News Products -->
                <div class="banner_leftcolum">
                    <p>
                        <a href="#"><img src="/ps_medicine/home2/modules/fieldstaticblocks/images/banner_rightcolum.jpg" alt="" height="300" width="270"></a>
                    </p>
                </div>

            </div>

            <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">

                <div id="content" class="block">
                    <div itemtype="#" itemscope="" id="sdsblogArticle" class="blog-post">
                        <div class="sdsblogArticle-inner" itemprop="articleBody">
                            <div id="lipsum">

                                <a id="post_images" href="https://demo.fieldthemes.com/ps_medicine/home2/modules//smartblog/images/5-single-default.jpg"><img class="img-responsive" src="https://demo.fieldthemes.com/ps_medicine/home2/modules/smartblog/images/5-single-default.jpg" alt="Proin gravida nibh velit auctor bibendum"></a>
                            </div>
                            <div class="page-item-title">
                                <h1 class="title_font">Proin gravida nibh velit auctor bibendum</h1>
                            </div>
                            <div class="info-category">
                                <span itemprop="articleSection">
        	<i class="fa fa-tags"></i>
        	<a href="https://demo.fieldthemes.com/ps_medicine/home2/en/smartblog/category/1_uncategories.html">Uncategories</a>
        </span>
                                <span>
        	<i class="fa fa-comments"></i>0 Comments
        </span>

                                <a title="" style="display:none" itemprop="url" href="#"></a>
                            </div>
                            <div class="sdsarticle-des">
                                <p>Quisque at orci gravida, dictum turpis vitae, sagittis dui. Integer cursus auctor ex id accumsan. Nam mollis porta facilisis. Fusce porttitor augue lectus ...</p>
                                <p>Quisque at orci gravida, dictum turpis vitae, sagittis dui. Integer cursus auctor ex id accumsan. Nam mollis porta facilisis. Fusce porttitor augue lectus ...</p>
                            </div>
                        </div>
                    </div>

                </div>
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
                            <form action="" method="post" id="commentform">
                                <div class="required form-group col-xs-12 col-sm-12 col-md-6">
                                    <label>Name:</label><sup>*</sup>
                                    <input type="text" tabindex="1" class="inputName form-control grey" value="" name="name">
                                </div>
                                <div class="required form-group col-xs-12 col-sm-12 col-md-6">
                                    <label>E-mail:</label><sup>*</sup><span class="note"><sup>*</sup>Not Published</span>
                                    <input type="text" tabindex="2" class="inputMail form-control grey" value="" name="mail">
                                </div>
                                <div class="required form-group col-xs-12">
                                    <label>Website:</label><span class="note"><sup>*</sup>Site url with&nbsp;http://</span>
                                    <input type="text" tabindex="3" value="" name="website" class="form-control grey">
                                </div>
                                <div class="required form-group col-xs-12">
                                    <label>Comment:</label><sup>*</sup>
                                    <textarea tabindex="4" class="inputContent form-control grey" rows="8" cols="50" name="comment"></textarea>
                                </div>

                                <div class="captcha-type required form-group col-xs-12">
                                    <label>Type Code</label>
                                    <img src="https://demo.fieldthemes.com/ps_medicine/home2/modules/smartblog/classes/CaptchaSecurityImages.php?width=100&amp;height=40&amp;characters=5">
                                    <input type="text" tabindex="" value="" name="smartblogcaptcha" class="smartblogcaptcha form-control grey">
                                </div>
                                <input type="hidden" name="comment_post_ID" value="1478" id="comment_post_ID">
                                <input type="hidden" name="id_post" value="5" id="id_post">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                <div class="submit title_font  col-xs-12">
                                    <input type="submit" name="addComment" id="submitComment" class="bbutton btn btn-default button-medium" value="Submit comment">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    $('#submitComment').bind('click', function(event) {
                        event.preventDefault();

                        var data = {
                            'action': 'postcomment',
                            'id_post': $('input[name=\'id_post\']').val(),
                            'comment_parent': $('input[name=\'comment_parent\']').val(),
                            'name': $('input[name=\'name\']').val(),
                            'website': $('input[name=\'website\']').val(),
                            'smartblogcaptcha': $('input[name=\'smartblogcaptcha\']').val(),
                            'comment': $('textarea[name=\'comment\']').val(),
                            'mail': $('input[name=\'mail\']').val()
                        };
                        $.ajax({
                            url: baseUri + 'modules/smartblog/ajax.php',
                            data: data,

                            dataType: 'json',

                            beforeSend: function() {
                                $('.success, .warning, .error').remove();
                                $('#submitComment').attr('disabled', true);
                                $('#commentInput').before('<div class="attention"><img src="http://321cart.com/sellya/catalog/view/theme/default/image/loading.gif" alt="" />Please wait!</div>');

                            },
                            complete: function() {
                                $('#submitComment').attr('disabled', false);
                                $('.attention').remove();
                            },
                            success: function(json) {
                                if (json['error']) {

                                    $('#commentInput').before('<div class="warning">' + '<i class="icon-warning-sign icon-lg"></i>' + json['error']['common'] + '</div>');

                                    if (json['error']['name']) {
                                        $('.inputName').after('<span class="error">' + json['error']['name'] + '</span>');
                                    }
                                    if (json['error']['mail']) {
                                        $('.inputMail').after('<span class="error">' + json['error']['mail'] + '</span>');
                                    }
                                    if (json['error']['comment']) {
                                        $('.inputContent').after('<span class="error">' + json['error']['comment'] + '</span>');
                                    }
                                    if (json['error']['captcha']) {
                                        $('.smartblogcaptcha').after('<span class="error">' + json['error']['captcha'] + '</span>');
                                    }
                                }

                                if (json['success']) {
                                    $('input[name=\'name\']').val('');
                                    $('input[name=\'mail\']').val('');
                                    $('input[name=\'website\']').val('');
                                    $('textarea[name=\'comment\']').val('');
                                    $('input[name=\'smartblogcaptcha\']').val('');

                                    $('#commentInput').before('<div class="success">' + json['success'] + '</div>');
                                    setTimeout(function() {
                                        $('.success').fadeOut(300).delay(450).remove();
                                    }, 2500);

                                }
                            }
                        });
                    });

                    var addComment = {
                        moveForm: function(commId, parentId, respondId, postId) {

                            var t = this,
                                div, comm = t.I(commId),
                                respond = t.I(respondId),
                                cancel = t.I('cancel-comment-reply-link'),
                                parent = t.I('comment_parent'),
                                post = t.I('comment_post_ID');

                            if (!comm || !respond || !cancel || !parent)
                                return;

                            t.respondId = respondId;
                            postId = postId || false;

                            if (!t.I('wp-temp-form-div')) {
                                div = document.createElement('div');
                                div.id = 'wp-temp-form-div';
                                div.style.display = 'none';
                                respond.parentNode.insertBefore(div, respond);
                            }

                            comm.parentNode.insertBefore(respond, comm.nextSibling);
                            if (post && postId)
                                post.value = postId;
                            parent.value = parentId;
                            cancel.style.display = '';

                            cancel.onclick = function() {
                                var t = addComment,
                                    temp = t.I('wp-temp-form-div'),
                                    respond = t.I(t.respondId);

                                if (!temp || !respond)
                                    return;

                                t.I('comment_parent').value = '0';
                                temp.parentNode.insertBefore(respond, temp);
                                temp.parentNode.removeChild(temp);
                                this.style.display = 'none';
                                this.onclick = null;
                                return false;
                            };

                            try {
                                t.I('comment').focus();
                            } catch (e) {}

                            return false;
                        },

                        I: function(e) {
                            return document.getElementById(e);
                        }
                    };
                </script>
                <style>

                </style>

            </div>

        </div>

    </div>

</section>
@endsection