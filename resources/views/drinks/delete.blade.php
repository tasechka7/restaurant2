@extends("layouts.guest")

@section('title', "Delete Drink")

@section("main")
    <form  method="POST" action="{{ route('drinks.destroy', $drink->id) }}">
        @csrf
        <h1>Delete Drink</h1>
        <p>Are you sure you want to delete this drink?</p>
        @method("DELETE")
        <button class="delete">Delete Drink</button>
    </form>
@endsection