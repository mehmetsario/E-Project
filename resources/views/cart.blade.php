@extends('layouts.site')

@section('content')
    @if (!session()->has('cart'))
        <p class="minicart-total text-center mb-10  alert-danger">  No Products Added to Cart Shope</p>
    @else
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">

                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="li-product-remove">remove</th>
                                    <th class="li-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="li-product-price">Unit Price</th>
                                    <th class="li-product-quantity">Quantity</th>
                                    <th class="li-product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach(Session()->get('cart')->items as $cart)
                                <tr>

                                    <td class="li-product-remove">
                                        <form method="post" action="{{route('cart.delete',$cart['id'])}}">
                                            @csrf
                                            @method('Delete')
                                            <button  class="close" style="float: none;" type="submit"  title="Remove">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="li-product-thumbnail"><a href="#"><img src="{{$cart['image_small']}}" alt="Li's Product Image"></a></td>
                                    <td class="li-product-name"><a href="#">{{$cart['name']}}</a></td>
                                    <td class="li-product-price"><span class="amount">{{$cart['price']}}</span></td>
                                    <td class="quantity">
                                        <label>Quantity update</label>
                                        <div  >
                                            <form method="post" action="{{route('cart.update',$cart['id'])}}">
                                                @csrf
                                                @method('PUT')
                                                <button  class="close"   type="submit"  title="update">
                                                    <i class="fas fa-sync" ></i>
                                                </button>

                                        </div>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="{{$cart['qty']}}" type="text" name="qty">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>

                                        </div>
                                        </form>
                                    </td>

                                    <td class="product-subtotal"><span class="amount">{{$cart['price']*$cart['qty']}}</span></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Total <span>{{Session()->get('cart')->totalPrice}}</span></li>
                                    </ul>
                                    <a href="#">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
    @endif
@endsection
