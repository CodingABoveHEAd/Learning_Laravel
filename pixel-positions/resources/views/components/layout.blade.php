<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-black text-white">
    <div class="px-10">

       <nav class="flex justify-between items-center py-4
       border-b border-white/10">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="logo">
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>
        <div>
            <a href="">Post a job</a></div>
        </nav>


        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main> 

    </div>
</body>
</html>