<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Md.Admin',
            'user_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin.com'),
        ]);

         DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Md.Author',
            'user_name' => 'author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('author.com'),
        ]);
    }
}
