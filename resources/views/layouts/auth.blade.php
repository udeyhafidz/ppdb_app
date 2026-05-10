<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PPDB</title>
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        {{ $slot }}
    </div>
    @livewireScripts
</body>

</html>
