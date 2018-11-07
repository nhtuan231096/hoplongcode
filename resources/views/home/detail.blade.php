@extends('layouts.home')
@section('content')
            <!-- .top-bar-v1 -->
            
            <!-- .header-v1 -->
            <!-- ============================================================= Header End ============================================================= -->
            <div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="home-v1.html">Home</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><a href="product-category.html">{{$product->category->title}}</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{$product->title}}
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="product product-type-simple">
                                    <div class="single-product-wrapper">
                                        <div class="product-images-wrapper thumb-count-4">
                                            <span class="onsale">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol"></span>{{$product->price}}</span>
                                            </span>
                                            <!-- .onsale -->
                                            <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                                <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                                        <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                        <figure class="woocommerce-product-gallery__wrapper ">
                                                            <div data-thumb="{{url('public/home')}}/assets/images/products/sm-card-1.jpg" class="woocommerce-product-gallery__image">
                                                                <a href="{{url('public/home')}}/assets/images/products/big-card.jpg" tabindex="0">
                                                                    <img width="600" height="600" src="{{url('uploads/product')}}/bien-tan-schneider-atv320u55n4b-55kw-380v.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="">
                                                                </a>
                                                            </div>
                                                            <div data-thumb="{{url('public/home')}}/assets/images/products/sm-card-3.jpg" class="woocommerce-product-gallery__image">
                                                                <a href="{{url('public/home')}}/assets/images/products/big-card-2.jpg" tabindex="-1">
                                                                    <img width="600" height="600" src="{{url('uploads/product')}}/ATV610C16N4.png" class="attachment-shop_single size-shop_single" alt="">
                                                                </a>
                                                            </div>
                                                            <div data-thumb="{{url('public/home')}}/assets/images/products/sm-card-2.jpg" class="woocommerce-product-gallery__image">
                                                                <a href="{{url('public/home')}}/assets/images/products/big-card-1.jpg" tabindex="-1">
                                                                    <img width="600" height="600" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_single size-shop_single" alt="">
                                                                </a>
                                                            </div>
                                                            <div data-thumb="{{url('public/home')}}/assets/images/products/deals-sm-5.jpg" class="woocommerce-product-gallery__image">
                                                                <a href="{{url('public/home')}}/assets/images/products/big-4.jpg" tabindex="-1">
                                                                    <img width="600" height="600" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_single size-shop_single" alt=""> </a>
                                                            </div>
                                                            <div data-thumb="{{url('public/home')}}/assets/images/products/sm-card-2.jpg" class="woocommerce-product-gallery__image">
                                                                <a href="{{url('public/home')}}/assets/images/products/big-card-2.jpg" tabindex="-1">
                                                                    <img width="600" height="600" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_single size-shop_single" alt="">
                                                                </a>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                    <!-- .woocommerce-product-gallery -->
                                                </div>
                                                <!-- .techmarket-single-product-gallery-images -->
                                                <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                                    <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                                        <figure data-thumb="{{url('public/home')}}/assets/images/products/sm-card-1.jpg" class="techmarket-wc-product-gallery__image">
                                                            <img width="180" height="180" src="{{url('uploads/product')}}/bien-tan-schneider-atv320u55n4b-55kw-380v.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                                        </figure>
                                                        <figure data-thumb="{{url('public/home')}}/assets/images/products/sm-card-3.jpg" class="techmarket-wc-product-gallery__image">
                                                            <img width="180" height="180" src="{{url('uploads/product')}}/ATV610C16N4.png" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                        </figure>
                                                        <figure data-thumb="{{url('public/home')}}/assets/images/products/sm-card-2.jpg" class="techmarket-wc-product-gallery__image">
                                                            <img width="180" height="180" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                        </figure>
                                                        <figure data-thumb="{{url('public/home')}}/assets/images/products/big-4.jpg" class="techmarket-wc-product-gallery__image">
                                                            <img width="180" height="180" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                        </figure>
                                                        <figure data-thumb="{{url('public/home')}}/assets/images/products/sm-card-2.jpg" class="techmarket-wc-product-gallery__image">
                                                            <img width="180" height="180" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                        </figure>
                                                    </figure>
                                                    <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                                </div>
                                                <!-- .techmarket-single-product-gallery-thumbnails -->
                                            </div>
                                            <!-- .techmarket-single-product-gallery -->
                                        </div>
                                        <!-- .product-images-wrapper -->
                                        <div class="summary entry-summary">
                                            <div class="single-product-header">
                                                <h1 class="product_title entry-title">{{$product->title}}</h1>
                                                <a class="add-to-wishlist" href="wishlist.html"> Add to Wishlist</a>
                                            </div>
                                            <!-- .single-product-header -->
                                            <div class="single-product-meta">
                                                <div class="brand">
                                                    <a href="#">
                                                        <img alt="galaxy" src="{{url('public/home')}}/assets/images/brands/5.png">
                                                    </a>
                                                </div>
                                                <div class="cat-and-sku">
                                                    <span class="posted_in categories">
                                                        <a rel="tag" href="product-category.html">{{$product->category->title}}</a>
                                                    </span>
                                                    <span class="sku_wrapper">Mã sản phẩm:
                                                        <span class="sku">{{$product->product_code}}</span>
                                                    </span>
                                                </div>
                                                <div class="product-label">
                                                    <div class="ribbon label green-label">
                                                        <span>A+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .single-product-meta -->
                                            <div class="rating-and-sharing-wrapper">
                                                <div class="woocommerce-product-rating">
                                                    <div class="star-rating">
                                                        <span style="width:100%">Rated
                                                            <strong class="rating">5.00</strong> out of 5 based on
                                                            <span class="rating">1</span> customer rating</span>
                                                    </div>
                                                    <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">1</span> customer review)</a>
                                                </div>
                                            </div>
                                            <!-- .rating-and-sharing-wrapper -->
                                            <div class="woocommerce-product-details__short-description">
                                                <ul>
                                                    <li>Multimedia Speakers</li>
                                                    <li>120 watts peak</li>
                                                    <li>Front-facing subwoofer</li>
                                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                                    <li>Backlight: LED</li>
                                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                </ul>
                                                <!-- {{$product->specifications}} -->
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <div class="product-actions-wrapper">
                                                <div class="product-actions">
                                                    <p class="price">
                                                        <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                        </del>
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span>{{$product->price}}</span>
                                                        </ins>
                                                    </p>
                                                    <!-- .single-product-header -->
                                                    <form enctype="multipart/form-data" method="post" class="cart">
                                                        <!-- <div class="quantity">
                                                            <label for="quantity-input">Quantity</label>
                                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" id="quantity-input">
                                                        </div> -->
                                                        <!-- .quantity -->
                                                        <a class="single_add_to_cart_button button alt bgbtn" data-toggle="modal" href='#modal-id' value="185" name="add-to-cart" type="submit">Yêu cầu báo giá </a>
                                                        <div class="modal fade" id="modal-id">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title">Tổng đài hỗ trợ: <span style="color:red">1900.6536</span></h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="" method="POST" role="form">
                                                                            <legend>Nhập thông tin để nhận báo giá</legend>
                                                                        
                                                                            <div class="form-group">
                                                                                <label for="">Họ tên *</label>
                                                                                <input type="text" name="name" class="form-control" id="" placeholder="Nhập họ tên" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Email *</label>
                                                                                <input type="text" name="email" class="form-control" id="" placeholder="Nhập email" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Số điện thoại *</label>
                                                                                <input type="number" name="phone" class="form-control" id="" placeholder="Nhập số điện thoại" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Nội dung</label>
                                                                                <textarea type="text" rows="10" name="content" class="form-control">
                                                                                </textarea>
                                                                            </div>
                                                                            <div class="form-group text-right">
                                                                                 <button type="submit" class="btn btn-primary">Gửi</button>
                                                                                 <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                                                                            </div>
                                                                           
                                                                        </form>
                                                                        </div>
                                                                    <div class="modal-footer">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button style="cursor:none" class="single_add_to_cart_button button" type="button">Hotline đặt hàng: 1900.6536</button>
                                                    </form>
                                                    <!-- .cart -->
                                                   <!--  <a class="add-to-compare-link" href="compare.html">Add to compare</a> -->
                                                </div>
                                                <!-- .product-actions -->
                                            </div>
                                            <!-- .product-actions-wrapper -->
                                        </div>
                                        <!-- .entry-summary -->
                                    </div>
                                    <!-- .single-product-wrapper -->
                                    <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <section class="related">
                                            <header class="section-header">
                                                <h2 class="section-title">Sản phẩm cùng loại</h2>
                                                <nav class="custom-slick-nav"></nav>
                                            </header>
                                            <!-- .section-header -->
                                            <div class="products">
                                            @foreach($others as $other)
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                        <img src="{{url('public/home')}}/assets/images/products/5.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> 456.00</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">{{$other->title}}</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$other->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                                <!-- /.product-outer -->
                                            </div>
                                        </section>
                                        <!-- .single-product-wrapper -->
                                    </div>
                                    <!-- .tm-related-products-carousel -->
                                    <div class="woocommerce-tabs wc-tabs-wrapper">
                                        <ul role="tablist" class="nav tabs wc-tabs">
                                            <li class="nav-item accessories_tab">
                                                <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab-accessories" href="#tab-accessories">Ảnh thực tế</a>
                                            </li>
                                            <li class="nav-item specification_tab">
                                                <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-specification" href="#tab-specification">Thông số kỹ thuật</a>
                                            </li>
                                            <li class="nav-item reviews_tab">
                                                <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-reviews" href="#tab-reviews">Đánh giá (1)</a>
                                            </li>
                                            <li class="nav-item description_tab">
                                                <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-description" href="#tab-description">Đặt hàng</a>
                                            </li>
                                        </ul>
                                        <!-- /.ec-tabs -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-accessories" role="tabpanel">
                                                <div class="accessories">
                                                    <div class="accessories-wrapper">
                                                        <div class="accessories-product columns-5">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                        <span class="price">
                                                                            <del>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                            </del>
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                            </ins>
                                                                        </span>
                                                                        <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                    </a>
                                                                    <div class="checkbox accessory-checkbox">
                                                                        <label>
                                                                            <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="product">
                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                        <span class="price">
                                                                            <del>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                            </del>
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                            </ins>
                                                                        </span>
                                                                        <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                    </a>
                                                                    <div class="checkbox accessory-checkbox">
                                                                        <label>
                                                                            <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="product">
                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                        <span class="price">
                                                                            <del>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                            </del>
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                            </ins>
                                                                        </span>
                                                                        <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                    </a>
                                                                    <div class="checkbox accessory-checkbox">
                                                                        <label>
                                                                            <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="product">
                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                        <span class="price">
                                                                            <del>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                            </del>
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                            </ins>
                                                                        </span>
                                                                        <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                    </a>
                                                                    <div class="checkbox accessory-checkbox">
                                                                        <label>
                                                                            <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="product">
                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                        <span class="price">
                                                                            <del>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                            </del>
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                            </ins>
                                                                        </span>
                                                                        <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                    </a>
                                                                    <div class="checkbox accessory-checkbox">
                                                                        <label>
                                                                            <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.products -->
                                                        </div>
                                                        <!-- .row -->
                                                        
                                                        <!-- .accessories-product-total-price -->
                                                    </div>
                                                    <!-- .accessories-wrapper -->
                                                </div>
                                                <!-- .accessories -->
                                            </div>
                                            
                                            <div class="tab-pane" id="tab-specification" role="tabpanel">
                                                <div class="tm-shop-attributes-detail like-column columns-3">
                                                    <h3 class="tm-attributes-title">General</h3>
                                                    <table class="shop_attributes">
                                                        <tbody>
                                                            <tr>
                                                                <th>Brand</th>
                                                                <td>
                                                                    <p><a href="#" rel="tag">Galaxy</a></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Label</th>
                                                                <td>
                                                                    <p><a href="#" rel="tag">A+</a></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- /.shop_attributes -->
                                                    <h3 class="tm-attributes-title">Technical Specs</h3>
                                                    <table class="shop_attributes">
                                                        <tbody>
                                                            <tr>
                                                                <th>Screen Size</th>
                                                                <td>40″</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Aspect Ratio</th>
                                                                <td>16:9</td>
                                                            </tr>
                                                            <tr>
                                                                <th>3DTV</th>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Recommended Resolution</th>
                                                                <td>1080p</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Panel</th>
                                                                <td>LED</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tuner</th>
                                                                <td>ATSC/Clear QAM Tuners</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Refresh Rate</th>
                                                                <td>120Hz</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Refresh Rate</th>
                                                                <td>120Hz</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- /.shop_attributes -->
                                                    <h3 class="tm-attributes-title">Connectivity</h3>
                                                    <table class="shop_attributes">
                                                        <tbody>
                                                            <tr>
                                                                <th>HDMI</th>
                                                                <td>2 In</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Digital Audio</th>
                                                                <td>1 Optical Out</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Other Connectors</th>
                                                                <td>1 x RF In</td>
                                                                <td>1 x Audio Out (Mini Jack)</td>
                                                                <td>1 x RS232C</td>
                                                            </tr>
                                                            <tr>
                                                                <th>LAN</th>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Composite A/V</th>
                                                                <td>1 In</td>
                                                            </tr>
                                                            <tr>
                                                                <th>USB</th>
                                                                <td>2</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Component Video</th>
                                                                <td>1 in
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- /.shop_attributes -->
                                                </div>
                                                <!-- /.tm-shop-attributes-detail -->
                                            </div>
                                            <div class="tab-pane" id="tab-reviews" role="tabpanel">
                                                <div class="techmarket-advanced-reviews" id="reviews">
                                                    <div class="advanced-review row">
                                                        <div class="advanced-review-rating">
                                                            <h3>Bình luận</h3>
                                                            <div id="comments">
                                                            <ol class="commentlist">
                                                            @foreach($comments as $comment)
                                                                <li id="li-comment-83" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                                    <div class="comment_container" id="comment-83">
                                                                        <div class="comment-text">
                                                                           <!--  <div class="star-rating">
                                                                                <span style="width:100%">Rated
                                                                                    <strong class="rating">5</strong> out of 5</span>
                                                                            </div> -->
                                                                            <p class="meta">
                                                                                <strong itemprop="author" class="woocommerce-review__author">{{$comment->name}}</strong>
                                                                                <span class="woocommerce-review__dash">&ndash;</span>
                                                                                <time datetime="2017-06-21T08:05:40+00:00" itemprop="datePublished" class="woocommerce-review__published-date"><!-- {{($comment->created_at)}} --></time>
                                                                            </p>
                                                                            <div class="description">
                                                                                <p style="font-size:14px;">{{$comment->comment}}</p>
                                                                            </div>
                                                                            <!-- /.description -->
                                                                        </div>
                                                                        
                                                                        <!-- /.comment-text -->
                                                                    </div>
                                                                    <!-- /.comment_container -->
                                                                </li>
                                                            @endforeach
                                                            {{$comments->links()}}
                                                                <!-- /.comment -->
                                                            </ol>

                                                            <!-- /.commentlist -->
                                                        </div>
                                                            <!-- /.avg-rating -->
                                                            
                                                            <!-- /.rating-histogram -->
                                                        </div>
                                                        <!-- /.advanced-review-rating -->
                                                        <div class="advanced-review-comment">
                                                            <div id="review_form_wrapper">
                                                                <div id="review_form">
                                                                    <div class="comment-respond" id="respond">
                                                                        <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                                        <form novalidate="" class="comment-form" id="commentform" method="post" action="{{route('comment')}}">
                                                                            <div class="comment-form-rating">
                                                                            @if(Session::has('success'))
                                                                                <div class="alert alert-success">
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                                    <strong>!!</strong> {{Session::get('success')}}
                                                                                </div>
                                                                            @endif
                                                                                <!-- <label>Your Rating</label>
                                                                                <p class="stars">
                                                                                    <span><a href="#" class="star-1">1</a><a href="#" class="star-2">2</a><a href="#" class="star-3">3</a><a href="#" class="star-4">4</a><a href="#" class="star-5">5</a></span>
                                                                                </p> -->
                                                                                
                                                                            </div>
                                                                            <p class="comment-form-comment">
                                                                                <label for="comment">Your Review</label>
                                                                                <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                                                <!-- @if($errors->has('comment'))
                                                                                    <div class="help-bloc error">{{$errors->first}}</div>
                                                                                @endif -->
                                                                            </p>
                                                                            <p class="comment-form-author">
                                                                                <label for="author">Name
                                                                                    <span class="required">*</span>
                                                                                </label>
                                                                                <input type="text" name="name" aria-required="true" size="30" value="" id="author" required>
                                                                                <!-- @if($errors->has('comment'))
                                                                                    <div class="help-bloc error">{{$errors->first}}</div>
                                                                                @endif -->
                                                                            </p>
                                                                            @csrf
                                                                            <p class="comment-form-email">
                                                                                <label for="email">Email
                                                                                    <span class="required">*</span>
                                                                                </label>
                                                                                <input type="text" aria-required="true" size="30" value="" name="email" id="email" required>
                                                                               <!--  @if($errors->has('comment'))
                                                                                    <div class="help-bloc error">{{$errors->first}}</div>
                                                                                @endif -->
                                                                            </p>
                                                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                            <p class="form-submit">
                                                                                <input type="submit" class="submit" id="submit">
                                                                            </p>
                                                                        </form>
                                                                        <!-- /.comment-form -->
                                                                    </div>
                                                                    <!-- /.comment-respond -->
                                                                </div>
                                                                <!-- /#review_form -->
                                                            </div>
                                                            <!-- /#review_form_wrapper -->
                                                        </div>
                                                        <!-- /.advanced-review-comment -->
                                                    </div>
                                                    <!-- /.advanced-review -->

                                                    <!-- /#comments -->
                                                </div>
                                                <!-- /.techmarket-advanced-reviews -->
                                            </div>
                                            <div class="tab-pane panel wc-tab" id="tab-description" role="tabpanel">
                                                <form action="" method="POST" role="form">
                                                    <legend>Liên hệ đặt hàng: 1900.6536</legend>
                                                
                                                    <div class="form-group">
                                                        <label for="">Họ tên</label>
                                                        <input type="text" class="form-control" id="" placeholder="Input field">
                                                    </div>
                                                
                                                    
                                                
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                                        <header class="section-header">
                                            <h2 class="section-title">Sản phẩm khác</h2>
                                            <nav class="custom-slick-nav"></nav>
                                        </header>
                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('public/home')}}/assets/images/products/card-6.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $600</span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('public/home')}}/assets/images/products/card-3.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('public/home')}}/assets/images/products/card-4.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $800</span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('public/home')}}/assets/images/products/card-5.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('public/home')}}/assets/images/products/card-3.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('public/home')}}/assets/images/products/card-2.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $500</span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Headset 3D Glasses VR for Android</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('public/home')}}/assets/images/products/card-4.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $800</span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('public/home')}}/assets/images/products/card-1.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> $3,788.00</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">$4,780.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">Unlocked Android 6″ Inch 4.4.2 Dual Core</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(0)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- .landscape-product -->
                                                    </div>
                                                </div>
                                                <!-- .woocommerce -->
                                            </div>
                                            <!-- .container-fluid -->
                                        </div>
                                        <!-- .products-carousel -->
                                    </section>
                                    <!-- .section-landscape-products-carousel -->
                                    <section class="brands-carousel">
                                        <h2 class="sr-only">Brands Carousel</h2>
                                        <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                            <div class="brands">
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>apple</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="{{url('public/home')}}/assets/images/brands/1.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>bosch</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="{{url('public/home')}}/assets/images/brands/2.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>cannon</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="{{url('public/home')}}/assets/images/brands/3.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>connect</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="{{url('public/home')}}/assets/images/brands/4.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>galaxy</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="{{url('public/home')}}/assets/images/brands/5.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>gopro</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="{{url('public/home')}}/assets/images/brands/6.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>handspot</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="{{url('public/home')}}/assets/images/brands/7.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>kinova</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="{{url('public/home')}}/assets/images/brands/8.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>nespresso</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="{{url('public/home')}}/assets/images/brands/9.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>samsung</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="{{url('public/home')}}/assets/images/brands/10.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>speedway</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="{{url('public/home')}}/assets/images/brands/11.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                                <div class="item">
                                                    <a href="shop.html">
                                                        <figure>
                                                            <figcaption class="text-overlay">
                                                                <div class="info">
                                                                    <h4>yoko</h4>
                                                                </div>
                                                                <!-- /.info -->
                                                            </figcaption>
                                                            <img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="{{url('public/home')}}/assets/images/brands/12.png">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- .item -->
                                            </div>
                                        </div>
                                        <!-- .col-full -->
                                    </section>
                                    <!-- .brands-carousel -->
                                </div>
                                <!-- .product -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->
@stop()