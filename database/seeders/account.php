<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert(array([
            'username' => 'test',
            'password' => Hash::make('admin@123'),
            'email' => 'test@gmail.com',
            'phone' => '98349',
            'fullname' => 'aksdjlfsd',
            'level' => '2'
        ],
        [
            'username' => 'administrator',
            'password' => Hash::make('admin@123'),
            'email' => 'administrator@gmail.com',
            'phone' => '98349',
            'fullname' => 'Administrator',
            'level' => '1'
        ]));
    }
}
