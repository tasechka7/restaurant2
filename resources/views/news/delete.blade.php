@extends("layouts.guest")

@section('title', "Delete News")

@section("main")
    <form  method="POST" action="{{ route('news.destroy', $new->id) }}">
        @csrf
        <h1>Delete News</h1>
        <p>Are you sure you want to delete this news?</p>
        @method("DELETE")
        <button class="delete">Delete News</button>
    </form>
@endsection