<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students data</title>
</head>

<body>
    @foreach ($students as $student)
        <li>
            {{ $student->first_name }} | {{ $student->last_name }} | {{ $student->age }} | {{ $student->email }}
        </li>
    @endforeach

    {{-- <label for="">Firstname:</label>
    <input type="text" value=" {{ $student->first_name }}">

    <br>
    <label for="">Lastname:</label>
    <input type="text" value=" {{ $student->last_name }}">
    <br>
    <label for="">Age:</label>
    <input type="text" value=" {{ $student->age }}">
 --}}

    {{-- 
  @foreach ($students as $student)
        <li>
            {{ $student-> $first_name }}  
        </li>
    @endforeach --}}



</body>

</html>
