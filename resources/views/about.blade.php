@extends('layouts.app')

@section('title', 'About')

@section('main')
    <div class="bannerAbout">
        <h2>About Us</h2>
        <h1>Victoria’s Darlinghurst</h1>
        <p>COCKTAILS . LIVE MUSIC . RESTAURANT . EVENTS</p>
    </div>
    <div class="aboutMain">
        <div class="description">
            <img src="/images/chef.svg" alt="">
            <div class="text">
                <h3>The Best Place To Be</h3>
                <h1>THE SECRET OF OUR SUCCESS</h1>
                <p>A deep dive into decadence, sophisticated, refined and dripping with
                    chandeliers,for intimate cocktail, inspired dining and an extraordinary
                    wine list, with live ambience, from blues to burlesque, and curated priv
                    experiences.A deep dive into decadence, sophisticated, efined and dr
                    pping with chandelier</p>
                <p>A deep dive into decadence, sophisticated, refined and dripping with
                    chandeliers,for intimate cocktail, inspired dining and an extraordinary
                    wine list, with live ambience, from blues.</p>
                <span>Chef & Founder</span>
                <h4>Jhon Smith</h4>
            </div>
        </div>
        <div class="descriptionTwo">
            <div class="logo">
                VICTORIA’S
            </div>
            <div class="info">
                <div class="text">
                    <h3>The Bar’s History</h3>
                    <h1>THE DRESS CODE AT VICTORIA’S</h1>
                    <p>We’ve set a sophisticated scene with sheer elegance,
                        down to the fine detail, and we ask that you run with
                        that tone by dressing well for your experience of Victoria’s.</p>
                    <p>That means no shorts, hats, or singlets, running or training
                        shoes, thongs or flip-flops.</p>
                    <p>Thankyou for understanding. We very much look forward
                        to welcoming you for a deep dive into decadence</p>
                </div>
                <img src="/images/drinksAbout.png" alt="">
            </div>
        </div>
        <div class="slider">
            <livewire:slider-about />
        </div>
        <div class="reservation">
            <livewire:reservation-form />
        </div>
    </div>
@endsection
