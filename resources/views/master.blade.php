<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    @vite(['resources/scss/app.scss'])
    <title>SystemBook</title>
</head>
<body>
    <div class="sidebar">
        <a href="">Books</a>
        <a href="">About</a>
        <a href="">Register</a>
        <a href="">Login</a>
    </div>
    <hr>
    <div class="container">
        @yield('home')
    </div>
</body>
</html>