@extends('layouts.guest')

@section('title', 'Dishes')

@section('main')
    <h1>Dishes</h1>
    <div class="links">
        <a href="{{ route('menus.create') }}">Create Dish</a>
    </div>
    <livewire:dishes />
@endsection
