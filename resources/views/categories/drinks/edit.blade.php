@extends('layouts.guest')

@section('title', 'Edit Category')

@section('main')
    <form action="{{ route('categories.drinks.update', $drink_category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1>Edit Category</h1>
        <!-- Name field with error handling -->
        <div>
            <label for="name">Title:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $drink_category->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
