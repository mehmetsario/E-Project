@extends('layouts.site')

@section('content')

    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper pt-60 pb-60 pt-sm-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-1 order-lg-2">

                    <!-- shop-top-bar start -->
                    <div class="shop-top-bar mt-30">
                        <div class="shop-bar-inner">
                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <!-- shop-item-filter-list end -->
                            </div>
                            <div class="toolbar-amount">
                            </div>
                        </div>

                    </div>
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="product-area shop-product-area">
                                    <div class="row">
                                        @foreach($items as $item)
                                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="{{route('singleProduct',$item->id)}}">
                                                        <img src="{{asset('assets/site/images/product/'.$item->image)}}" alt="Li's Product Image">
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
                                                            <span class="new-price">{{$item->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">

                                                            @if($item->isActive==1)
                                                                <li class="add-cart active"><a href="{{route('cart.add',$item->id)}}">Add to cart</a></li>
                                                            @else
                                                                <li class="add-cart active"><a style="color: red">Not Available</a></li>
                                                            @endif
                                                            <li><a href="{{route('singleProduct',$item->id)}}" title="quick view" class="quick-view-btn" ><i class="fa fa-eye"></i></a></li>
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
                            <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                                <div class="row">
                                    <div class="col">
                                        @foreach($items as $item)
                                        <div class="row product-layout-list">
                                            <div class="col-lg-3 col-md-5 ">
                                                <div class="product-image">
                                                    <a href="{{route('singleProduct',$item->id)}}">
                                                        <img src="{{asset('assets/site/images/product/'.$item->image)}}" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">New</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-7">
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
                                                            <span class="new-price">{{$item->price}}</span>
                                                        </div>
                                                        <p>{{$item->details}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="shop-add-action mb-xs-30">
                                                    <ul class="add-actions-link">
                                                        @if($item->isActive==1)
                                                            <li class="add-cart active"><a href="{{route('cart.add',$item->id)}}">Add to cart</a></li>
                                                        @else
                                                            <li class="add-cart active"><a style="color: red" >Not Available</a></li>
                                                        @endif                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Quick view</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--sidebar-categores-box start  -->
                    <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                        <div class="sidebar-title">
                            <h2>Categories</h2>
                        </div>
                        <!-- category-sub-menu start -->
                        <div class="category">
                            <ul>
                                <br>
                                <h5>  <li class="has-sub"><a href="{{route('shop',0)}} ">ALL</a> </li></h5>

                                @foreach($Category as $Category)
                                    <h5>  <li class="has-sub"><a href="{{route('shop',$Category->id)}}">{{$Category->categoryName}}</a> </li></h5>
                                @endforeach
                            </ul>
                        </div>
                        <!-- category-sub-menu end -->
                    </div>
                    <!--sidebar-categores-box end  -->

                </div>
            </div>
        </div>
    </div>
    <!-- Content Wraper Area End Here -->
@endsection
