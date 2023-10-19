<?php

namespace App\Livewire\Products;

use App\Models\product;
use Livewire\Component;

class SingleList extends Component
{
    public function render($id)
    {
        return view('livewire.products.single-list/{$id}',[
            "Products"=>product::find($id)
        ]);
    }
}
