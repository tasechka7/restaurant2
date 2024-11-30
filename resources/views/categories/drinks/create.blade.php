@extends("layouts.guest")

@section("title", "Create category")

@section("main")
<div>
    <h1>Create category</h1>
    <form method="POST" action="{{ route('categories.drinks.store') }}">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button>Create category</button>
    </form>
</div>
@endsection
