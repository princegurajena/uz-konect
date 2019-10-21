<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactDetail;
use App\Menu;
use App\Restaurant;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'description' => $faker->sentence,
        'short_name' => 'PG'
    ];
});
$factory->define(Menu::class, function (Faker $faker) {
    return [
        'restaurant_id' => 1,
        'image' => '/img/download.jpeg',
        'name' => $faker->word,
        'price' => $faker->numberBetween( 5 , 40),
        'description' => $faker->sentence
    ];
});

$factory->define(ContactDetail::class, function (Faker $faker) {
    return [
        'primary' => $faker->phoneNumber,
        'secondary' => $faker->phoneNumber,
        'address' => $faker->address,
        'contact_details_id' => 1 ,
        'contact_details_type' => Restaurant::class
    ];
});
