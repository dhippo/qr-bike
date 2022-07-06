<?php

namespace App\Console\Commands;

use App\Models\Qrcode;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MyTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Un test perso';

    public function handle()
    {
        $this->test002();
    }

    public function test002()
    {

        $user = User::first();
        $this->info($user->email);
        foreach ($user->qrcodes as $qrcode){
            $this->info($qrcode->token);
        }

        //$qrcode = Qrcode::first();
        //$this->info($qrcode->token);
        //$this->info($qrcode->user->email);

    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function test001()
    {
        // @todo delete


        $user = new User();
        $user->email = "test22@test.com";
        $user->password = "kllhjkhl";
        $user->lastname = "Martin";
        $user->firstname = "Jacques";
        $user->infos = "-";
        $user->token = Str::uuid();
        $user->save();

        $this->info($user->email);


        $infos = [
            'race' => 'Berger',
            'couleur' => 'Blanc',
            'taille' => 123
        ];

        $qrcode = new Qrcode();
        $qrcode->user_id = $user->id;
        $qrcode->token = Str::uuid();
        $qrcode->infos = $infos;
        $qrcode->save();

        $this->info($qrcode->token);
        $this->info($qrcode->infos['race']);
        //$this->info($qrcode->infos);

        return 0;
    }
}