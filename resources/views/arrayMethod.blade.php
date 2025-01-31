<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USING ARRAY METHOD</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <P> I am using array method to display and fetch data from the controller.</P>
    <p> function name is - showArrayData()</p>

    <table>
        <tr>
            <th>NAME</th>
            <th>AGE</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
        </tr>
        <tr>
            <td>{{ $name }}</td>
            <td>{{ $age }}</td>
            <td>{{ $address }}</td>
            <td>{{ $email }}</td>
        </tr>

    </table>

</body>

</html>
