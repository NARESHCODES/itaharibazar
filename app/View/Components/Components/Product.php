<?php

namespace App\View\Components\Components;

use Illuminate\View\Component;

class Product extends Component
{
    protected $product;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $product = $this->product;
        return view('components.components.product',compact('product'));
    }
}
