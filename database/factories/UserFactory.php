<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            //'firstname' => $this->faker->firstName(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'password'=> Hash::make('password') ,
            'password_confirmation' => 'password test',
            // 'password' => hash::make($this->faker->password), // password
           // 'remember_token' => Str::uuid(),
            //'token' => Str::uuid(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public $timestamps = false;
}
