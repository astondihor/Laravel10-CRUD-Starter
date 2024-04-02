<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Laravel 10 CRUD Starter' }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="antialiased bg-blue-50/50">
    {{ $slot }}
</body>
</html>
