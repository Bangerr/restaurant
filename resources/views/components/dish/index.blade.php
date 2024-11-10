<div class="relative flex flex-col gap-3 p-2 hover:cursor-pointer hover:scale-105 animate duration-150 border rounded-md border-black"
    onclick="window.location.href='{{ route('dishes.show', $dish->id) }}'">
    <h2 class="text-xl inline-flex p-2 mt-3">
        <p class="">Dish name: </p>{{ $dish->title() }}
    </h2>
    <div class="dish-card p-2">
        <p><span class="font-bold">Description:</span> {{ Str::limit($dish->description, 200) }}</p>
        <img class="absolute top-0 left-0 h-full w-full object-cover p-2 -z-40" src="{{ $dish->image_path }}"
            alt="{{ $dish->title }}" width="100px" height="100px" loading="lazy">
        <p class=""> <span class="font-bold">Instructions:</span>{{ Str::limit($dish->instructions, 200) }}</p>
    </div>

</div>
