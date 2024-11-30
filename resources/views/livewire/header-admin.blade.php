<header class="admin-header">
    <div class="principal">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </div>
    <nav>
        <a href="{{ route('menus.index') }}"> Dishes</a>
        <a href="{{ route('drinks.index') }}"> Drinks</a>
        <a href="{{ route('categories.menu.index') }}"> Categories Dishes</a>
        <a href="{{ route('categories.drinks.index') }}">Categories Drinks</a>
        <a href="{{ route('reservations.index') }}"> Reservations</a>
        <a href="{{ route('news.index') }}"> News</a>
    </nav>
    @auth
    <form action="{{ route('logout') }}" method="POST" >
        @csrf
        <button type="submit">
            Logout
        </button>
    </form>
@endauth
</header>