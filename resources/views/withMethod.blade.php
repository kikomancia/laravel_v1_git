<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> -> WITH() METHOD</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;

        }
       
    </style>

</head>

<body>
    <h1 class="redme">{{ $title }}</h1>

    <p>I am using -> with method to call data from the controller</p>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>address</th>
            <th>email</th>
        </tr>
        <tr>
            <td>{{ $id }}</td>
            <td>{{ $name }}</td>
            <td>{{ $age }}</td>
            <td>{{ $address }}</td>
            <td>{{ $email }}</td>
        </tr>

    </table>
</body>

</html>
