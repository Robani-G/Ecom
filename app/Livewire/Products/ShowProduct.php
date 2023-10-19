<?php

namespace App\Livewire\Products;

use App\Models\product;
use Cart;
use Livewire\Component;

class ShowProduct extends Component
{
    public function store($id, $name, $price){
        Cart::add($id, $name, 1, $price)->associate('\App\Models\product');
        session() ->flash('success message', 'Item added in cart');
        return redirect() ->route('shop.cart');
       }

    public function render()
    {
        return view('livewire.products.show-product
        ',[
            "products"=>product::latest()->get()

        ]);
    }
}
