<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <title>Playground</title>
</head>
<body>
    <div>
        <x-header/>
    </div>

    <div>
        <x-sidebar/>
        <main class="relative ml-[255px]">
            <div class="p-4">
                {{ $slot }}
            </div>
        </main>
    </div>
    
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>