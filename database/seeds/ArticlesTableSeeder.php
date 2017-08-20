<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('articles')->insert([
            'title' => 'title ok',
            'description' => 'description ok',
            'user_id' => 1
        ]);
    }
}
