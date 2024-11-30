@extends("layouts.guest")

@section('title', "Delete Dish")

@section("main")
    <form  method="POST" action="{{ route('menus.destroy', $menu->id) }}">
        @csrf
        <h1>Delete Dish</h1>
        <p>Are you sure you want to delete this dish?</p>
        @method("DELETE")
        <button class="delete">Delete Dish</button>
    </form>
@endsection