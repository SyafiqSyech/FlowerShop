<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== WEBSITE LOGO =========-->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>The Herb Shop &copy;</title>
</head>

<body>
    <!--==================== MAIN ====================-->
    <main class="main">

        <!--==================== LEFT ====================-->
        <div class="left__container">
            <div class="login__container">
                <!--==================== TITLE ====================-->
                <div class="title__container">
                    <h1 class="title-login">
                        LOGIN
                    </h1>
                </div>

                <!--==================== FORM ====================-->
                <form action="{{ route('authenticate') }}" method="POST" class="login__form">
                    @csrf

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissable fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="login__box">
                        <!--==================== EMAIL & PASSWORD ====================-->
                        <div class="input__form">
                            <input name="email" type="text"
                                class="login__input @error('email') is-invalid @enderror" id="email"
                                placeholder=" ">
                            <label for="email" class="login__label" id="email">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input__form">
                            <input name="password" type="password"
                                class="login__input @error('paassword') is-invalid @enderror" id="password"
                                placeholder=" ">
                            <label for="email" class="login__label" id="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!--==================== FORGOT PASS ====================-->
                        <a href="" class="forgot__password">Forgot Password?</a>

                        <!--==================== BUTTON ====================-->
                        <div class="button__container">
                            <button type="submit" class="login__button button">Login</button>
                            <a class="register__button button" id="register-btn"
                                href="{{ route('register') }}">Register</a>
                            <!-- <a href="register.html" class="register__button">Register</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--==================== RIGHT ====================-->
        <div class="right__container">
            <div class="login__image-background">
                <!-- <img src="public/assets/login-pict.png" alt="" class="login__img-background"> -->
            </div>

            <div class="login__image">
                <img src="{{ asset('assets/login-pict.png') }}" alt="" class="login__img">
                <div class="shop__name">THE HERB SHOP</div>
            </div>
        </div>

    </main>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/login-register.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
