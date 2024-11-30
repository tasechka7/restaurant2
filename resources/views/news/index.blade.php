@extends('layouts.guest')

@section('title', 'News')

@section('main')
    <h1>News</h1>
    <div class="links">
        <a href="{{ route('news.create') }}">Create News</a>
    </div>
    <livewire:news />
@endsection
