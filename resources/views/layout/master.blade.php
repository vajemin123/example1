<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','เว็บไซต์ของฉัน')</title>
</head>
<body>
    <a href="/">Home</a>| <a href="/about">About</a>|<a href="/contact">Contact</a>
    <hr>
    @yield('content')
    สงวนสิทธิ์ 2021 | Sirawud
</body>
</html>
