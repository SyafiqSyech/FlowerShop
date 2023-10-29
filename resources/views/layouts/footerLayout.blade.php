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
    <div>
        @yield('content')
    </div>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__container">

            <div class="footer__left">
                <div class="footer__link-container">
                    <div class="footer__link-text">
                        <div class="footer__text-title">
                            <h3 class="footer__navi">NAVIGATION</h3>
                        </div>

                        <div class="footer__text-content">
                            <a href="" class="footer__links">Home</a>
                            <a href="{{ route('herbs') }}" class="footer__links">Herbs</a>
                            <a href="{{ route('contact') }}" class="footer__links">Contact</a>
                        </div>
                    </div>

                    <div class="footer__link-text">
                        <div class="footer__text-title">
                            <h3 class="footer__navi">COLLECTIONS</h3>
                        </div>

                        <div class="footer__text-content">
                            <a href="{{ route('alchemical') }}" class="footer__links">Alchemical</a>
                            <a href="{{ route('exotic') }}" class="footer__links">Exotic</a>
                            <a href="{{ route('swiftgrow') }}" class="footer__links">Swiftgrow</a>
                        </div>
                    </div>

                    <div class="footer__link-text">
                        <div class="footer__text-title">
                            <h3 class="footer__navi">LEGAL</h3>
                        </div>

                        <div class="footer__text-content">
                            <a href="{{ route('home') }}" class="footer__links">Terms</a>
                            <a href="{{ route('home') }}" class="footer__links">Privacy Policy</a>
                            <a href="{{ route('home') }}" class="footer__links">FAQ</a>
                            <a href="{{ route('home') }}" class="footer__links">License</a>
                        </div>
                    </div>
                </div>

                <div class="footer__line"></div>

                <div class="footer__icon-container">
                    <div class="footer__icon-container-left">
                        <div class="footer__ig">
                            <a href="" class="footer__ig-link">
                                <img src="{{ asset('assets/icon/ri_instagram-fill.png') }}" alt=""
                                    class="footer__icon-img">
                            </a>
                        </div>

                        <div class="footer__twit">
                            <a href="" class="footer__twit-link">
                                <img src="{{ asset('assets/icon/twitter-icon.png') }}" alt=""
                                    class="footer__icon-img">
                            </a>
                        </div>

                        <div class="footer__linkedin">
                            <a href="" class="footer__linked-link">
                                <img src="{{ asset('assets/icon/ri_linkedin-fill.png') }}" alt=""
                                    class="footer__icon-img">
                            </a>
                        </div>

                        <div class="footer__discord">
                            <a href="" class="footer__dc-link">
                                <img src="{{ asset('assets/icon/ri_discord-fill.png') }}" alt=""
                                    class="footer__icon-img">
                            </a>
                        </div>
                    </div>

                    <div class="footer__icon-container-right">
                        <div class="footer__button-os-container">
                            <button class="footer__os-btn button">
                                Our Story
                                <i class="ri-arrow-right-up-line"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer__right">
                <div class="footer__shop-name-container">
                    <div class="footer__shop-name">
                        <h1 class="footer__the">THE</h1>
                        <h1 class="footer__herb">HERB</h1>
                        <h1 class="footer__shop">SHOP</h1>
                    </div>
                </div>

            </div>

        </div>
    </footer>

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
