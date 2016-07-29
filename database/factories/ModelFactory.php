<?php

use pollo\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(pollo\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'email' => $faker->email,
        'type' => 'cliente',
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(pollo\Comment::class, function (Faker\Generator $faker) {
    $i = 1;

    return [
        'calification' => '0',
        'description' => $faker->sentence,
        'user_id' => $faker->randomDigitNotNull,  
    ];
    
});

$factory->define(pollo\Product::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'precio' => $faker->randomNumber(3),
    ];
    
});

$factory->define(pollo\Pedido::class, function (Faker\Generator $faker) {

    return [
        'cantidad' => $faker->randomDigitNotNull,
        'description' => $faker->sentence,
        'status' => '0',
        'user_id' => $faker->randomDigitNotNull,  
    ];
    
});