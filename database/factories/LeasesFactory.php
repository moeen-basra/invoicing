<?php

use Faker\Generator as Faker;

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

$factory->define(App\Data\Models\Lease::class, function (Faker $faker) {
    $date = \Illuminate\Support\Carbon::now()->subDays(rand(50, 150));
    return [
        'started_at' => $date,
        'ended_at' => \Illuminate\Support\Carbon::parse($date)->addYear(rand(1, 3)),
        'price' => mt_rand(50000, 125000)
    ];
});
