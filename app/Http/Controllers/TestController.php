<?php
// 命名空間山元素
// const method class
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
class TestController extends Controller
{
    //測試控制器路由使用
    public function test1(){
        phpinfo();
    }
    public function test2(Request $request){
        $value = $request->input('key',"1233");
        $input = $request->all();

        dd($input);//dump+die打印加停止
        // dd後續代碼不會執行
        return response()->json($input);
    }

}
