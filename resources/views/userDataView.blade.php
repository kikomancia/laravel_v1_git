
{{-- ARRAY DISPLAY --}}
{{-- @dd($usersData); --}}

{{-- BLADE APPROACH DISPLAYING DATA --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User information {{$name}} </title>
</head>
<body>
     <h1>
        {{$age}}
     </h1>

     <p>
        {{$address}}
     </p>

     <input type="text" value="{{$email}} ">
     <input type="text" value="{{$contact}} ">
</body>
</html>