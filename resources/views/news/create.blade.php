@extends('layouts.guest')

@section('title', "Create News")

@section('main')
    <h1>Add New news</h1>
    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div>
            <label for="name">News Title:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <div>
            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo">
            @error('photo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <div>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}">
            @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <button type="submit">Create News</button>
    </form>
    
@endsection
