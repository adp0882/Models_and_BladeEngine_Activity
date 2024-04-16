<?php

use App\Models\Book;
use Database\Factories\BookFactory;

for ($i = 0; $i < 20; $i++) {
    BookFactory::create();
}

echo "Successfully created 20 books!";