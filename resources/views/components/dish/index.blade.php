<div class="relative flex flex-col gap-3 p-2 hover:cursor-pointer hover:scale-105 animate duration-150">
    <h2 class="text-xl inline-flex p-2">
        <p class="">Dish name: </p>{{ $dish->title() }}
    </h2>
    <div class="dish-card p-2">
        <p>{{ Str::limit($dish->description, 200) }}</p>
        <img class="absolute top-0 left-0 h-full w-full object-cover p-2 -z-40" src="{{ $dish->image_path }}"
            alt="{{ $dish->title }}" width="100px" height="100px" loading="lazy">
        <p class="">{{ $dish->instructions }}</p>
    </div>

</div>
