@extends('layouts.app')

@section('title', 'Reservation')

@section('main')
    <div class="banner-reservation">
        <p>Reservation</p>
        <h1>Victoria’s Darlinghurst</h1>
        <h3>COCKTAILS . LIVE MUSIC . RESTAURANT . EVENTS</h3>
    </div>
    <div class="mainReservation">
        <div class="reservation">
            <livewire:reservation-form />
        </div>
    </div>
@endsection
