<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
