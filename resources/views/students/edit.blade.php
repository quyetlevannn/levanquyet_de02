<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Create user</h2>
    <form action="/students/update/{{ $students->id }}" method="post">
        @csrf
        <label for="fullname">
            Name:
            <input type="text" name="fullname" value="{{ $students->fullname }}">
        </label><br><br>
        <label for="address">
            Address:
            <input type="text" name="address" value="{{ $students->address }}">
        </label><br><br>
        <label for="date">
            Date:
            <input type="date" name="date" >
        </label><br><br>
        <button type="submit">Edit Student</button>
    </form>

</body>
</html>
