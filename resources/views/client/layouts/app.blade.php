<!doctype html>
<html data-theme="cupcake" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name', '@MyStories'))</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    @include('client.partial.header')
    @yield('content')
</body>
</html>
