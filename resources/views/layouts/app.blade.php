<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Achievo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-purple-100 min-h-screen flex justify-center items-start p-6">
    <div class="w-full max-w-3xl bg-white shadow-2xl rounded-2xl p-8">
        @yield('content')
    </div>
    @livewireScripts
</body>
</html>
