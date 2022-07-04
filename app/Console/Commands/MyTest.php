<?php

namespace App\Console\Commands;

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

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $token = Str::uuid();
        $this->info($token);

        $token = Str::random(32);
        $this->info($token);

        return 0;
    }
}
