@extends('layouts.guest')

@section('title', "Add Dish")

@section('main')
    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Add New Dish</h1>
        <!-- Name Field -->
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
            <textarea name="ingredients" id="ingredients">{{ old('ingredients') }}</textarea>
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

        <!-- Weight Field -->
        <div>
            <label for="weight">Weight:</label>
            <input type="number" name="weight" id="weight" value="{{ old('weight') }}" required>
            @error('weight')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Category Field -->
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" required>
                @foreach ($menu_categories as $category)
                    <option value="{{ $category->id }}" 
                        >
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
        <button type="submit">Create Dish</button>
    </form>
@endsection
