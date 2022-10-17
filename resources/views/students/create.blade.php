<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create Students</h2>
    <form action="/students/create" method="post">
        @csrf
        <label for="fullname">
            Fullname:
            <input type="text" name="fullname">
        </label><br><br>
        <label for="address">
            Address:
            <input type="text" name="address">
        </label><br><br>
        <label for="date">
            Date:
            <input type="date" name="date">
        </label><br><br>
        <button type="submit">Create Students</button>
    </form>
</body>
</html>
