@extends('layouts.guest')

@section('title', "Dashboard")
@section('main')
<h1>Reservations</h1>
<div class="links">
    <a href="{{ route('reservations.index') }}">More Reservations</a>
</div>
<livewire:reservation />
<h1>Dishes</h1>
<div class="links">
    <a href="{{ route('menus.create') }}">Create Dish</a>
    <a href="{{ route('menus.index') }}">More Dishes</a>
</div>
<livewire:dishes />
<h1>Dishes Categories</h1>
<div class="links">
    <a href="{{ route('categories.menu.create') }}">Create Dish Category</a>
    <a href="{{ route('categories.menu.index') }}">More Dishes Categories</a>
</div>
<livewire:dishes-category />
<h1>Drinks</h1>
<div class="links">
    <a href="{{ route('drinks.create') }}">Create Drinks </a>
    <a href="{{ route('drinks.index') }}">More Drinks </a>
</div>
<livewire:drinks />
<h1>Drinks Categories</h1>
<div class="links">
    <a href="{{ route('categories.drinks.create') }}">Create Drinks Category</a>
    <a href="{{ route('categories.drinks.index') }}">More Drinks Categories</a>
</div>
<livewire:drink-category />
<h1>News</h1>
<div class="links">
    <a href="{{ route('news.create') }}">Create News</a>
    <a href="{{ route('news.index') }}">More News</a>
</div>
<livewire:news />
@endsection
