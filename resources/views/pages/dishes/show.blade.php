@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-4">
        <div class="relative flex flex-col gap-3 p-2">
            <h1 class="text-2xl font-bold">Recipe: Details</h1>
            <h2 class="text-2xl font-semibold">
                {{ $dish->title() }}
            </h2>

            <div class="dish-detail">
                <div class="relative aspect-video mb-4">
                    <img class="w-full h-full object-cover rounded-lg" src="{{ $dish->image_path }}" alt="{{ $dish->title }}"
                        loading="lazy">
                </div>

                <div class="space-y-4">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Description</h3>
                        <p class="text-gray-700">{{ $dish->description }}</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-2">Instructions</h3>
                        <p class="text-gray-700">{{ $dish->instructions }}</p>
                    </div>
                </div>
            </div>

            <a href="{{ route('dishes.index') }}" class="inline-flex items-center mt-4 text-blue-600 hover:underline">
                ← Back to all dishes
            </a>
        </div>
    </div>
@endsection
