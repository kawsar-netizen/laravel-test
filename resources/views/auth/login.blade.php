<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
<form action="/login" method="post">
    @csrf
    Email: <input type="email" name="email"><br/><br/>
    Password: <input type="password" name="password"><br/><br/>
    <input type="submit" value="Login">
</form>
</body>
</html>