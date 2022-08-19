<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name'      =>  'admin',
                'email'     =>  'a@a',
                'password'  =>  bcrypt('password'),
            ],
            [
                'name'      =>  'user',
                'email'     =>  'u@u',
                'password'  =>  bcrypt('password'),
            ],
            [
                'name'      =>  'director',
                'email'     =>  'd@d',
                'password'  =>  bcrypt('password'),
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
