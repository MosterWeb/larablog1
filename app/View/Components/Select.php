<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     */
        
    public $name;
    public $message;
    public $slot;
    public function __construct($name, $message, $slot)
    {
        //
        $this->name = $name;
        $this->message = $message;
        $this->slot = $slot;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
