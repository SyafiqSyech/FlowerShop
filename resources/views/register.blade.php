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
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>The Herb Shop &copy;</title>
</head>

<body>

    <!--==================== MAIN ====================-->
    <main class="main">

        <!--==================== LEFT ====================-->
        <div class="left__container">
            <div class="register__image-background">
                <!-- <img src="./assets/img/register-pict.png" alt="" class="register__img-background"> -->
            </div>

            <div class="register__image">
                <img src="{{ asset('assets/register-pict.png') }}" alt="" class="register__img">
                <div class="shop__name">THE HERB SHOP</div>
            </div>
        </div>

        <!--==================== RIGHT ====================-->
        <div class="right__container">
            <div class="register__container">
                <!--==================== TITLE ====================-->
                <div class="title__container">
                    <h1 class="title-register">
                        REGISTER
                    </h1>
                </div>

                <!--==================== FORM ====================-->
                <form method="POST" action="{{ route('storeUser') }}" class="register__form">
                    @csrf
                    <div class="register__box">

                        <!--==================== ISI FORM ====================-->
                        <div class="name__container">
                            <div class="input__form">
                                <input name="firstName" type="text" class="register__input @error('firstName') is-invalid @enderror" id="fname"
                                    placeholder=" " value="{{ old('firstName') }}">
                                <label for="fname" class="register__label">First Name</label>
                                @error('firstName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="input__form">
                                <input name="lastName" type="text" class="register__input @error('lastName') is-invalid @enderror" id="lname"
                                    placeholder=" " value="{{ old('lastName') }}">
                                <label for="lname" class="register__label">Last Name</label>
                                @error('lastName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="input__form">
                            <input name="email" type="text"
                                class="register__input @error('email') is-invalid @enderror" id="email"
                                placeholder=" " value="{{ old('email') }}">
                            <label for="email" class="register__label">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="password__container">
                            <div class="input__form">
                                <input name="password" type="password"
                                    class="register__input @error('password') is-invalid @enderror" id="password"
                                    placeholder=" ">
                                <label for="password" class="register__label">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="input__form">
                                <input name="confirm-password" type="password"
                                    class="register__input @error('confirm-password') is-invalid @enderror"
                                    id="cpassword" placeholder=" ">
                                <label for="password" class="register__label">Confirm Password</label>
                                @error('confirm-password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!--==================== BUTTON ====================-->
                        <div class="button__container">
                            <button type="submit" class="register__button button">Register</button>
                            <a class="login__button button" href="{{ route('login') }}">Login</a>
                        </div>

                    </div>
                </form>
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
