<?php
namespace App;
use Faker\Generator as Faker;


$factory->define(Event::class, function (Faker $faker) {
    return [
        //
        'name'    => 'Laravel without Coffee',
        'enabled' => 1,
        'started_at' => '2017-12-01 15:00:00',
        'venue'   => 'City Coffee Shop',
        'city'    => 'Dublin',
        'description' => 'Lts drink water and learn Laravel'
    ];
});

$factory->state(Event::class, 'wrong_description', [
  'name'    => 'Laravel without Coffee',
  'enabled' => 1,
  'started_at' => '2017-12-01 15:00:00',
  'venue'   => 'City Coffee Shop',
  'city'    => 'Dublin',
  'description' => 'asdf'
]);
