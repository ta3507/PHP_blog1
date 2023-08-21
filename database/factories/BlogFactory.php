<?php

// namespace Database\Factories;
// use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function(Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->realText
    ];
});

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */



// class BlogFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             //
//         ];
//     }
// }
