<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
// https://laravel.tw/docs/5.2/eloquent
// use App\Models\Member;

// insert 方法
use Illuminate\Support\Facades\DB;
use App\Models\home\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class IndexController extends Controller
{
    //
    public function test1(Request $request)
    { 
        //    判斷請求類型
        if ($request->isMethod('post')) { 
            App::setLocale('zh_TW');
            $this->validate($request, [
                "name" => "required|min:2|max:10",
                "age" => "integer|required|min:1|max:100",
                "email" => "required|email",
                "captcha" => "required|captcha",
            ]);
            //  hasFile 確定請求是否包含給定文件。
            // 驗證上傳成功 $request->file('photo')->isValid()
            
            if ($request->hasFile('avatar') && $request->file("avatar")->isValid()) {
                $path = $request->file('avatar')->store('avatars');
                dd($request->file('avatar')->getClientOriginalName());
                dd($request->file('avatar')->getSize());
                // 將上傳的檔案移動到指定的目錄 "uploads" 中了
                // POST 請求的邏輯...
              
                $path = md5(time() . rand(000001, 999999)) . '.' . $request->file("avatar")->getClientOriginalExtension();
                $request->file("avatar")->move("./uploads", $path);
                $data = $request->all();
                $data["avatar"] = "./uploads/" . $path;
                $result = Member::create($data);
                if($result){
                    return redirect("/");
                }
                // dd($result);
                return view("home/test14");
            }
        } else if ($request->isMethod('get')) {
            return view("home/test14");
        }
    }
    public function test2()
    { 
        Session::put('name', '癢癢');
        Session::put('age', '12');
        Session::put('sex', 'girl');

        // Retrieve data from the session
        // 返回值 或者預設值
        $name = Session::get('name',"hihi");
        echo $name ;
          // 刪除一個
        $name2 = Session::forget('name',"hihi");
        // 刪除全部
        $name4 = Session::flush('name',"hihi");

        dd(  Session::all());

    }
}
