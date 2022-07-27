<?php

namespace App\Http\Livewire;

use App\Models\Qrcode;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateqrLivewire extends Component
{
    public string $nameInput = '';
    public string $valueInput = '';
    public array $inputs = [];
    public array $valueInputs = [];
    public array $nameInputs = [];
    public int $count = 0;




    public function addInput()
    {

        $this->inputs[] = $this->nameInput.' : '.$this->valueInput;
        $this->nameInputs[] = $this->nameInput;
        $this->valueInputs[] = $this->valueInput;


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


    }

    public function render()
    {
        return view('livewire.createqr-livewire');
    }
}
