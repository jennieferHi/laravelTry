<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/ORM/test1/t1" method="POST">
        <p>姓名: <input type="text" name="name" id="name"></p>
        <p>年齡: <input type="text" name="age" id="age"></p>
        <p>EMail: <input type="text" name="email" id="email"></p>
        {{csrf_field()}}
        <p> <input type="submit" name="submit" value="送出" id="submit"></p>
    </form>
</body>
</html>