<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Hanken+Grotesk:ital,wght@0,100..600;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-main text-white font-hanken">
<div class="px-10 ">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a>
                <img src="{{Vite::asset("resources/images/logo.svg")}}" alt="">
            </a>
        </div>

        <div class="flex space-x-6 font-bold items-center">
            <a href="">Job</a>
            <a href="">Career</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>

        <div>
            <a>Post a job</a>
        </div>

    </nav>


    <main class="mt-10 max-w-[986px] mx-auto">
        {{$slot}}
    </main>
</div>



</body>
</html>
