<header x-data="{ isOpen: false, isScrolled: false }" x-init="window.addEventListener('scroll', () => isScrolled = window.scrollY > 0)">
    <div class="container">
        <div class="burger-menu" x-data="{ isOpen: false }">
            <!-- Бургер-иконка -->
            <div class="burger" @click="isOpen = true">
                <img src="/images/burgerMenu.svg" alt="">
                <p>Menu</p>
            </div>

            <!-- Выезжающее меню -->
            <div class="menu" x-show="isOpen && !isScrolled"
                x-transition:enter="transition-transform duration-300 ease-out"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition-transform duration-300 ease-in" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full">
                <div class="left-side">
                    <button class="close-btn" @click="isOpen = false"><img src="/images/exit.svg"
                            alt=""></button>
                    <div class="media">
                        <a href="">mail@thevictorias.co.au</a>
                        <a href=""><img src="/images/instagram.svg" alt=""></a>
                        <a href=""><img src="/images/faceboock.svg" alt=""></a>
                    </div>
                </div>
                <div class="right-side">
                    <div class="logo"><img src="/images/logo.png" alt=""></div>
                    <nav>
                        <a href="{{ route('home') }}" :class="{ 'active': activeLink === '{{ route('home') }}' }"
                            @click="activeLink = '{{ route('home') }}'">HOME</a>
                        <a href="{{ route('about') }}" :class="{ 'active': activeLink === '/about' }"
                            @click="activeLink = '/about'">ABOUT US</a>
                        <a href="{{ route('menu') }}" :class="{ 'active': activeLink === '/menu' }"
                            @click="activeLink = '/menu'">MENU</a>
                        <a href="{{ route('drink') }}" :class="{ 'active': activeLink === '/drinks' }"
                            @click="activeLink = '/drinks'">DRINKS</a>
                        <a href="{{ route('ourNews') }}" :class="{ 'active': activeLink === '/news' }"
                            @click="activeLink = '/news'">NEWS</a>

                    </nav>
                </div>
            </div>
        </div>
        <div class="logo">
            <a href="{{ route('home') }}"><img src="/images/bigLogo.png" alt=""></a>
        </div>
        <div class="links">
            <a href="{{ route('reservation') }}">Reservations</a>
        </div>
    </div>
</header>
