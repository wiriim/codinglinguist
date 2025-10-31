<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CodingLinguist</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   @yield('content')
   <div class="loading-bg d-none"></div>
</body>
</html>