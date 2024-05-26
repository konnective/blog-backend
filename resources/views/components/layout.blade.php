<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d',
                    },
                },
            },
        }
    </script>
    <title>The Mentor</title>
</head>

<body class="">
    <nav class="navd z-30 flex justify-between items-center p-6  bg-orange-400">
        <a href="{{ env('APP_URL') }}"><span class="text-black">The Mentor</span></a>
        {{-- <a href="/"><img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" /></a> --}}
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>Manage
                        Listings</a>
                </li>
                <li>
                    <form class="inline text-white" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ env('APP_URL') }}/daily_cycles" class="hover:text-laravel">Daily Cycles</a>
                </li>
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>


    <div class="flex z-20 h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 flex-shrink-0">
            <!-- Sidebar content -->
            <div class="p-4">
                <!-- Sidebar items -->
                <a href="{{ route('intro') }}"
                    class="block text-center py-2 px-4 hover:bg-gray-700 {{ Request::is('intro') ? 'bg-gray-700' : '' }} ">Intro
                    Section</a>
                <a href="{{ route('blogs') }}"
                    class="block text-center py-2 px-4 hover:bg-gray-700  {{ Request::is('blogs') ? 'bg-gray-700' : '' }}">Blogs
                    Section</a>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex-1 bg-gray-200">
            <!-- Content here -->
            {{-- <div class="p-4">
                <h1>Main Content</h1>
                <p>This is the main content area.</p>
            </div> --}}

            <main>
                {{ $slot }}
            </main>

            {{-- 
            <footer
                class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel z-10 text-white h-24 mt-24 opacity-90 md:justify-center">
                <p class="ml-2">Designed by &copy; Kj</p>

                <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
            </footer> --}}

        </div>
    </div>
    <x-flash-msg />
</body>

</html>
