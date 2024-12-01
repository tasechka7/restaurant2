@extends('layouts.app')

@section('title', 'Home')

@section('main')
    <div class="banner">
        <h2>Welcome To</h2>
        <h1>Victoria’s Darlinghurst</h1>
        <p>COCKTAILS . LIVE MUSIC . RESTAURANT . EVENTS</p>
    </div>
    <div class="home">
        <div class="navigation">
            <div class="title">
                <p>Features</p>
                <h1>WHAT’S ON</h1>
            </div>
            <div class="cards">
                <a href="{{ route('menu') }}">
                    <img src="/images/menu.png" alt="">
                    <h1>Restaurant</h1>
                </a>
                <a href="{{ route('drink') }}">
                    <img src="/images/bar.png" alt="">
                    <h1>Bar & Lounge</h1>
                </a>
                <a href="{{ route('ourNews') }}">
                    <img src="/images/news.png" alt="">
                    <h1>News</h1>
                </a>
            </div>
        </div>
        <div class="about">
            <div class="card">
                <img src="/images/about1.png" alt="">
            </div>
            <div class="card">
                <h2>About Us</h2>
                <h1>VICTORIA’S STORY</h1>
                <p>A deep dive into decadence, sophisticated, refined
                    and dripping with chandeliers,for intimate cocktail,
                    inspired dining and an extraordinary wine list, with
                    live ambience, from blues to burlesque, and curated
                    private experiences.</p>
                <a href="{{ route('about') }}">Read More</a>
            </div>
            <div class="card">
                <img src="/images/about2.png" alt="">
            </div>
        </div>
        <div class="menu">
            <div class="title">
                <p>More At Victoria’s</p>
                <h1>Check Our Menu</h1>
            </div>
            <div class="images">
                <a href="{{ route('menu') }}" class="image">
                </a>
                <a href="{{ route('menu') }}" class="image">
                    <h1>Food Menu</h1>
                </a>
                <a href="{{ route('drink') }}" class="image">
                    <h1>Drinks Menu</h1>
                </a>
                <a href="{{ route('drink') }}" class="image">
                </a>
            </div>
        </div>
        <div class="news">
            <div class="title">
                <p>Our Lateste News</p>
                <h1>Check Our Blogs</h1>
            </div>
            <livewire:news-slider />
            <div class="link"><a href="">More News</a></div>
        </div>
        <div class="reservation">
            <livewire:reservation-form />
        </div>
    </div>
    
@endsection
