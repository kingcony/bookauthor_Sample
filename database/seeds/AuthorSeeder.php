<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = ['田中太郎','山田太郎','佐藤太郎'];
        foreach ($authors as $author) {
            DB::table('authors')->insert(['name'=>$author]);
        }
    }
}
