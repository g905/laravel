<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
DB::table('categories')->truncate();

        $faker = Faker\Factory::create('ru_RU');
        //$randomSentence = $faker->company;
        foreach(range(1, 20) as $index)
        {
          $parent = rand(0, 5);
          $attendees = rand(1, 5);
          $name = $faker->name;
          $min_date = '1483142400';
          $max_date = '1577750400';
          $email = $faker->email;
          Category::create([
            'name' => $faker->word,
            'parent'=> $parent,
            'level' => 0
          ]);
    }
}
}
