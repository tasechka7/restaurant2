@extends("layouts.guest")

@section("title", "Categories")

@section("main")
<h1>Dish Categories</h1>
<div class="links">
    <a href="{{ route('categories.menu.create') }}">Create Dish Category</a>
</div>
    <livewire:dishes-category />

@endsection