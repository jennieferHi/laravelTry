<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use App\Models\Custom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Custom::all();
        $data = [
            "status" => 200,
            "student" => $customers,
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        //
        $vaildator = Validator::make($request->all(), [
            "url" => "string",
            "other" => "string",
            "description" => "string",
            "name" => "required|string",
            "email" => "required|email",
            "birthday" => "required|date", 
            "score" => "required|integer|between:0,100",
            "password" => "required|between:5,15",
            "address" => "required|string",
            "phone" => "required|size:10|isPhone", 
        ],[
            "name.required"=>"名稱必填",
            "email.email"=>"email格式錯誤",
            "email.required"=>"email必填",
            "birthday.required"=>"生日必填",
            "birthday.date"=>"生日格式錯誤", 
            "score.between"=>"分數0-100", 
            "score.required"=>"分數必填",
            "password.required"=>"密碼必填",
            "phone.required"=>"電話必填",
            "phone.size" => "電話錯誤", 
            "phone.isPhone" => "電話格式錯誤",  
            "address.string" => "地址格式錯誤", 

        ]);
        if ($vaildator->fails()) {
            $messages = $vaildator->messages();
            $data = [
                "status" => "422",
                "message" => $messages,
                "success" => !$vaildator->fails(),
            ];
            return response()->json($data, 422);
        } else {
            $custom = new Custom();
            $custom->name = $request->name;
            $custom->email = $request->email;
            $custom->address = $request->address?: "";
            $custom->url = $request->url?: "";
            $custom->other = $request->other?: "";;
            $custom->birthday = $request->birthday;
            $custom->description = $request->description?: "";
            $custom->score = $request->score;
            $custom->password = $request->password;
            $custom->phone = $request->phone; 
            $custom->save();
            $data = [
                "status" => 200,
                "message" => "success",
            ];
            return response()->json($data, 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function edit(Request $request ,$id)
    { 
        echo $id;
        //
        $vaildator = Validator::make($request->all(), [
            "url" => "string",
            "other" => "string",
            "description" => "string",
            "name" => "required|string",
            "email" => "required|email",
            "birthday" => "required|date", 
            "score" => "required|integer|between:0,100",
            "password" => "required|between:5,15",
            "address" => "required|string",
            "phone" => "required|size:10|isPhone", 
        ],[
            "name.required"=>"名稱必填",
            "email.email"=>"email格式錯誤",
            "email.required"=>"email必填",
            "birthday.required"=>"生日必填",
            "birthday.date"=>"生日格式錯誤", 
            "score.between"=>"分數0-100", 
            "score.required"=>"分數必填",
            "password.required"=>"密碼必填",
            "phone.required"=>"電話必填",
            "phone.size" => "電話錯誤", 
            "phone.isPhone" => "電話格式錯誤",  
            "address.string" => "地址格式錯誤", 

        ]);
        if ($vaildator->fails()) {
            $messages = $vaildator->messages();
            $data = [
                "status" => "422",
                "message" => $messages,
                "success" => !$vaildator->fails(),
            ];
            return response()->json($data, 422);
        } else {
            $custom = Custom::where('custom_id',$id)->first(); 
            $custom->name = $request->name;
            $custom->email = $request->email;
            $custom->address = $request->address?: "";
            $custom->url = $request->url?: "";
            $custom->other = $request->other?: "";;
            $custom->birthday = $request->birthday;
            $custom->description = $request->description?: "";
            $custom->score = $request->score;
            $custom->password = $request->password;
            $custom->phone = $request->phone; 
            $custom->save();
            $data = [
                "status" => 200,
                "message" => "success",
            ];
            return response()->json($data, 200);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        echo $id;
        $custom = Custom::where('custom_id',$id)->first(); 
        $custom->delete();
        $data=[
            "status"=> 200,
            "message"=> "success"
        ];
        return response()->json($data,200);
    }
}
