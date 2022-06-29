<?php

namespace App\Console\Commands;

use App\Mail\CheckEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hippo:testemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Email !!!');
        $url = route('login');

        $checkEmail = new CheckEmail();
        $checkEmail->url = $url;


        Mail::to('durandhippolyte@gmail.com')->send($checkEmail);
        return 0;
    }
}
