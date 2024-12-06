<?php

namespace Database\Factories;

use App\Models\Admin;
use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
//use App\Models\User;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//use Laravel\Jetstream\Features;

use App\Models\Team;
use App\Models\User;



use Laravel\Jetstream\Features;




/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =Admin::class;
    public function definition(): array
    {
        
        return [
           // 'name' => 'Admin66',
          //  'email' =>'admin66@gmail.com',
          'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
           // 'password' => static::$password ??= Hash::make('password'),
          'password' => Hash::make('password'),
           /// 'two_factor_secret' => null,
            //'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
          //  'profile_photo_path' => null,
           // 'current_team_id' => null,
        ];
    }
}
