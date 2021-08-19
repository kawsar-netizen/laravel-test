<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file upload</title>
</head>
<body>
    <form action="/file_store" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="image">
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>