<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $array=[["comment"=>"好久不見","Article_id"=>5],["comment"=> "你好","Article_id"=> 2],["comment"=> "早安","Article_id"=> 1],["comment"=> "晚安",  "Article_id"=> 2]];
        //
        DB::table("comment")->insert($array);
    }
}
