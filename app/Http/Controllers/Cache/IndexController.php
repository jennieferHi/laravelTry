<?php

namespace App\Http\Controllers\Cache;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

// https://shijian.beijing-time.org/shijianchuo/
class IndexController extends Controller
{
    public function test1()
    {
        // 10->分鐘
        Cache::put("class", "qz04", 10);
        Cache::put("class", "12", 10);
        // put會覆蓋要用add 計時
        Cache::add("count", "0", 100); 
        // 同名不添加
        Cache::add("class111", "50", 10);
        Cache::add("class111", "1110", 10);
        // 永久
        Cache::forever("classEver", "000", 10);

        echo Cache::get("class", "沒有東西");
        echo Cache::get("time", function () {
            return date('Y-m-d H:i:s', time());
        });
        // 判斷是否存在
        var_dump(Cache::has("time")); //false
        // 一次性存儲   刪除+給值
        var_dump(Cache::pull("class")); //
        // 刪除
        // Cache::forget("class");
        // 刪除全部
        // Cache::flush(); 
        // 遞增 增加數字
        // Cache::increment("count",10);
        // Cache::increment("count");
        // 遞減
        // Cache::decrement("count");
        // Cache::decrement("count",10);
        // 設定默認時間
        $time=Cache::remember("time",100,function(){
            return date('Y-m-d H:i:s',time());
        });
        // string(19) "2024-05-28 13:47:04"
        var_dump($time);
        var_dump(Cache::has($time));// bool(false)
        dd($time);
    }
    public function test2()
    {

    }

}
