<div class="categories">
    @foreach($drink_categories as $category)
        <div class="category">
            <h2>• {{ $category->name }}</h2>
            <div class="buttons">
                <a href="{{ route('categories.drinks.edit', $category->id) }}">Edit</a>
                <a  href="{{ route('categories.drinks.delete', $category->id) }}">Delete </a>
            </div>
        </div>
    @endforeach
</div>
