<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'bio' => $faker->paragraph(2),
        'email' => $faker->safeEmail,
        'portfolio_url' => $faker->url,
        'github_url' => 'https://github.com',
        'profile_photo_url' => 'https://source.unsplash.com/1600x900/?businessperson&sig='. rand(),
    ];
});
