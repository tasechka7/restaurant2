@extends("layouts.guest")

@section('title', "Delete Category")

@section("main")
    <form method="POST" action="{{ route('categories.menu.destroy', $menu_category->id) }}">
        <h1 >Delete category</h1>
    <p>Are you sure you want to delete this dish category?</p>
        @csrf
        @method("DELETE")
        <button class="delete">Delete category</button>
    </form>
@endsection