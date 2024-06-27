<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    //
    public function test1(){
       echo"hihi";
    }
    public function test3(){
        $date = date('Y-m-d H:i:s'); // time() is default, so it's optional here
         $day = "日";
         $time=strtotime('+1 year');
        // return view("home.test3", ['date' => $date, 'day' => $day]);
        return view('home.test3',compact('date','day','time'));
    }
    public function test4(){
        $items = [
            ['name' => 'Item 1', 'description' => 'Description 1'],
            ['name' => 'Item 2', 'description' => 'Description 2'],
            ['name' => 'Item 3', 'description' => 'Description 3'],
        ];
        $db = DB::table('member');
        $result = $db->get();
        return view('home.test4',compact('result',"items"));
 
    }
    public function test6(){
        return view("home.test6");
    }
    public function test7(){
        return view("home.test7");
    }
    public function test9(){
        return view("home.test8");
    }
    public function test8(){
        return "success";
    }
}
