<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List users</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Fullname</td>
            <td>Address</td>
            <td>Date</td>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->fullname }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->date }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
