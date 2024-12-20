<div class="cards">

    <div class="category-buttons">      
        @foreach ($categories as $category)
            <button wire:click="selectCategory({{ $category->id }})" class="btn {{ $selectedCategory == $category->id ? 'btn-primary' : 'btn-secondary' }}">
                {{ $category->name }}
            </button>
        @endforeach
    </div>
    <div class="name-category">
        <h1>{{ $categories->firstWhere('id', $selectedCategory)->name }}</h1>
    </div>

    <div class="cards-container">
        @forelse ($drinks as $drink)
            <div class="card">
                <img src="{{ asset('storage/' . $drink->photo) }}" alt="{{ $drink->name }}">
                <div class="description">
                    <div class="text">
                    <h1>{{ $drink->name }}</h1>
                    <p id="category"><span>Category: </span> {{ $drink->category->name }}</p>
                    <p><span>Ingredients: </span> {{ $drink->ingredients }}</p>
                </div>
                    <div class="price">
                        <p><span>Price: </span> {{ $drink->price }} MDL</p>
                    </div>
                </div>
                <div class="buttons">
                    <a href="{{ route('drinks.edit', $drink->id) }}">Edit</a>
                    <a href="{{ route('drinks.delete', $drink->id) }}">Delete</a>
                </div>
            </div>
        @empty
            <p>No drinks found.</p>
        @endforelse
    </div>

</div>
