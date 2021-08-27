@extends('layouts.site')

@section('content')

            <!-- Begin Mobile Menu Area -->
            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </header>
        <!-- Header Area End Here -->
        <!-- Begin Slider With Banner Area -->
        <div class="slider-with-banner">
            <div class="container">
                <div class="row">
                    <!-- Begin Slider Area -->
                    <div class="col-lg-8 col-md-8">
                        <div class="slider-area">
                            <div class="slider-active owl-carousel">
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left  animation-style-01 bg-1">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                        <h2>Chamcham Galaxy S9 | S9+</h2>
                                        <h3>Starting at <span>$1209.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="{{route('shop',0)}}">Shopping Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left animation-style-02 bg-2">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                        <h2>Work Desk Surface Studio 2018</h2>
                                        <h3>Starting at <span>$824.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="{{route('shop',0)}}">Shopping Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left animation-style-01 bg-3">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                        <h2>Phantom 4 Pro+ Obsidian</h2>
                                        <h3>Starting at <span>$1849.00</span></h3>
                                        <div class="default-btn slide-btn">
                                            <a class="links" href="{{route('shop',0)}}">Shopping Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                            </div>
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                    <!-- Begin Li Banner Area -->
                    <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                        <div class="li-banner ">
                            <a href="#">
                                <img src="{{asset('assets/site/images/banner/1_1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                            <a href="#">
                                <img src="{{asset('assets/site/images/banner/1_2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Li Banner Area End Here -->
                </div>
            </div>
        </div>
        <!-- Slider With Banner Area End Here -->
        <!-- Begin Product Area -->
        <div class="product-area pt-60 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="li-product-tab">
                            <ul class="nav li-product-menu">
                                <li><a class="active" data-toggle="tab" href="#li-new-product"><span>New Arrival</span></a></li>
                            </ul>
                        </div>
                        <!-- Begin Li's Tab Menu Content Area -->
                    </div>
                </div>
                <div class="tab-content">
                    <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            <div class="product-active owl-carousel">
                               @foreach($item as $item)
                                <div class="col-lg-12">
                                    <!-- burdan -->
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{route('singleProduct',$item->id)}}">
                                                <img src="{{asset('assets/site/images/product/'.$item->image)}}" alt="Li's Product Image" >
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="{{route('singleProduct',$item->id)}}">{{$item->name}}</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="{{route('singleProduct',$item->id)}}">{{$item->description}}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->price}}</span>
                                                    <span class="old-price">{{$item->price+10}}</span>
                                                    <span class="discount-percentage">-7%</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    @if($item->isActive==1)
                                                    <li class="add-cart active"><a href="{{route('cart.add',$item->id)}}">Add to cart</a></li>
                                                    @else
                                                        <li class="add-cart active"><a style="color: red" >Not Available</a></li>
                                                    @endif
                                                        <li><a href="{{route('singleProduct',$item->id)}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>

                                @endforeach
                            </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->



        <!-- Begin Li's Static Home Area -->
        <div class="li-static-home" style="margin-top: 40px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Li's Static Home Image Area -->
                        <div class="li-static-home-image"></div>
                        <!-- Li's Static Home Image Area End Here -->
                        <!-- Begin Li's Static Home Content Area -->
                        <div class="li-static-home-content">
                            <p>Sale Offer<span>-20% Off</span>This Week</p>
                            <h2>Featured Product</h2>
                            <p class="schedule">
                                Starting at
                                <span> $80.00</span>
                            </p>
                            <div class="default-btn">
                                <a href="{{route('shop',0)}}" class="links">Shopping Now</a>
                            </div>
                        </div>
                        <!-- Li's Static Home Content Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Li's Static Home Area End Here -->


    </div>



@endsection
