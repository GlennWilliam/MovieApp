<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>
    @vite('resources/css/app.css')
    @livewireStyles

    <script src="//unpkg.com/alpinejs" defer></script>



</head>
<body class="font-sans bg-gray-200 text-black">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-16 flex flex-col md:flex-row items-center justify-between px-16 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('index') }}" class="text-2xl font-bold">
                        Movie App
                    </a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                @livewire('search-dropdown')

                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">

                    </a>
                </div>

            </div>
        </div> 
    
    </nav>
    @yield('content')
    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>

    <footer class="bg-gray-500 text-white text-center py-4">
        <p>&copy; 2023 Movie App. All rights reserved.</p>
    </footer>
    
</body>
</html>

