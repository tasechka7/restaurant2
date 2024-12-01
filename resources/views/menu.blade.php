@extends('layouts.app')

@section('title', 'Menu')

@section('main')
    <div class="banner-food">
        <p>Menu</p>
        <h1>Food</h1>
    </div>
    <div class="mainMenu">
        <div class="menu">
            <livewire:dishes />
        </div>
        <div class="reservation">
            <livewire:reservation-form />
        </div>
    </div>
@endsection
