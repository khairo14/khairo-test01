<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            'name' => 'Eldrin Bradecina',
            'email'=> 'eldrin.bradecina@gmail.com',
            'username'=>'admin1',
            'password'=> Hash::make('khairo14'),
            'role_id'=> '1'
        ]);

        DB::table('users')->insert([
            'name' => 'User users',
            'email'=> 'user@gmail.com',
            'username'=>'user1',
            'password'=> Hash::make('12345678'),
            'role_id'=> '2'
        ]);
    }
}
