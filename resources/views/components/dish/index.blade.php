<div class="flex flex-col gap-3 p-2">
    <h2 class="text-xl inline-flex">
        <p class="">Dish name: </p>{{ $dish->title() }}
    </h2>
    <div class="dish-card">
        <p>{{ $dish->description }}</p>
        <img src="{{ $dish->image_path }}" alt="{{ $dish->title }}">
        <p class="w-[65ch] whitespace-nowrap truncate overflow-hidden">{{ $dish->instructions }}</p>
    </div>

</div>
