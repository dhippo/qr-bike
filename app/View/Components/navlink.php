<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navlink extends Component
{
    public $href; //link route
    public $name; //route to test
    public $color; //color
    public $value; //titre
    public $hovercolor; //titre







    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $name, $href, $value, $hovercolor)
    {
        $this->color = $color;
        $this->name = $name;
        $this->href = $href;
        $this->value = $value;
        $this->hovercolor = $hovercolor;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.navlink',[
            'color' => $this->color,
            'name' => $this->name,
            'href' => $this->href,
            'value' => $this->value,
            'hovercolor' => $this->hovercolor,
        ]);
    }
}
