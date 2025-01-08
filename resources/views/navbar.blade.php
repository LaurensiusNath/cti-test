<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @vite('resources/css/app.css')
    <title>Navbar</title>
</head>

<body>
    <nav class="w-full flex flex-col relative">
        <div class="w-full py-1 flex gap-2 justify-end items-center h-10 px-20 bg-[#00008E]">
            <a class="text-white font-black hover:text-gray-400" href="">ID</a>
            <span class="text-white font-bold"> | </span>
            <a class="text-white font-bold hover:text-gray-400" href="">EN</a>
        </div>
        <div class="flex gap-5 px-20 py-6 shadow-md items-center bg-gradient-to-b from-[#F9FAFE] to-[#F9FAFE] w-full">
            <a href="{{ route('landing') }}"><img class="h-8 w-auto md:h-10 lg:h-12" src="{{ asset('assets/logo-helios.png') }}" alt=""></a>
            <a href="{{ route('landing') }}"><img class="h-8 w-auto md:h-10 lg:h-12" src="{{ asset('assets/logo-sangfor.png') }}" alt=""></a>
        </div>
    </nav>

</body>

</html>
