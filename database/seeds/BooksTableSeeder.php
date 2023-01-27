<?php

use App\Book;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
             
            $newAuthor = new Book();
            $newAuthor->title = $faker->randomElement();
            $newAuthor->category = $faker->randomElement();
            $newAuthor->author = $faker->randomElement();
            $newAuthor->book_details = $faker->randomElement();
            $newAuthor->save();
            
        }
    }
}
