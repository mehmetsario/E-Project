<header>
    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30">
                        <a href="/">
                            <img src="{{asset('assets/site/images/menu/logo/1.png')}}" width="120" alt="">
                        </a>
                    </div>
                </div>
                <!-- Header Logo Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <ul class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                    <!-- Begin Header Middle Searchbox Area -->
                    <form method="post" action="{{route('search')}}" class="hm-searchbox">
                        @csrf
                        <input name="key" type="text" placeholder="Enter your search key ...">
                        <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- Header Middle Searchbox Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="header-middle-right">
                        <ul class="hm-menu">
                            <!-- Begin Header Mini Cart Area -->
                            <li class="hm-minicart">
                                <div class="hm-minicart-trigger">
                                    <span class="item-icon"></span>
                                    <span class="item-text">{{session()->has('cart')? session()->get('cart')->totalPrice:'0'}} $
                                                    <span
                                                        class="cart-item-count">{{session()->has('cart')? session()->get('cart')->totalQty:'0'}}</span>
                                                </span>
                                </div>
                                <span></span>
                                <div class="minicart">
                                    <ul class="minicart-product-list">
                                        @if(!session()->get('cart'))
                                    </ul>
                                    <p class="minicart-total">No Products Found</p>


                                    </div>
                        </ul>  </div>
                            </li>

                            @else
                                @foreach(session()->get('cart')->items as $cart)
                                    <li>
                                        <a href="single-product.html" class="minicart-product-image">

                                            <img src="{{asset('assets/site/images/product/'.$cart['image'])}}"
                                                 alt="cart products">
                                        </a>
                                        <div class="minicart-product-details">
                                            <h6><a href="single-product.html">{{$cart['name']}}</a></h6>
                                            <span>{{$cart['price']}} $ * {{$cart['qty']}}</span>
                                        </div>
                                        <form method="post" action="{{route('cart.delete',$cart['id'])}}">
                                            @csrf
                                            @method('Delete')
                                        <button  type="submit" class="close" title="Remove">
                                            <i class="fa fa-close"></i>
                                        </button>
                                        </form>

                                    </li>
                                @endforeach
                        </ul>
                        <p class="minicart-total">SUBTOTAL: <span>{{session()->get('cart')->totalPrice}} $</span></p>
                        <div class="minicart-button">
                            <a href="/cart" class="li-button li-button-fullwidth li-button-dark">
                                <span>View Full Cart</span>
                            </a>

                        </div>
                    </div>
                    </li>
                @endif

                <!-- Header Mini Cart Area End Here -->
                    </ul>
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
            <!-- Header Middle Right Area End Here -->
        </div>
    </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="hb-menu">
                        <nav>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="megamenu-holder"><a href="{{route('shop',0)}}">Shop</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact</a></li>
                                @if(Auth::check())
                                    @if (Auth::user()->is_admin==1)
                                        <li><a href="/admin">Dashboard</a></li>
                                        <li> <form  id="my_form" method="Post" action="{{route('logout')}}">
                                            @csrf
                                            <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">LogOut: {{Auth::user()->name}}</a>
                                        </form></li>
                                    @else
                                        <li><form  id="my_form" method="Post" action="{{route('logout')}}">
                                            @csrf
                                          <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">LogOut: {{Auth::user()->name}} </a>
                                        </form></li>
                                    @endif

                                @else
                                    <li><a href="/login">LogIn</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End Here -->
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
