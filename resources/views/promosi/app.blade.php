<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4 text-white flex justify-between">
        <a href="{{ route('promosi.index') }}" class="font-bold">Home</a>
        <a href="{{ route('promosi.create') }}" class="ml-4">Add Promotion</a>
    </nav>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-center">Promotion</h1>
        @yield('content')
    </div>
</body>
</html>
