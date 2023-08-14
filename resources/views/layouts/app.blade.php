<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/958e2e8e4c.js" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-dark text-light">
<div class="container">
    @yield('content')
</div>
</body>
</html>