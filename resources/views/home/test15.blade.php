<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
          <style>
        .pagination {
            display:flex;
        }
        .pagination li{
            text-decoration: none;
         list-style-type: none;
        }
 
        .pagination a ,.pagination span{
            border-left: 1px solid black;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            font-weight: bold;
            font-size: 20px;
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }
        .pagination li:last-child a ,.pagination li:last-child span{
            border-right: 1px solid black;
        }
 
        .pagination a.active {
            background-color: #009900;
        }
 
        .pagination a:hover:not(.active) {
            background-color: #d4d5d2;
        }
 
        .GFG {
            font-size: 42px;
            font-weight: bold;
            color: #009900;
            margin-left: 100px;
            margin-bottom: 60px;
        }
 
        .peg {
            font-size: 24px;
            font-weight: bold;
            margin-left: 90px;
            margin-bottom: 20px;
        }
    </style>
    </style>
</head>

<body>
    <table style="border:1px solid black">
        <thead>
            <tr>
                <th>id</th>
                <th>名字</th>
                <th>年齡</th>
                <th>EMail</th>
                <th>相片</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->email}}</td>
                    <td><img src="{{ltrim($item->avatar,".")}}" width="80px" alt="頭像" srcset=""></td>
                </tr>
            @endforeach
       
        </tbody>
    </table>
  
        {{-- {{$result->links('pagination::bootstrap-5')}}  --}}
        {{$result->links('pagination::default')}}  
 
</body>

</html>
