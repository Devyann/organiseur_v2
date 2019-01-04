<?php

use App\User;
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
        User::create([
            'name' => 'Yannick',
            'email' => 'yannkhe@gmail.com',
            'password' => bcrypt('yannick'),
        ]);
    }
}
