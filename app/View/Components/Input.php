<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $name;
    public $type;
    public $title;
    public $placeholder;
    
    public function __construct($id, $name, $type, $title, $placeholder)
    {
        //
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->title = $title;
        $this->placeholder = $placeholder;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
