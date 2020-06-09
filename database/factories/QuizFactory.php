<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Quiz;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Quiz::class, function (Faker $faker) {

    $array = ['balabhadra kunwar', 'bhakti thapa', 'amarsingh thapa', 'ram bahadur', 'shyam bahadur', 'Sita Kumari', 'Lol Bahadur'];
    return [
        'category' => $faker->randomElement(['history', 'politics']),
        'difficulty' => $faker->randomElement(['low', 'medium', 'hard']),
        'question' => $faker->sentence(10),
        'option' => json_encode(['balabhadra kunwar', 'bhakti thapa', 'amarsingh thapa', 'ram bahadur', 'shyam bahadur', 'Sita Kumari', 'Lol Bahadur']),
        'correct_answer' => Arr::random($array),
    ];
});
