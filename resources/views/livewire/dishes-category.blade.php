<div class="categories">
    @foreach($menu_categories as $category)
        <div class="category">
            <h2>• {{ $category->name }}</h2>
            <div class="buttons">
                <a href="{{ route('categories.menu.edit', $category->id) }}">Edit</a>
                <a  href="{{ route('categories.menu.delete', $category->id) }}">Delete </a>
            </div>
        </div>
    @endforeach
</div>
