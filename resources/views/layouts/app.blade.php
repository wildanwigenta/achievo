<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- jika pakai Vite -->
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-start p-6">
    <div class="w-full max-w-2xl bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6">Todo List</h1>
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>
