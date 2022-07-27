<?php

namespace App\Http\Livewire;

use App\Models\Qrcode;
use Illuminate\Support\Str;
use Livewire\Component;

class TestLivewire extends Component
{
    public string $nameInput = '';

    public array $inputs = [];


    public function addInput()
    {
        $this->inputs[] = $this->nameInput;
        $this->nameInput = '';

    }

    public function save()
    {

        $id = auth()->user()->id;
        $token = Str::uuid();


        $qrcode = Qrcode::create([
            'infos' => $this->inputs,
            'user_id' => $id,
            'token' => $token,
        ]);

        $this->render();
    }

    public function render()
    {
        return view('livewire.test-livewire');
    }
}
