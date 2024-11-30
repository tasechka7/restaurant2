@extends('layouts.guest')
@section('title', 'Add Drink')
@section('main')

    <form action="{{ route('drinks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Add New Drink</h1>
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ingredients Field -->
        <div>
            <label for="ingredients">Ingredients:</label>
            <textarea name="ingredients" id="ingredients" required></textarea>
            @error('ingredients')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price Field -->
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}" required>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Category Field -->
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" required>
                @foreach ($drink_categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Photo Field -->
        <div>
            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo">
            @error('photo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit">Create Drink</button>
    </form>
@endsection
