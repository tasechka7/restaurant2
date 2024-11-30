@extends('layouts.guest')
@section('title', 'Drinks')

@section('main')
    <h1>Drinks</h1>
    <div class="links">
        <a href="{{ route('drinks.create') }}">Create Drink</a>
    </div>
    <livewire:drinks />
@endsection
