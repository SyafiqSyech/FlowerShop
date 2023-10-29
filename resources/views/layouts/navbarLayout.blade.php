<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--========== WEBSITE LOGO =========-->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

    <!--=============== CSS BOOTSTRAP ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <title>The Herb Shop &copy;</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="true__header" id="true-header">
            <div class="true__header-left">
                <div class="tHeader__shop-name">
                    <p class="tHeader__the">THE</p>
                    <p class="tHeader__herb">HERB</p>
                    <p class="tHeader__shop">SHOP</p>
                </div>
            </div>

            <div class="true__header-right">
                <div class="tHeader__cart">
                    <i class="ri-shopping-cart-line" id="tHeader-shopCart"></i>
                </div>

                <div class="tHeader__account">
                    <i class="ri-user-line" id="tHeader-account"></i>
                </div>

                <div class="tHeader__menu" id="tHeader-menu">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->

    <!--==================== DROPDOWN ====================-->
    <div class="dropdown">
        <div class="dropdown__container">
            <nav class="dropdown__header" id="dropdown-header">
                <div class="dropdown__header-left">
                    <div class="dHeader__shop-name">
                        <p class="dHeader__the">THE</p>
                        <p class="dHeader__herb">HERB</p>
                        <p class="dHeader__shop">SHOP</p>
                    </div>
                </div>

                <div class="dropdown__header-right">
                    <div class="dHeader__cart">
                        <i class="ri-shopping-cart-line"></i>
                    </div>

                    <div class="dHeader__account">
                        <i class="ri-user-line"></i>
                    </div>

                    <div class="dHeader__menu" id="dHeader-menu">
                        <i class="ri-close-line" id="dHeader-close"></i>
                    </div>
                </div>
            </nav>

            <div class="drowdown__content-main">
                <div class="dropdown__left">
                    <div class="dropdown__left-up">
                        <a href="{{ route('home') }}" class="dropdown__home">HOME</a>
                    </div>

                    <div class="dropdown__left-mid">
                        <a href="{{ route('herbs') }}" class="dropdown__herbs">HERBS</a>

                        <p class="dropdown__herbs-sub">ALCHEMICAL</p>
                        <p class="dropdown__herbs-sub">MAGICAL</p>
                        <p class="dropdown__herbs-sub">HEALING</p>
                    </div>

                    <div class="dropdown__left-bot">
                        <a href="{{ route('contact') }}" class="dropdown__contact">CONTACT</a>
                    </div>
                </div>

                <div class="dropdown__right">

                </div>
            </div>

            <div class="dropdown__footer">
                <div class="dropdown__footer-left">
                    <div class="dropdown__footer__ig">
                        <a href="" class="dropdown__footer__ig-link">
                            <img src="{{ asset('assets/icon/ri_instagram-fill.png') }}" alt=""
                                class="dropdown__footer__icon-img">
                        </a>
                    </div>

                    <div class="dropdown__footer__twit">
                        <a href="" class="dropdown__footer__twit-link">
                            <img src="{{ asset('assets/icon/twitter-icon.png') }}" alt=""
                                class="dropdown__footer__icon-img">
                        </a>
                    </div>

                    <div class="dropdown__footer__linkedin">
                        <a href="" class="dropdown__footer__linked-link">
                            <img src="{{ asset('assets/icon/ri_linkedin-fill.png') }}" alt=""
                                class="dropdown__footer__icon-img">
                        </a>
                    </div>

                    <div class="dropdown__footer__discord">
                        <a href="" class="dropdown__footer__dc-link">
                            <img src="{{ asset('assets/icon/ri_discord-fill.png') }}" alt=""
                                class="dropdown__footer__icon-img">
                        </a>
                    </div>
                </div>

                <div class="dropdown__footer-right">
                    <div class="dropdown__footer__button-os-container">
                        <button class="dropdown__footer__os-btn button">
                            Our Story
                            <i class="ri-arrow-right-up-line"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--==================== HEADER HOME ====================-->
    <div class="header__home">
        <nav class="nav">
            <h1 class="header__shop-name">
                THE HERB SHOP
            </h1>

            <ul class="nav__list-mid">
                <li class="nav__item">
                    <a href="{{ route('home') }}" class="nav__link">Home</a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('herbs') }}" class="nav__link">Herbs</a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('contact') }}" class="nav__link">Contact</a>
                </li>
            </ul>

            <ul class="nav__list-right">
                <li class="nav__item">
                    <a href="{{ route('cart') }}" class="nav__link">Cart</a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('account') }}" class="nav__link">Account</a>
                </li>
            </ul>

            <!-- Close button -->
        </nav>
    </div>

    <div>
        @yield('content')
    </div>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/landing-page.js') }}"></script>

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
