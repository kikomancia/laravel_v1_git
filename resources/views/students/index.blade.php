<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students data</title>
</head>

<body>
    <h1>STUDENTS DATA AND INFORMATIONS</h1>

    @foreach ($students as $student)
        <li>
            {{ $student->first_name }}  {{ $student->last_name }}  {{ $student->age }}
        </li>
    @endforeach


</body>

</html>
