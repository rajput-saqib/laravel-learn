<?php

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

    /** @var \Illuminate\Database\Eloquent\Factory $factory */
    $factory->define(App\User::class, function (Faker\Generator $faker) {
        static $password;

        return [
            'username' => $faker->username,
            'email' => $faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'role_id' => 1,

        ];
    });

    $factory->define(App\Role::class, function (Faker\Generator $faker) {
        static $password;

        return [
            'role_name' => $faker->title,
        ];
    });


