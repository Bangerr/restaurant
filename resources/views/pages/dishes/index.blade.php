<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Electrolize&family=Kode+Mono:wght@400..700&family=Slackside+One&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/44b694a7ec.js" crossorigin="anonymous"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="w-3/4 mx-auto h-full">
    <x-navbar />

    <div class="w-full mx-auto mt-5">

        <div class="flex flex-row gap-x-5 ">

            @foreach ($dishes as $dish)
                <div class="flex border w-[200px] justify-start ">
                    <x-dish.index :dish="$dish" />
                </div>
            @endforeach

        </div>
    </div>

    <x-footer></x-footer>
</body>

</html>
