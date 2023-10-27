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
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <link rel="stylesheet" href="{{ asset('loginregister.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>The Herb Shop &copy;</title>
</head>
<body>
    <!--==================== MAIN ====================-->
    <main class="main">

        <!--==================== LEFT ====================-->
        <div class="left__container">
            <div class="inner__container">
                <!--==================== TITLE ====================-->
                <div class="title__container">
                    <h1 class="title">
                        LOGIN
                    </h1>
                </div>

                <!--==================== FORM ====================-->
                <form action="{{ route('authenticate')}}" method="POST" class="login__form">
                    @csrf

                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissable fade show" role="alert">
                        {{ session('loginError')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif 
                    
                    <div class="box">

                        <!--==================== EMAIL & PASSWORD ====================-->
                        <div class="input__form">
                            <input name="email" type="text" class="input @error('email') is-invalid @enderror" id="email" required placeholder=" ">
                            <label for="email" class="label" id="email" >Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                

                        <div class="input__form">
                            <input name="password" type="password" class="input @error('paassword') is-invalid @enderror" id="password" required placeholder=" ">
                            <label for="email" class="label" id="password" >Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!--==================== FORGOT PASS ====================-->
                        <div class="forgot__password">
                            <a href="">Forgot Password?</a>
                        </div>

                        <!--==================== BUTTON ====================-->
                        <div class="button__container">
                            <button type="submit" class="top__button button">Login</button>
                            <a class="bottom__button button" id="register-btn" href="{{ route('register')}}">Register</a>
                            <!-- <a href="register.html" class="register__button">Register</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--==================== RIGHT ====================-->
        <div class="right__container">
            <div class="image-background">
                <!-- <img src="public/assets/login-pict.png" alt="" class="login__img-background"> -->
            </div>

            <img src="{{ asset('assets/login-pict.png') }}" alt="" class="image toprounded">
            <div class="shop__name">THE HERB SHOP</div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>