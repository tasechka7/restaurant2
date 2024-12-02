@extends('layouts.app')

@section('title', ' News')

@section('main')
    <div class="banner-news">
        <h2>Our News</h2>
        <h1>Victoria’s Darlinghurst</h1>
        <p>COCKTAILS . LIVE MUSIC . RESTAURANT . EVENTS</p>
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
