<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->truncate();

        $faker = Faker\Factory::create('ru_RU');
        //$randomSentence = $faker->company;
        foreach(range(1, 50) as $index)
        {
          $enabled = rand(0, 1);
          $name = $faker->name;
          $min_date = '1483142400';
          $max_date = '1577750400';
          $email = $faker->email;
          Event::create([
            'name' => $name,
            'city' => $faker->city,
            'venue' => $faker->company,
            'description' => $faker->paragraphs(1, true),
            'enabled' => $enabled,
            'started_at' => $faker->dateTimeBetween('-1 year', $max_date, 'UTC'),
            'slug' => Slug::make($name),
            'email' => $email,
            'avatar' => 'https://api.adorable.io/avatars/200/'.$email.'.io.png'
          ]);
        }

    }
}
