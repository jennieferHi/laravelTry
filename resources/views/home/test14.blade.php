<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>  
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error) 
                  
                    {{-- <li>    @lang('validation.attributes.'.substr($error, strpos($error, '.') + 1)) </li> --}}
                    <li>    @lang($error) </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/File/test1/t1" method="POST" enctype="multipart/form-data">
        <p>姓名: <input type="text" name="name" id="name"></p>
        <p>年齡: <input type="text" name="age" id="age"></p>
        <p>EMail: <input type="text" name="email" id="email"></p>
        <p>圖: <input type="file" name="avatar" id="avatar"></p>
        <p>驗證碼: <input type="text" name="captcha" id="captcha"><img src="{{ captcha_src() }}" alt=""
                srcset=""></p>
        {{ csrf_field() }}
        <p> <input type="submit" name="submit" value="送出" id="submit"></p>
    </form>
</body>

</html>
