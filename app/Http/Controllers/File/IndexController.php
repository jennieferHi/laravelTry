<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\home\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;

class IndexController extends Controller
{
    //文件上傳
    // https://laravel.com/docs/11.x/requests#files
    // https://laravel.tw/docs/4.2/requests
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
    public function test2(Request $request)
    {

        // $result = Member::get();
        $result = Member::paginate(1);
        // 展示
        return View("home.test15", compact("result"));
    }

}
