<div class="cards">
    <div class="cards-container">
        @forelse ($news as $new)
            <div class="card">
                <img src="{{ asset('storage/' . $new->photo) }}" alt="{{ $new->name }}">
                <div class="description">
                    <h1>{{ $new->name }}</h1>
                    <p>{{ \Carbon\Carbon::parse($new->date)->format('d M Y') }}</p>
                    <p class="text">{{ $new->description }}</p>
                </div>
                <div class="buttons">
                    <a href="{{ route('news.edit', $new->id) }}">Edit</a>
                    <a href="{{ route('news.delete', $new->id) }}">Delete</a>
                </div>
            </div>
        @empty
            <p>No drinks found.</p>
        @endforelse
    </div>

</div>
