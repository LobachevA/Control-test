<?php
$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'detail_text' => $faker->paragraphs(4, true),
    ];
});