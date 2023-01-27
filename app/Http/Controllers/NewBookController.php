<?php

namespace App\Http\Controllers;

use App\Providers\Models\Book;
use Illuminate\Http\Request;

class NewBookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
