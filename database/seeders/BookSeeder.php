<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // Replace with your actual model namespace

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'isbn' => '9780307472370',
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'description' => 'A Pulitzer Prize-winning classic about racial injustice in the Deep South.',
                'date_published' => '1960-07-11',
            ],
            [
                'isbn' => '9780007142526',
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'description' => 'An epic high fantasy trilogy that follows the hobbit Frodo Baggins as he journeys to destroy the One Ring.',
                'date_published' => '1954-07-29',
            ],
            [
                'isbn' => '9780140275398',
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'description' => 'A classic novel of manners and romance in 19th-century England.',
                'date_published' => '1813-01-28',
            ],
            [
                'isbn' => '9780140435735',
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'A novel that explores themes of wealth, disillusionment, and the American Dream in the Jazz Age.',
                'date_published' => '1925-04-10',
            ],
            [
                'isbn' => '9780007312012',
                'title' => 'One Hundred Years of Solitude',
                'author' => 'Gabriel García Márquez',
                'description' => 'A magical realist novel that chronicles the rise and fall of the Buendía family and their fictional town of Macondo.',
                'date_published' => '1967-05-30',
            ],
            [
                'isbn' => '9780141196649',
                'title' => 'Jane Eyre',
                'author' => 'Charlotte Brontë',
                'description' => 'A gothic novel that tells the story of Jane Eyre, a young orphan who finds love and independence at Thornfield Hall.',
                'date_published' => '1847-10-16',
            ],
            [
                'isbn' => '9780140241116',
                'title' => 'Hamlet',
                'author' => 'William Shakespeare',
                'description' => 'One of Shakespeare\'s most famous tragedies, following the story of Prince Hamlet and his struggle for revenge.',
                'date_published' (optional) => '1603', // Estimated publication date
            ],
            [
                'isbn' => '9780140435704',
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel that explores themes of totalitarianism, surveillance, and mind control.',
                'date_published' => '1949-06-8',
            ],
            [
                'isbn' => '9780007142748',
                'title' => 'The Hitchhiker\'s Guide to the Galaxy',
                'author' => 'Douglas Adams',
                'description' => 'A comedic science fiction series chronicling the adventures of Arthur Dent and his companions as they travel through space after Earth is destroyed.',
                'date_published' => '1979-10-12',
            ],
            [
                'isbn' => '9780345391803',
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'description' => 'A Pulitzer Prize-winning classic about racial injustice in the Deep South. (You might already have this one)', // Duplicate entry for illustration
                'date_published' => '1960-07-11',
            ],
            [
                'isbn' => '9780141978998',
                'title' => 'The Hanfmaids Tale',
                'author' => 'Margaret Atwood',
                'description' => 'A dystopian novel that explores themes of oppression, gender roles, and environmental degradation.',
                'date_published' => '1985-04-26',
            ],
            [
                'isbn' => '9780385410299',
                'title' => 'The Catcher in the Rye',
                'author' => 'J. D. Salinger',
                'description' => 'A coming-of-age novel that follows Holden Caulfield, a cynical teenager who is expelled from boarding school.',
                'date_published' => '1951-07-16',
            ],
            [
                'isbn' => '9780140247439',
                'title' => 'Frankenstein',
                'author' => 'Mary Shelley',
                'description' => 'A gothic novel that tells the story of Victor Frankenstein, a scientist who creates a monster and the devastating consequences he faces.',
                'date_published' => '1818-03-30',
            ],
            [
                'isbn' => '9780140247939',
                'title' => 'Frankenstein',
                'author' => 'Mary Shelley',
                'description' => 'A gothic novel that tells the story of Victor Frankenstein, a scientist who creates a monster and the devastating consequences he faces.',
                'date_published' => '1818-03-30',
            ],
            [
                'isbn' => '9780140247419',
                'title' => 'Frankenstein',
                'author' => 'Mary Shelley',
                'description' => 'A gothic novel that tells the story of Victor Frankenstein, a scientist who creates a monster and the devastating consequences he faces.',
                'date_published' => '1818-03-30',
            ],
            [
                'isbn' => '9780140247432',
                'title' => 'Frankenstein',
                'author' => 'Mary Shelley',
                'description' => 'A gothic novel that tells the story of Victor Frankenstein, a scientist who creates a monster and the devastating consequences he faces.',
                'date_published' => '1818-03-30',
            ],
            [
                'isbn' => '9780140247431',
                'title' => 'Frankenstein',
                'author' => 'Mary Shelley',
                'description' => 'A gothic novel that tells the story of Victor Frankenstein, a scientist who creates a monster and the devastating consequences he faces.',
                'date_published' => '1818-03-30',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}