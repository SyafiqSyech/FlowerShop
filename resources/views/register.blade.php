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
    <link rel="stylesheet" href="{{ asset('register.css') }}">
    <link rel="stylesheet" href="{{ asset('loginregister.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>The Herb Shop &copy;</title>
</head>
<body>

        <!--==================== MAIN ====================-->
        <main class="main">

        <!--==================== LEFT ====================-->
        <div class="left__container">
            <div class="image-background register__image-background"></div>
            <img src="{{ asset('assets/register-pict.png') }}" alt="" class="image toprounded">
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
                                <input name="firstName" type="text" class="input" id="fname" required placeholder=" " value="{{ old('firstName') }}"> 
                                <label for="fname" class="label">First Name</label>
                            </div>


                            <div class="input__form">
                                <input name="lastName" type="text" class="input" id="lname" required placeholder=" " value="{{ old('lastName') }}"> 
                                <label for="lname" class="label">Last Name</label>
                            </div>
                        </div>
                        
                        <div class="input__form">
                            <input name="email"  type="text" class="input @error('email') is-invalid @enderror" id="email" placeholder=" " value="{{ old('email') }}"> 
                            <label for="email" class="label">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                
                        <div class="input__form">
                            <input name="password" type="password" class="input @error('password') is-invalid @enderror" id="password" required placeholder=" ">
                            <label for="password" class="label">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="input__form">
                            <input name="confirm-password" type="password" class="input @error('confirm-password') is-invalid @enderror" id="cpassword" required placeholder=" ">
                            <label for="password" class="label">Confirm Password</label>
                            @error('confirm-password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- <div class="input__form">
                            <input name="phoneNumber" type="tel" class="input @error('phoneNumber') is-invalid @enderror" id="phoneNumber" required placeholder=" " value="{{ old('phoneNumber') }}">
                            <label for="phoneNumber" class="label">Phone Number</label>
                            @error('phoneNumber')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input__form">
                            <input name="DOB" type="date"  class="input @error('DOB') is-invalid @enderror" id="DOB" required value="{{ old('DOB') }}">
                            <label for="DOB" class="label">Date of Birth</label>
                            @error('DOB')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        {{-- <div class="gender__container">
                            <div class="input__form-radio">
                                 <div class="div__input">
                                     <input name="gender" type="radio"  class="input-rb" id="male" required>
                                 </div>
 
                                 <div>
                                     <label for="male" class="register__label-rb">Male</label>
                                 </div>
 
                             </div>  --}}
                             {{-- <div class="input__form-radio">
                                 <div class="div__input">
                                     <input name="gender" type="radio"  class="input-rb" id="female" required>
                                 </div>
 
                                 <div>
                                     <label for="female" class="register__label-rb">Female</label>
                                 </div>
                             </div>  --}}
                        

                        <!--==================== BUTTON ====================-->
                        <div class="button__container">
                            <button type="submit" class="top__button button">Register</button>
                            <a class="bottom__button button" href="{{ route('login') }}">Login</a>
                        </div>
                        
                        
                    </div>
                </form>
            </div>
        </div>


    </main>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>