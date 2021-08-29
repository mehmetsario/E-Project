<?php

namespace App\Models;
use Illuminate\Support\Facades\Session;


class Cart
{
    //Preparing variables to use it
    public $items = [];
    public $totalQty;
    public $total_price;
    public $itemPrice;
    public $itemQty;

    //Main constructor to check if there is item in cart or not

    public function __Construct($cart = null)
    {

        if ($cart) {

            $this->items += $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->total_price = $cart->total_price;
        } else {
            $this->items = [];
            $this->totalQty = 0;
            $this->total_price = 0;
        }

    }
    // Add function to add product to cart

    public function add($product)
    {
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 0,
            'image' => $product->image,
        ];
        if (!array_key_exists($product->id, $this->items)) {
            $this->items[$product->id] = $item;
            $this->totalQty += 1;
            $this->total_price += $product->price;
        } else {
            $this->totalQty += 1;
            $this->total_price += $product->price;
        }
        $this->items[$product->id]['qty'] += 1;

    }

    // Remove function to remove product from cart
    public function remove($id)
    {
        if (array_key_exists($id, $this->items)) {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->total_price -= $this->items[$id]['qty']*$this->items[$id]['price'];
            unset($this->items[$id]);
        }
    }
    // updateQty function to edit quantity of product

    public function updateQty($id,$qty){
        $this->totalQty -=$this->items[$id]['qty'];
        $this->total_price-=$this->items[$id]['qty']*$this->items[$id]['price'];
        $this->items[$id]['qty']=$qty;
        $this->totalQty+=$qty;
        $this->total_price+=$this->items[$id]['price']*$qty;
    }
}
