<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Confirmation Page</title>
</head>

<body>
    <div class="min-h-screen">
        @include('navbar')
        <div class="h-screen border-2 flex flex-col justify-center items-center gap-10" style="background-image: url('{{ asset('assets/bg-confirmation.png') }}');">
            <img class="w-[200px] sm:w-[450px]" src="{{ asset('assets/image-confirmation.png') }}" alt="">
            <div class="flex flex-col items-center">
                <h1 class="text-[#293660] text-4xl font-bold">Thank You for Your Interest</h1>
                <p class="font-semibold text-[#6D6D6D]">Our team will contact you within 5 working days</p>
            </div>
            <button class="hover:bg-[#59ff50] bg-[#04BE02] font-semibold text-white py-2 px-4" onclick="window.location.href='{{ route('landing') }}'">BACK TO HOMEPAGE</button>
        </div>
        @include('footer')

    </div>
</body>

</html>
