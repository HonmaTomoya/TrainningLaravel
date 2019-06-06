<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $now = \Carbon\Carbon::now();
    for ($i = 1; $i <= 5; $i++) {
      $book = [
        'id' => $i,
        'name' => Str::random(10),
        'price' => rand(1, 1000),
        'isbn' => rand(1, 9999999999),
        'author_id' => $i,
        'created_at' => $now,
        'updated_at' => $now,
      ];
      DB::table('books')->insert($book);
    }
  }
}
