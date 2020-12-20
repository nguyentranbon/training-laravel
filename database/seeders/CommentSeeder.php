<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            
            DB::table('comments')->insert([
                'content' => "content{$i}",
                'vote' => "1",
                'commentable_type' => "App\Models\Post",
                'commentable_id' => $i,
                'created_at' => "2019-12-23",
                'updated_at' => "2019-12-23",
            ]);
        }
    }
}
