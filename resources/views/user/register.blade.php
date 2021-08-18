<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Add a user</title>
</head>
<body>
    <div class="continar">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/store_user">
                @csrf
                Name: <input type="text" name ='name' value="{{old('name')}}" class="form-control"><br/>
                {{-- @error('name')
                <span class="alert alert-danger">{{ $message }}</span>
                 @enderror --}}
            
                Email: <input type="text" name ='email' value="{{old('email')}}" class="form-control"><br/>
                password: <input type="password" name ='password'class="form-control"><br/>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
</body>
</html>