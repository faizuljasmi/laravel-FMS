<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Complaint;
use Faker\Generator as Faker;
use App\User;

$factory->define(Complaint::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->words(5, true),
        'body' => $faker->text(300),
        'status' => $faker->randomElement(['Open','Pending','Completed']),
        'user_id' => User::all()->random()->id
    ];
});
