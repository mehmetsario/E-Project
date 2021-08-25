@extends('layouts.site')

@section('content')
    <!--Checkout Area Strat-->
    @if (!session()->has('cart'))
        <p class="minicart-total text-center mb-10  alert-danger">  No Products Added to Cart Shope</p>
    @else
        <div class="checkout-area pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form method="post" action="{{route('placeOrder')}}">
                        @csrf
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Name <span class="required">*</span></label>
                                        <input name="name" placeholder="" type="text" value="{{Auth::user()->name}}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email: <span class="required">*</span></label>
                                        <input name="email" placeholder="" type="email" value="{{Auth::user()->email}}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input name="address" placeholder="Street address" type="text">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Cell No: <span class="required">*</span></label>
                                        <input name="phone" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Work Phone No:  <span class="required">*</span></label>
                                        <input name="wphone" type="text">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Date Of Birth: <span class="required">*</span></label>
                                        <input name="dateOfBirth" placeholder="" type="date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Gender:  <span class="required">*</span></label>
                                        <select name="gender" >
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <input hidden name="totalPrice" value="{{session()->get('cart')->totalPrice}}">
                            </div>

                        </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(session()->get('cart'))
                                @foreach(session()->get('cart')->items as $cart)
                                <tr class="cart_item">
                                    <td class="cart-product-name">{{$cart['name']}}<strong class="product-quantity"> × {{$cart['qty']}}</strong></td>
                                    <td class="cart-product-total"><span class="amount">{{$cart['price']}}</span></td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>

                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">{{session()->get('cart')->totalPrice}}</span></strong></td>
                                </tr>
                                </tfoot>
                            </table>
                            @endif

                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-1">
                                            <h5 class="panel-title">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Direct Bank Transfer.
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Cheque Payment
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    PayPal
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <input value="Place order" type="submit">
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
    <!--Checkout Area End-->
    @endif
@endsection
