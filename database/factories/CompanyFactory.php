<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'event_id'=> $faker->numberBetween($min = 1, $max = 10),
        'company_name' => $faker->company,
        'company_location'=> $faker->city
    ];
});
