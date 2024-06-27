<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationshpipSeeder extends Seeder
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
            ['Article_id'=>"1","key_id"=>1],
            ['Article_id'=>"1","key_id"=>2],
            ['Article_id'=>"2","key_id"=>1] 
        ];
        DB::table("relationshpip")->insert($data);
    }
}
