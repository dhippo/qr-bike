<?php

namespace App\View\Components;

use Illuminate\View\Component;


class MenuConponent extends Component
{
    public $selectAccount;

    public $selectQR;

    public $selectTemplates = <<<'EOF'
text
EOF;


    public $selectNew;

    public $selectShop;

    public $selectHelp;

    public $selectSetting;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selectAccount, $selectQR, $selectTemplates, $selectNew, $selectShop, $selectHelp, $selectSetting)
    {
        $this->selectAccount = $selectAccount;
        $this->selectQR = $selectQR;
        $this->selectTemplates = $selectTemplates;
        $this->selectNew = $selectNew;
        $this->selectShop = $selectShop;
        $this->selectHelp = $selectHelp;
        $this->selectSetting = $selectSetting;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-conponent');
    }
}
