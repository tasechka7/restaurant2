@extends('layouts.guest')

@section('main')
    <h1>Edit Reservation</h1>

    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name field with error handling -->
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $reservation->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Phone field with error handling -->
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $reservation->phone) }}" required>
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email field with error handling -->
        <div>
            <label for="number_of_people">number_of_people</label>
            <input type="number" name="number_of_people" id="number_of_people" value="{{ old('number_of_people') }}">
            @error('number_of_people') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Message field with error handling -->
        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" >{{ old('message', $reservation->message) }}</textarea>
            @error('message')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Reservation Type field with error handling -->
        <div>
            <label for="reservation_type">Reservation Type:</label>
            <select name="reservation_type" id="reservation_type" required>
                @foreach($reservationTypes as $type)
                    <option value="{{ $type }}" {{ old('reservation_type', $reservation->reservation_type) === $type ? 'selected' : '' }}>
                        {{ ucfirst($type) }}
                    </option>
                @endforeach
            </select>
            @error('reservation_type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <!-- Date field with error handling -->
        <div>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{ old('date', $reservation->date) }}" required>
            @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Time field with error handling -->
        <div>
            <label for="time">Time:</label>
            <input type="time" name="time" id="time" value="{{ old('time', $reservation->time) }}" required>
            @error('time')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Status field with error handling -->
        <div>
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="in_processing" {{ old('status', $reservation->status) === 'in_processing' ? 'selected' : '' }}>
                    In Processing
                </option>
                <option value="confirmed" {{ old('status', $reservation->status) === 'confirmed' ? 'selected' : '' }}>
                    Confirmed
                </option>
            </select>
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Photo field (optional) -->

        <button type="submit">Update</button>
    </form>
@endsection
