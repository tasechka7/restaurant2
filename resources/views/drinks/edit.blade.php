@extends('layouts.guest')

@section('title', "Edit Drink")

@section('main')
    <h1>Edit Drink</h1>

    <form action="{{ route('drinks.update', $drink->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name Field -->
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $drink->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>

        <!-- Ingredients Field -->
        <div>
            <label for="ingredients">Ingredients:</label>
            <textarea name="ingredients" id="ingredients" required>{{ old('ingredients', $drink->ingredients) }}</textarea>
            @error('ingredients')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>

        <!-- Price Field -->
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" value="{{ old('price', $drink->price) }}" required>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>

        <!-- Category Field -->
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" required>
                @foreach ($drinks_categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ old('category_id', $drink->category_id) == $category->id ? 'selected' : '' }}>
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
        <br>

        <button type="submit">Update Drink</button>
    </form>
@endsection
