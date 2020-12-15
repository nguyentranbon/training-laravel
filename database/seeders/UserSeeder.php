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
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'country_id' => "country_id{$i}",
                'name' => "user{$i}",
                'email' => "user{$i}@gmail.com",
                'password' => Hash::make('123456789'),
                'status' => 1,
                'created_at' => "2019-12-23",
                'updated_at' => "2019-12-23",
            ]);
        }
    }
}
