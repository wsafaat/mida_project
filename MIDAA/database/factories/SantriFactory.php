<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Santri::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence(3),
        'kelas' => $faker->sentence(3),
        'jenis kelamin' => $faker->sentence(2),
        'ttl' => $faker->paragraph(4),
        'alamat' => $faker->paragraph(4),
        'peringkat' => $faker->sentence(3),
        'rata nilai' => $faker->sentence(3),
        // 'completed' => false
    ];
});
