<?php

namespace App\Models;
use Illuminate\Support\Facades\Session;


class Cart
{
    public $items = [];
    public $totalQty;
    public $total_price;
    public $itemPrice;
    public $itemQty;

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

    public function remove($id)
    {
        if (array_key_exists($id, $this->items)) {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->total_price -= $this->items[$id]['qty']*$this->items[$id]['price'];
            unset($this->items[$id]);
        }
    }
    public function updateQty($id,$qty){
        $this->totalQty -=$this->items[$id]['qty'];
        $this->total_price-=$this->items[$id]['qty']*$this->items[$id]['price'];

        $this->items[$id]['qty']=$qty;

        $this->totalQty+=$qty;
        $this->total_price+=$this->items[$id]['price']*$qty;
    }
}
