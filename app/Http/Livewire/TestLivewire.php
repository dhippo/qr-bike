<?php

namespace App\Http\Livewire;

use App\Models\Qrcode;
use Livewire\Component;

class TestLivewire extends Component
{
    public int $sum = 1;
    public string $nameInput = '';
    public array $inputs = [];

    public function addInput()
    {
        $this->inputs[] = $this->nameInput;
        $this->nameInput = "";
    }

    public function save()
    {
        foreach ($this->inputs as $input){
            $qrcode = Qrcode::create([
                'infos' => $input
            ]);
        }
    }

    public function like()
    {
        $this->sum++;
    }

    public function render()
    {
        return view('livewire.test-livewire');
    }
}
