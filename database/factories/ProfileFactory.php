<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 11/12/18
 * Time: 10:40 PM
 */

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
       'profile' =>$faker -> paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});