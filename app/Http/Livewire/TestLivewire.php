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
        $this->nameInput = "";
    }

    public function save()
    {

        $id = auth()->user()->id;
        $token = Str::uuid();
        $count = 0;



        foreach ($this->inputs as $input){


        }

        $qrcode = Qrcode::create([
            'infos' => $input,
            'user_id' => $id,
            'token' => $token,
        ]);
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
