<header class="header">
        <div class="header__nav">
            <p>We Make Your Feel Comfortable</p>
            <nav class="navbar" id="header">
                <div class="hamburger-menu" id="hamburguer_menu" onclick="openMenu()">
                    <button class="navbar__burger" id="hamburger_button"> ☰</button>
                </div>
                <a href="{{route('index')}}" class="navbar__left">
                    <h1>H</h1>
                    <h2><b>HOTEL</b></br> MIRANDA</h2>
                </a>

                <navbar id="nav_links" class="navbar__center">
                    <a href="{{route('about')}}" class="navbar__center__link">About Us</a>
                    <a href="{{route('rooms')}}" class="navbar__center__link">Rooms</a>
                    <a href="{{route('offers')}}" class="navbar__center__link">Offers</a>
                    <a href="./contact.php" class="navbar__center__link">Contact</a>
                </navbar>

                <div class="navbar__right">
                    <button class="navbar__right__button">
                        <img src="{{asset('./assets/Img/header-person.svg')}}" alt="">
                    </button>
                    <button class="navbar__right__button">
                        <img src="{{asset('./assets/Img/header-mag-glass.svg')}}" alt="">
                    </button>
                </div>
            </nav>
        </div>
    </header>