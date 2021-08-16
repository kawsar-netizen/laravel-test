<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From testing</title>
</head>
<body>
    <form action="/user_delete" method="post">
        @csrf
        @method('DELETE')
        <input type="text" name="name"><br/><br/>
        <input type="submit" value="save">

    </form>
</body>
</html>