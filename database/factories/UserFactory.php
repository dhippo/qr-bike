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
            // 'password' => hash::make($this->faker->password), // password
           // 'remember_token' => Str::uuid(),
            //'token' => Str::uuid(),
           // 'email' => $this->faker->unique()->safeEmail,
          //  'password'=> Hash::make('password') ,
            //   'password_confirmation' => 'password test',
            //   'token' => Str::uuid(),
            //  'active_token' => Str::uuid(),
            //  'photo' => $this->faker->imageUrl($width = 640, $height = 480),
            //  'lastname' => $this->faker->lastName,
            // 'firstname' => $this->faker->firstName,
            // 'sex' =>  $this->faker->title($gender = null|'male'|'female'), // M/F ?
            //  'age' =>  $this->faker->year($max = 'now'),
            //  'blood' =>  $this->faker->shuffleArrayc(['A+','A-','B+','B-','AB+','AB-','O+','O-',]),  //'blood' =>  $this->faker->shuffle(['A+','A-','B+','B-','AB+','AB-','O+','O-',]),
            //   'weight' =>  $this->faker->numberBetween($min = 1, $max = 99),
            //   'size' =>  $this->faker->numberBetween($min = 1, $max = 99),
            //  'phone' =>  $this->faker->phoneNumber,
            //  'country' =>  $this->faker->country,
            //  'city' =>  $this->faker->city,
            //  'phoneContact' =>  $this->faker->phoneNumber,
            //  'nameContact' =>  $this->faker->name,
            //  'phoneDoctor' =>  $this->faker->phoneNumber,
            //  'nameDoctor' =>  $this->faker->name,
            // 'other' =>  $this->faker->text,

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
