<?php

use Illuminate\Database\Seeder;
use Unguran\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create(['name' => 'Oliver Nimet', 'email' => 'oliver.nimet@gmail.com', 'password' => bcrypt('secret')]);
    }
}
