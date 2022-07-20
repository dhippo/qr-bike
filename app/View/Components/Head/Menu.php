<?php

namespace App\View\Components\Head;

use Illuminate\View\Component;

class Menu extends Component
{
    public $selectAccount;

    public $selectQR;

    public $selectTemplates;

    public $selectNew;

    public $selectShop;

    public $selectHelp;

    public $selectSetting;

    public $modif;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selectAccount, $selectQR, $selectTemplates, $selectNew, $selectShop, $selectHelp, $selectSetting, $modif)
    {
        $this->selectAccount = $selectAccount;
        $this->selectQR = $selectQR;
        $this->selectTemplates = $selectTemplates;
        $this->selectNew = $selectNew;
        $this->selectShop = $selectShop;
        $this->selectHelp = $selectHelp;
        $this->selectSetting = $selectSetting;
        $this->modif = $modif;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app.menu');
    }
}
