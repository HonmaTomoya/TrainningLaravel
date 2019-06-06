<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $table = 'books';

  public function author() {
    return $this->belongsTo('App\Author');
  }

  public static function getBookList() {
    $books = Book::join('authors', 'books.author_id', '=', 'authors.id')
      ->select('books.id', 'books.name', 'price', 'isbn', 'author_id', 'authors.name AS author_name', 'authors.age AS author_age')
      ->get();
    return $books;
  }
}
