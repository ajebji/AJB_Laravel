<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A_JB Laravel</title>
    <link rel="icon" href="{{ asset('storage/assets/favicon.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @yield('styles')
</head>

<body>
    @yield('content')
    @yield('scripts')
</body>

</html>
