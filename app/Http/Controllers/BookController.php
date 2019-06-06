<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request) {
      $books = Book::getBookList();
      return view('book.index', ['books' => $books]);
    }
}
