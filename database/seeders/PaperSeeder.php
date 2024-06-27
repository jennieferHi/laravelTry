<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaperSeeder extends Seeder
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
            ['paper_name'=>"好玩","start_time"=>strtotime('+7 days'),'duration'=>'120'],
            ['paper_name'=>"無聊","start_time"=>strtotime('+2 days'),'duration'=>'110'],
            ['paper_name'=>"難過","start_time"=>strtotime('+1 days'),'duration'=>'150']
        
        ];
        DB::table("paper")->insert($data);
    }
}
// php artisan make:seeder PaperSeeder
// 執行 php artisan db:seeded --class=
//php artisan db:seed --class=PaperSeeder
// 沒有刪除與rollback 直接手刪資料庫