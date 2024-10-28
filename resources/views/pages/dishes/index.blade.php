<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="w-3/4 mx-auto">
    <x-navbar />

    <div class="w-1/2 mx-auto">

        <div class="grid grid-cols-2">

            @foreach ($dishes as $dish)
                <div class="border w-[200px]">
                    <x-dish.index :dish="$dish" />
                </div>
            @endforeach

        </div>
    </div>

    <x-footer></x-footer>
</body>

</html>
