<?php

namespace App\Http\Livewire;

use App\Models\Qrcode;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;

class TestLivewire extends Component
{
    public string $nameInput = '';
    public array $inputs = [];


    public function addInput()
    {
        $this->inputs[] = $this->nameInput;
        $this->nameInput = "";
    }

    public function save()
    {
        foreach ($this->inputs as $input) {
            $qrcode = Qrcode::create([
                $id = auth()->user()->id,
                $token = Str::uuid(),
                'infos' => $input,

            ]);
        }

    }


    public function render()
    {
        return view('livewire.test-livewire');
    }
}
