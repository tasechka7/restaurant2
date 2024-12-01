@extends('layouts.app')

@section('title', 'Menu')

@section('main')
    <div class="banner-drink">
        <p>Menu</p>
        <h1>Drink</h1>
    </div>
    <div class="mainDrink">
        <div class="menu">
            <livewire:drinks />
        </div>
        <div class="reservation">
            <livewire:reservation-form />
        </div>
    </div>
@endsection
