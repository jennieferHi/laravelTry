<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <title>Document</title>


</head>

<body>
    <input type="button" value="點我" id="btn">

</body>
<script>
$(function() {
    $("#btn").click(() => {
        $.get("/View/test2/t1", function(data) {
            console.log(data);
        }, 'json');
    });
});

</script>

</html>
