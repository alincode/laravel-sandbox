<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'alincode',
            'full_name' => 'AILIN LIOU',
            'email' => 'alincode@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
