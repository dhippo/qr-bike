<?php

namespace Database\Seeders;

use App\Models\User as User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        User::factory(50)->create();



        /* User::factory(1)->create([
                   'name' => 'hippo',
                   //'lastname' => 'le plb',
                   'email' => 'hippoLPB@example.com',
                   'password' => Hash::make("password"),
             );

              User::factory()->create([
                   'firstname' => 'spider',
                   'lastname' => 'val',
                   'email' => 'spiderVal@example.com',
                 'password' => ash::make("password"),

          User::factory('users')->create([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make("password"),
        ]);

              */
    }

   // public bool $timestamps = false;

}
