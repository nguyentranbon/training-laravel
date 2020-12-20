<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('tags')->insert([
                'tag_name' => "tag_name{$i}",
                'created_at' => "2019-12-23",
                'updated_at' => "2019-12-23",
            ]);
        }
    }
}
