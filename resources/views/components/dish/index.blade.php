<div class="border-2 w-[200px]">
    <h2>{{ $dish->title() }}</h2>
    <div class="dish-card">
        <h2>{{ $dish->title }}</h2>
        <p>{{ $dish->description }}</p>
        <img src="{{ $dish->image_path }}" alt="{{ $dish->title }}">
        <p>{{ $dish->instructions }}</p>
    </div>

</div>
