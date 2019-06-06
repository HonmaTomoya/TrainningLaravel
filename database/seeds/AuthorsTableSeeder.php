<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
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
      $author = [
        'id' => $i,
        'name' => Str::random(5),
        'age' => rand(1, 100),
        'created_at' => $now,
        'updated_at' => $now,
      ];
      DB::table('authors')->insert($author);
    }
  }
}
