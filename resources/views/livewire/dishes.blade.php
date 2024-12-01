<div class="cards">

    <div class="category-buttons">
        @foreach ($categories as $category)
            <button wire:click="selectCategory({{ $category->id }})"
                class="btn {{ $selectedCategory == $category->id ? 'btn-primary' : 'btn-secondary' }}">
                {{ $category->name }}
            </button>
        @endforeach
    </div>
    <div class="name-category">
        <h1>{{ $categories->firstWhere('id', $selectedCategory)->name }}</h1>
    </div>

    <div class="cards-container">
        @forelse ($menus as $menu)
            <div class="card">
                <img src="{{ asset('storage/' . $menu->photo) }}" alt="{{ $menu->name }}">
                <div class="description">
                    <div class="text">
                        <h1>{{ $menu->name }}</h1>
                        <p id="category"><span>Category: </span> {{ $menu->category->name }}</p>
                        <p><span>Ingredients: </span> {{ $menu->ingredients }}</p>
                    </div>
                    <div class="price">
                        <p id="weight"><span>Weight: </span> {{ $menu->weight }} gr</p>
                        <p><span>Price: </span> {{ $menu->price }} MDL</p>
                    </div>
                </div>
                <div class="buttons">
                    <a href="{{ route('menus.edit', $menu->id) }}">Edit</a>
                    <a href="{{ route('menus.delete', $menu->id) }}">Delete</a>
                </div>
            </div>
        @empty
            <p>No dishes found.</p>
        @endforelse
    </div>

</div>
