<?php

use App\Author;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
             
            $newAuthor = new Author();
            $newAuthor->name = $faker->randomElement();
            $newAuthor->bio = $faker->randomElement();
            $newAuthor->date_of_birth = $faker->dateTime();
            $newAuthor->save();
            
        }
    }
}
