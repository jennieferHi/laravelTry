 {{-- <link rel="stylesheet" type="text/css" href="/css/app.css"> --}}
 <link rel="stylesheet" type="text/css" href="{{asset("css")}}/app.css">
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>表單提交</title>
 </head>
 <body>
    {{-- <form action="/home/test7" method="post"></form> --}}
    <form action="{{route('test8')}}" method="post">
        姓名:  <input type="text" name="name" value="" placeholder="請輸入姓名">
        <input type="submit" value="提交">
        {{-- {{csrf_token()}}只輸入token {{csrf_field()}} 輸出整個input隱藏域 --}}
        {{--  --}}
        <input type="hidden" value="{{csrf_token()}}" name="_token">
    </form>
    
 </body>
 </html>