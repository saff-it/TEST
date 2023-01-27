<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class NewAuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }
}
