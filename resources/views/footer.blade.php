<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Footer</title>
</head>

<body>
    <footer class="relative left-0 bottom-0">
        <div class="flex flex-col py-7 px-28 bg-cover bg-center" style="background-image: url('{{ asset('assets/bg-footer.png') }}');">
            <div class="flex flex-col md:flex-row justify-between items-center gap-14">
                <div class="flex flex-col gap-10 items-center md:items-start">
                    <h2 class="text-white font-bold">PT. Helios Informatika Nusantara</h2>
                    <p class="text-white text-center md:text-start">
                        Centennial Tower, 12th Floor, No. Kav 24-25, Jakarta 12930 Indonesia
                    </p>
                    <div>
                        <p class="text-white"><span class="font-bold">Phone:</span> +62 21 8062 2220</p>
                        <p class="text-white"><span class="font-bold">Email:</span> Tencent@helios.id</p>
                    </div>
                    <div class="flex gap-4">
                        <a class="w-8" href="">
                            <img src="{{ asset('assets/fb-icon.png') }}" alt="">
                        </a>
                        <a class="w-8" href="">
                            <img src="{{ asset('assets/ig-icon.png') }}" alt="">
                        </a>
                        <a class="w-8" href="">
                            <img src="{{ asset('assets/twitter-icon.png') }}" alt="">
                        </a>
                        <a class="w-8" href="">
                            <img src="{{ asset('assets/yt-icon.png') }}" alt="">
                        </a>
                        <a class="w-8" href="">
                            <img src="{{ asset('assets/linkedin-icon.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('assets/worldmap.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="flex gap-1 items-center justify-center bg-[#000A85] py-2">
            <span class="text-white">&copy;</span>
            <p class="text-white">2023 - PT. Helios Informatika Nusantara - All Right Reserved</p>
        </div>
    </footer>
</body>

</html>
