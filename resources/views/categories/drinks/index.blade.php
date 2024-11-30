@extends("layouts.guest")

@section("title", "Categories")

@section("main")
<h1>Drinks Categories</h1>
<div class="links">
    <a href="{{ route('categories.drinks.create') }}">Create Drink Category</a>
</div>
    <livewire:drink-category />

@endsection