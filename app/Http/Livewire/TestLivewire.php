<?php

namespace App\Http\Livewire;

use App\Models\Qrcode;
use Livewire\Component;

class TestLivewire extends Component
{

    public array $fields = [];

    public function addField()
    {
        $this->fields[] = count($this->fields) +1;
    }

    public function removeField($key)
    {
        unset($this->fields[$key]);
    }

    public function save($fields)
    {

        return dd($fields);
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