<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'user_id'=>1,
        /**'category_id'=>4,*/

        'title'=>$faker->unique()->sentence(4),
        'synopsis'=>$faker->paragraph(6),
        /**'image'=>$faker->imageUrl(400,400),*/
        'image'=>$faker->randomElement([null,$faker->imageUrl(400,400)]),
    ];
});
