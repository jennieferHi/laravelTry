<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @lang('http-statuses.400')
    @lang('validation.attributes.year')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
               {{ $dotPosition =  substr($error, strpos($error, '.') + 1);}}
               {{$dotPosition}}
         
       <li>@lang('validation.attributes.' . $dotPosition)</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/Auth/test5/t1" method="POST">
            <p>姓名: <input type="text" name="name" id="name"></p>
            <p>年齡: <input type="text" name="age" id="age"></p>
            <p>EMail: <input type="text" name="email" id="email"></p>
            {{ csrf_field() }}
            <p> <input type="submit" name="submit" value="送出" id="submit"></p>
        </form>
</body>

</html>
