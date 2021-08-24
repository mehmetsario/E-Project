<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'is_admin'=>'1',
                'password'=> Hash::make('12345678'),
            ],
            [
                'name'=>'user',
                'email'=>'user@user.com',
                'is_admin'=>'0',
                'password'=> Hash::make('12345678'),

            ]
        ]);
    }
}
