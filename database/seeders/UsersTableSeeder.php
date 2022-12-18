<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

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
            'name' => "Ankit Kumar",
            'email' => "tankit5210@gmail.com",
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('Ankit12345'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
