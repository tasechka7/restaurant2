@extends('layouts.app')

@section('title', ' News')

@section('main')
    <div class="banner-news">
        <p>Our News</p>
        <h1>Victoria’s Darlinghurst</h1>
        <h3>COCKTAILS . LIVE MUSIC . RESTAURANT . EVENTS</h3>
    </div>
    <div class="mainNews">
        <div class="news">
            <livewire:news />
        </div>
        <div class="reservation">
            <livewire:reservation-form />
        </div>
    </div>
@endsection
