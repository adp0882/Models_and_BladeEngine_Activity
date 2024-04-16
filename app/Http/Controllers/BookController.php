<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Fetch all books from the database
        $books = Book::all();

        // Pass the books to the view
        return view('books.index', compact('books'));
    }
}