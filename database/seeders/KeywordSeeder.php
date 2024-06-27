<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            ['keyword'=>"好玩"],
            ['keyword'=>"無聊"],
            ['keyword'=>"難過"]
        
        ];
        DB::table("paper")->insert($data);

    }
}
