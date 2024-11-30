@extends('layouts.guest')

@section('title', "Edit News")

@section('main')
    <h1>Edit News</h1>

    <form action="{{ route('news.update', $new->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name field with error handling -->
        <div>
            <label for="name">Title:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $new->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description field with error handling -->
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description', $new->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Photo field with error handling -->
        <div>
            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo">
            @error('photo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Date field with error handling -->
        <div>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{ old('date', $new->date) }}" required>
            @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
