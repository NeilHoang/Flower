<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
           'name' => 'Bui Van Hoang',
           'email' => Str::random(8).'@gmail.com',
            'password' => Hash::make('123456789'),
            'provider' => Str::random(10),
            'provider_id' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'Hoang',
            'email' => Str::random(8).'@gmail.com',
            'password' => Hash::make('123456789'),
            'provider' => Str::random(10),
            'provider_id' => '2'
        ]);
        DB::table('users')->insert([
            'name' => 'Bui Hoang',
            'email' => Str::random(8).'@gmail.com',
            'password' => Hash::make('123456789'),
            'provider' => Str::random(10),
            'provider_id' => '3'
        ]);
    }
}
