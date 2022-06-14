<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{

    public $title;
    public $descriptions;
    public $price;
    public $stock;
    
    public function render()
    {
        return view('livewire.product-create');
    }

    public function store()
    {
        Product::create([
            'title' => $this->title,
            'price' => $this->price,
            'stock' => $this->stock,
            'descriptions' => $this->descriptions,
        ]);
    }
}
