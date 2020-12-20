<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TaggaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('taggales')->insert([
                'tag_id' => $i,
                'taggable_type' => "App\Models\Video",
                'taggable_id' => $i,
                'created_at' => "2019-12-23",
                'updated_at' => "2019-12-23",
            ]);
        }
    }
}
