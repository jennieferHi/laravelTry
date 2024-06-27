<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=[["Article_name"=>"小節","Article_id"=>711],["Article_name"=>"小量","Article_id"=>211],["Article_name"=>"小瓜","Article_id"=>988]];
       DB::table("Article")->insert($array);

        //
    }
}
