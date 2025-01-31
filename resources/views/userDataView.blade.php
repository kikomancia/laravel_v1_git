{{-- ARRAY DISPLAY --}}
{{-- @dd($usersData); --}}

{{-- BLADE APPROACH DISPLAYING DATA --}}

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User information </title>
</head>

<body>
    <h1>{{ $name }}</h1>
    <h2>{{$title}}</h2>
    <h3>
        {{ $age }}
    </h3>

    <p>
        {{ $address }}
    </p>

    <input type="text" value="{{ $email }} ">
    <input type="text" value="{{ $contact }} ">
    <input type="text" value="{{ $dob }} ">

</body>

</html>
