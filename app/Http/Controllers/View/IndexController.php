<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\home\Member;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    //
    public function test1(){
     return view("home.test16");
    }public function test2() {
        $data = Member::all();
        return response()->json($data);
    }
}
