<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/** archivo refrencias*/
use App\Model;
use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    
    return [
        'name'=>$faker->name,
    ];
});
