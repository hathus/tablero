<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tablero de Control</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            [x-cloak] { display: none; }
        </style>
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="absolute grid grid-cols-1 content-center h-screen w-full">
                <div class="flex items-center justify-center">
                    <img id="tlx_city" src="/img/ciudad.jpg" alt="{{$_ENV['APP_NAME']}}" class="hidden absolute w-full h-full inset-0 object-fill object-top"/>
                    <img id="tlx_logo" src="/img/escudo_02.png" alt="{{$_ENV['APP_NAME']}}" class="hidden absolute w-full h-full inset-0 object-fill object-top p-7"/>
                    <video id="opening" autoplay muted preload="auto" onended="onEnd()" class="absolute w-full h-full inset-0 object-cover object-top">
                        <source src="video/video_02.mp4" type="video/mp4">
                            Su navegador no soporta esta función.
                    </video>
                </div>
            </div>
       
            {{-- <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white z-10"> --}}
            <div class="relative flex flex-col items-center justify-between min-h-screen selection:text-white">
                    <header class="grid items-center justify-between w-full grid-cols-2 gap-2 p-5 py-8 lg:grid-cols-3 bg-[#3d2675] bg-opacity-80">
                        <div class="flex text-gray-200 font-bold lg:justify-center lg:col-start-2">
                            <a href="/" class="flex items-center flex-col md:flex-row">
                                <img src="/img/logo.png" alt="{{ $_ENV['APP_NAME'] }}" width="200px">
                                {{-- <p class="bold md:text-2xl"></p> --}}
                            </a>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            
                        </div>
                    </main>

                    <footer class="w-full py-10 text-center text-sm text-white">
                        Power by: Digital Family - Todos los derechos reservados - {{ date('Y') }}
                    </footer>
                    <script>
                        this.video = document.getElementById("opening");
                        this.img = document.getElementById("tlx_logo");
                        this.img1 = document.getElementById("tlx_city");

                        function onEnd() {
                            this.video.classList.add('hidden');
                            this.img.classList.remove('hidden');  
                            this.img1.classList.remove('hidden');  
                        }
                    </script> 
            </div>
        </div>
    </body>
</html>