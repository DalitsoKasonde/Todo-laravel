<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
</head>
<body>
    @include('inc.navbar')
    @include('inc.messages')
    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center">Copyright &copy; 2020</footer>
</body>
</html>
