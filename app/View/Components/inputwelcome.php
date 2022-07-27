<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputwelcome extends Component
{
    public $type ;
    public $color ;
    public $label ;
    public $name ;
    public $value ;
    public $errors ;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $label, $name, $value, $errors, $color)
    {
        $this->type = $type;
        $this->color = $color;
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputv2',[
            'name' => $this->name,
            'type' => $this->type,
            'label' => $this->label,
            'value' => $this->value,
            'errors' => $this->errors,
            'color' => $this->color,
        ]);
    }
}
