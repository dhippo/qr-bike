<?php

namespace App\Http\Livewire;

use App\Models\Qrcode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class TestLivewire extends Component
{

    /**
     * @var Qrcode $qrcode
     */
    public $qrcode;

    public $qrcodeid;

    public array $fields = [];

    public array $data = [];

    public string $message = "";


    public function mount(){
        $this->qrcode = Qrcode::find($this->qrcodeid);
        if($this->qrcode){
            $this->fields = json_decode($this->qrcode->infos, true);
        }
    }

    public function addField()
    {
        $this->fields[] = [
            'label' => "",
            'value' => "",
        ];

    }

    public function removeField($key)
    {
        unset($this->fields[$key]);
    }

    public function save()
    {
        if(empty($this->fields)){
            $this->message = "il n'y a aucune donnée ????";
        }else{
            if($this->qrcode){
                $token = $this->qrcode->token;
            }else{
                $this->qrcode = new Qrcode();
                $token = Str::uuid();
            }

            $this->qrcode->infos = json_encode($this->fields);
            $this->qrcode->user_id = auth()->user()->id;
            $this->qrcode->token = $token;
            $this->qrcode->save();

            $this->message = "Super !!! Voici l'ID : $this->qrcode->id";
        }
        $this->fields= [];
        return $this->qrcode;
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