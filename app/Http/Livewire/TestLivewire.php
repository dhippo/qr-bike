<?php

namespace App\Http\Livewire;

use App\Models\Qrcode;
use Livewire\Component;

class TestLivewire extends Component
{
    //public int $sum = 1;
    public string $nameInputV = '';
    public string $nameInputK = '';
    public array $inputs = [];

    public $key = '';
    public $value = '';


    public function addInput()
    {
        $key = '';
        $value = '';
        $this->inputs = [$this->nameInputK = $key, $this->nameInputV = $value];
    }

    public function save()
    {
        foreach ($this->inputs as $input) {
            $qrcode = Qrcode::created([
                'infos' => $input = [$this->nameInputK, $this->nameInputV]
            ]);
        }
    }

    /*public function like()
     {
         $this->sum++;
     }*/

    public function render()
    {
        return view('livewire.test-livewire');
    }
}
