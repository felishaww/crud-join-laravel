<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween($min = 1, $max = 30),
        'staff_name' => $faker->firstName,
        'staff_age' => $faker->numberBetween($min = 18, $max = 58),
        'staff_job' => $faker->jobTitle
    ];
});
