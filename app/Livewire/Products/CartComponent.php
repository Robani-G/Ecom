<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartComponent extends Component
{
    public function delete($itemId){
        Cart::remove($itemId);
    }
    public function increaseqty($itemId){
        $product=Cart::get($itemId);
        $qty=$product->qty+1;
        Cart::update($itemId,$qty);

    }
    public function decreaseqty($itemId){
        $product=Cart::get($itemId);
      
            $qty=$product->qty-1;
            Cart::update($itemId,$qty);
     
        

    }
    public function render()
    {
        return view('livewire.products.cart-component');
    }
}
