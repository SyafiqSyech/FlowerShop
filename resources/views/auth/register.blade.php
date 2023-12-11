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
    <link rel="stylesheet" href="{{ asset('css/loginregister.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!--=============== BOOTSTRAP ERROR HANDLER ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/Logo1.svg') }}" />

    <title>The Herb Shop &copy;</title>
</head>

<body>

    <!--==================== MAIN ====================-->
    <main class="main">

        <!--==================== LEFT ====================-->
        <div class="left__container">
            <div class="image-background register__image-background"></div>
            <img src="{{ asset('img/register/RegisterPlant.png') }}" alt="" class="image toprounded">
            <div class="shop__name">THE HERB SHOP</div>
        </div>

        <!--==================== RIGHT ====================-->
        <div class="right__container">
            <div class="inner__container">
                <!--==================== TITLE ====================-->
                <h1 class="title">
                    REGISTER
                </h1>


                <!--==================== FORM ====================-->
                <form method="POST" action="{{ route('storeUser') }}" class="register__form">
                    @csrf
                    <div class="box">

                        <!--==================== ISI FORM ====================-->
                        <div class="name__container">
                            <div class="input__form">
                                <input name="firstName" type="text"
                                    class="input @error('firstName') is-invalid @enderror" id="fname" required
                                    placeholder=" " value="{{ old('firstName') }}">
                                <label for="fname" class="label">First Name</label>
                                @error('firstName')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="input__form">
                                <input name="lastName" type="text"
                                    class="input @error('lastName') is-invalid @enderror" id="lname" required
                                    placeholder=" " value="{{ old('lastName') }}">
                                <label for="lname" class="label">Last Name</label>
                                @error('lastName')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="input__form">
                            <input name="email" type="text" class="input @error('email') is-invalid @enderror"
                                id="email" required placeholder=" " value="{{ old('email') }}">
                            <label for="email" class="label">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="input__form">
                            <input name="password" type="password" class="input @error('password') is-invalid @enderror"
                                id="password" required placeholder=" ">
                            <label for="password" class="label">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input__form">
                            <input name="confirm-password" type="password"
                                class="input @error('confirm-password') is-invalid @enderror" id="cpassword" required
                                placeholder=" ">
                            <label for="password" class="label">Confirm Password</label>
                            @error('confirm-password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <!--==================== BUTTON ====================-->
                        <div class="button__container">
                            <button type="submit" class="top__button button__content">
                                <p>Register</p>
                            </button>
                            <a class="bottom__button button__content" href="{{ route('login') }}">
                                <p>Login</p>
                            </a>
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

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
