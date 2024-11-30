<div class="cards">
    <div class="cards-container">
        @forelse ($reservations as $reservation)
            <div class="card">
                <div class="description">
                    <h1>{{ $reservation->name }}</h1>
                    <p>{{ $reservation->phone }}</p>
                    <p>{{ $reservation->email }}</p>
                    <p>{{ $reservation->message }}</p>
                    <p>{{ $reservation->date }}</p>
                    <p>{{ $reservation->time }}</p>
                    <p>{{ $reservation->reservation_type }}</p>
                    
                    <!-- Выпадающее меню для статуса -->
                    <form action="{{ route('reservations.updateStatus', $reservation->id) }}" method="POST" class="status-form">
                        @csrf
                        @method('PATCH')
                        <select name="status" onchange="this.form.submit()">
                            <option value="in_processing" {{ $reservation->status === 'in_processing' ? 'selected' : '' }}>
                                In Processing
                            </option>
                            <option value="confirmed" {{ $reservation->status === 'confirmed' ? 'selected' : '' }}>
                                Confirmed
                            </option>
                        </select>
                    </form>
                </div>
                <div class="buttons">
                    <a href="{{ route('reservations.edit', $reservation->id) }}">Edit</a>
                    <a href="{{ route('reservations.delete', $reservation->id) }}">Delete</a>
                </div>
            </div>
        @empty
            <p>No reservations found.</p>
        @endforelse
    </div>
</div>
