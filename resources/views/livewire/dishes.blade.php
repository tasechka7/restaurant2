<div class="cards">

    <div class="category-buttons">      
        @foreach ($categories as $category)
            <button wire:click="selectCategory({{ $category->id }})" class="btn {{ $selectedCategory == $category->id ? 'btn-primary' : 'btn-secondary' }}">
                {{ $category->name }}
            </button>
        @endforeach
    </div>


    <div class="cards-container">
        @forelse ($menus as $menu)
            <div class="card">
                <img src="{{ asset('storage/' . $menu->photo) }}" alt="{{ $menu->name }}">
                <div class="description">
                    <h1>{{ $menu->name }}</h1>
                    <p><span>Category: </span> {{ $menu->category->name }}</p>
                    <p><span>Ingredients: </span> {{ $menu->ingredients }}</p>
                    <div class="price">
                        <p><span>Weight: </span> {{ $menu->weight }}gr</p>
                        <p><span>Price: </span> {{ $menu->price }} <span>MDL</span></p>
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
