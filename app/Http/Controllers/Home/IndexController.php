<?php
// https://laravel.tw/docs/5.2/controllers
// php artisan make:controller PhotoController --resource
namespace App\Http\Controllers;

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
        // $customers = Custom::orderBy('id', 'desc')->get();
        $customers = Custom::all();
        $data=[
            "status"=>200,
            "student"=>$customers
        ];
        return response()->json($data);
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

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function upload(Request $request)
    {
        // 
        $vaildator=Validator::make($request->all(), [ 
            "first_name"=>"required|string",
            "last_name"=>"required|string",
            "email"=>"required|email",
        ]);
        if($vaildator->fails()){
            $messages = $vaildator->messages();
            $data=[
                "status"=>"422",
                "message"=>$messages,
                "success"=>$vaildator->fails()
            ];
            return response()->json($data,422);
        }else{
            $custom=new Custom(); 
            $custom->first_name=$request->first_name;
            $custom->last_name=$request->last_name;
            $custom->email=$request->email;
            $custom->save();
            $data=[
                "status"=>200,
                "message"=>"success"
            ];
            return response()->json($data,200);
        }
    }
    public function edit(Request $request, $id){
        $vaildator=Validator::make($request->all(), [ 
            "first_name"=>"required|string",
            "last_name"=>"required|string",
            "email"=>"required|email",
        ]);
        if($vaildator->fails()){
            $messages = $vaildator->messages();
            $data=[
                "status"=>"422",
                "message"=>$messages,
                "success"=>$vaildator->fails()
            ];
            return response()->json($data,422);
        }else{
            $custom=Custom::find($id); 
            $custom->first_name=$request->first_name;
            $custom->last_name=$request->last_name;
            $custom->email=$request->email;
            $custom->save();
            $data=[
                "status"=>200,
                "message"=>"success update"
            ];
            return response()->json($data,200);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function delete($id)
    {
        $custom=Custom::find($id); 
        $custom->delete();
        $data=[
            "status"=> 200,
            "message"=> "success"
        ];
        return response()->json($data,200);
    }
}
