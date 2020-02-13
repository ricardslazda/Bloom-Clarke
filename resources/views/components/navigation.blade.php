<header class="nav">
    <div class="flex container nav__flex">
        <a href="{{getenv('APP_ROOT')}}" class="nav__logo">BLOOM & CLARKE</a>
        <nav>
            <button class="hamburger-menu nav__toggle">
                <span class="nav__strip"></span>
                <span class="nav__strip"></span>
                <span class="nav__strip"></span>
            </button>

            <ul class="nav__menu">
                <li class="nav__item"><a href="{{getenv('APP_ROOT')}}" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="{{getenv('APP_ROOT')}}/listings" class="nav__link">Properties</a></li>
                <li class="nav__item"><a href="{{getenv('APP_ROOT')}}/agents" class="nav__link">Agents</a></li>
                <li class="nav__item"><a href="{{getenv('APP_ROOT')}}/about" class="nav__link">About</a></li>
                <li class="nav__close"><span class="fas fa-times"></span></li>
            </ul>
        </nav>
    </div>
</header>