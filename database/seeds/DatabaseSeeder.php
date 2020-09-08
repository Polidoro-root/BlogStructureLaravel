<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => Str::random(10),
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password')
      ]);

      DB::table('categories')->insert([
        'name' => Str::random(10),
        'slug' => Str::random(10),
        'description' => Str::random(100)
      ]);

      DB::table('tags')->insert([
        'name' => Str::random(10),
        'slug' => Str::random(10),
        'description' => Str::random(100)
      ]);

      DB::table('posts')->insert([
        'category_id' => 1,
        'user_id' => 1,
        'title' => Str::random(10),
        'slug' => Str::random(10),
        'content' => Str::random(100)
      ]);

      DB::table('post_tag')->insert([
        'post_id' => 1,
        'tag_id' => 1
      ]);
    }
}
