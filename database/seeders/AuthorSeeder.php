<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array=[["Author_name"=>"小小"],["Author_name"=>"小1"],["Author_name"=>"小小"]];
        DB::table("Author")->insert($array);
    }
}
