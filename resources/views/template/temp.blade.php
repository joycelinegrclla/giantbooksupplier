<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
@vite(['resources/js/app.js'])
<body class="d-flex flex-column" style="min-height:100vh; overflow-x: hidden;">
    @include('template/navbar')
    @yield('content')
    @include('template/footer')
</body>
</html>