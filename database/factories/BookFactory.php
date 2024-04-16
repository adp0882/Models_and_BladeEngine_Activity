<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class BookFactory extends Factory
{
    /**
     * Define the model for the factory.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the fields and values for the new model.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            'isbn' => $faker->isbn13,
            'title' => $faker->sentence,
            'author' => $faker->name,
            'description' => $faker->paragraph(2),  // Generate 2-paragraph description
            'date_published' => $faker->date(),
        ];
    }
}