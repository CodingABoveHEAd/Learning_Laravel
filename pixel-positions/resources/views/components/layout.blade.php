<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white pb-20">
    <div class="px-10">

        <nav class="flex justify-between items-center py-4
       border-b border-white/10">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="logo">
                </a>
            </div>


            @auth
                <div class="space-x-6 flex font-bold ">
                    <a href="/jobs/create">Post a job</a>
                   
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button class="cursor-pointer">Logout</button>
                    </form>

                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>

                </div>
            @endguest

        </nav>


        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>

    </div>
</body>

</html>
