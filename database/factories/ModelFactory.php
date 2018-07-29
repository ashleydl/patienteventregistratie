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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($faker->password),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Incident::class, function (Faker\Generator $faker) {
    return [
        'event_id' => $faker->ean8,
        'patient_id' => $faker->ean8,
        'complaint' => $faker->text($maxNbChars = 200),
        'injury' => $faker->randomElement($array = array('Hoofdletsel', 'Gezichtsletsel', 'Oogletsel', 'Nekletsel', 'Schouderletsel', 'Rugletsel', 'Borstletsel', 'Buikletsel', 'Armen', 'Handen', 'Bovenbeen', 'Knie', 'Onderbeen', 'Enkel', 'Voet', 'Onwel', 'Alcohol', 'Drugs', 'Suikerspiegel')),
        'abcd' => $faker->numberBetween(0, 1),
        'respiration' => $faker->numberBetween(0, 1),
        'avpu' => $faker->randomElement($array = array('yes_verbal', 'yes_pain', 'yes_unresponsive', 'no_alert')),
        'circulation' => $faker->numberBetween(0, 1),
        'active_bleeding' => $faker->numberBetween(0, 1),
        'variant_fast' => $faker->numberBetween(0, 1),
        'medicines' => $faker->numberBetween(0, 1),
        'medicines_desc' => $faker->text($maxNbChars = 200),
        'relevant_diseases' => $faker->numberBetween(0, 1),
        'diseases_history' => $faker->text($maxNbChars = 200),
        'last_meal' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'treatment_desc' => $faker->text($maxNbChars = 200),
        'taken_action' => $faker->randomElement($array = array('none', 'friendsandfamily', 'bycomplaintscallgp', 'firstaidorgp', 'ambulance', 'deniedtreatment')),
        'timeleft' => $faker->time($format = 'H:i:s', $max = 'now'),
        'additionalcomments' => $faker->text($maxNbChars = 200),
        'namescaregiver' => $faker->name,
        'evaluate_supervisor' => $faker->numberBetween(0, 1),
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'date' => $faker->date(),
        'location' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Location::class, function (Faker\Generator $faker) {
    return [
        'city' => $faker->city,
        'postcode' => '1234AB',
        'straat' => $faker->streetName,
        'nummer' => $faker->buildingNumber,
        'toevoeging' => $faker->randomLetter,
    ];
});

