<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\home\Member;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\App;
class IndexORMController extends Controller
{
    //

    // public function test1(){

    //     $member = new Member();
    // 給屬性值 將文字與類映射起來
    // $member->name = "張紹涵";
    // $member->email = "dafdae@gmail.com";
    // $member->age = 24;
    // $result=$member->save();
    // dd($result);
    // }

// $request 對象來獲取客戶端發送的任何資訊
    public function test1(Request $request)
    {
        $member = new Member();
        $result = $member->create($request->all());
        dd($result);
    }
    // public function test3()
    // {
    //     $data = Member::find(11);
    //     $data->email = "jen23@gmail.com";
    //     // $result = $data->where()->save();
    //     $result = $data->save();
    //     dd($result);
    // }
    public function test3()
    {
        $data = Member::where("id","10")->update([
            "age"=>30
        ]);
        
        dd($data);
    }
    public function test2()
    {
        return view("home.test12");
    }
    public function test4(){
        $data=Member::find(10);
        dd($data->delete());
    }
  
    public function test5(Request $request){
        // 判斷請求類型是否為post 
        if ($request->isMethod('post')) {
            // POST 請求的邏輯... 
            App::setLocale('zh_TW');
            $this->validate($request,[
                "name"=> "required|min:2|max:10",
                "age"=>"integer|required|min:1|max:100",
                "email"=>"required|email",
                "captcha"=>"required|captcha"
            ]);
        } elseif ($request->isMethod('get')) {
            // GET 請求的邏輯... 

        } elseif ($request->isMethod('put')) {
            // PUT 請求的邏輯...
        } elseif ($request->isMethod('delete')) {
            // DELETE 請求的邏輯...
        } else {
            // 其他類型請求的邏輯...
        }

        
   
        return view("home.test13");
    }
}
