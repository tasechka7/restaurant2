@extends("layouts.guest")

@section("title", "Delete category")
@section("main")

    
    <form  method="POST" action="{{ route('categories.drinks.destroy', $drink_category->id) }}">
        <h1 >Delete category</h1>
        <p>Are you sure you want to delete this drink category?</p>
        @csrf
        @method("DELETE")
        <button class="delete">Delete category</button>
    </form>

@endsection