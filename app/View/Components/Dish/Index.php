<?php

namespace App\View\Components\Dish;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    public $dish;

    public function __construct($dish)
    {
        $this->dish = $dish;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dish.index');
    }
}
