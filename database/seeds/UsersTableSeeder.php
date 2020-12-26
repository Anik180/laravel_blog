<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
          'role_id' => '1',
          'name' => 'mr.admin',
          'username' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => Hash::make('admin1234'),
        ]);
        DB::table('users')->insert([
          'role_id' => '2',
          'name' => 'mr.author',
          'username' => 'author',
          'email' => 'author@gmail.com',
          'password' => Hash::make('author1234'),
        ]);
    }
}
