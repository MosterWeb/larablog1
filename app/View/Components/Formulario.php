<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Formulario extends Component
{
    /**
     * Create a new component instance.
     */
    public $method;
    public $action;
    public $slot; 
    public function __construct($method, $action, $slot )
    {
        //
        $this->method = $method;
        $this->action = $action;
        $this->slot = $slot; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.formulario');
    }
}
