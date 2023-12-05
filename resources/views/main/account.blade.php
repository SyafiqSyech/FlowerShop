<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">

    <!--=============== BOOTSTRAP ERROR HANDLER ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="{{ asset('img/Logo1.svg') }}" />

    <title>The Herb Shop &copy;</title>
</head>

<body>
    <!--==================== FORM EDIT ACCOUNT ====================-->
    <div id="editAccountForm" class="editAccountForm"
        @if ($errors->any()) style="display: block;"
        @else
            style="display: none;" @endif>
        <div class="account__title">Edit Account</div>

        <form id="editAccountForm" action="{{ route('update') }}" method="POST">
            @csrf

            <!--==================== FORM ====================-->
            <div class="name__container">
                <div class="input__form">
                    <input name="firstName" type="text" class="input @error('firstName') is-invalid @enderror"
                        id="fname" required placeholder=" "
                        value="{{ old('firstName', auth()->user()->firstName) }}">
                    <label for="fname" class="label">First Name</label>
                    @error('firstName')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input__form">
                    <input name="lastName" type="text" class="input @error('lastName') is-invalid @enderror"
                        id="lname" required placeholder=" " value="{{ old('lastName', auth()->user()->lastName) }}">
                    <label for="lname" class="label">Last Name</label>
                    @error('lastName')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="input__form">
                <input name="email" type="text" class="input @error('email') is-invalid @enderror" id="email"
                    required placeholder=" " value="{{ old('email', auth()->user()->email) }}">
                <label for="email" class="label">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input__form">
                <input name="phoneNumber" type="tel" class="input @error('phoneNumber') is-invalid @enderror"
                    id="phoneNumber" placeholder=" " value="{{ old('phoneNumber', auth()->user()->phoneNumber) }}">
                <label for="phoneNumber" class="label">Phone Number</label>
                @error('phoneNumber')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input__form">
                <input name="DOB" type="date" class="input @error('DOB') is-invalid @enderror" id="DOB"
                    placeholder=" " value="{{ old('DOB', auth()->user()->DOB) }}">
                <label for="DOB" class="label">Date of Birth</label>
                @error('DOB')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="gender__form edit_radio">
                <label for="" class="label">Gender</label>
                <br>
                <div class="gender_radio_button">
                    <label for="male"
                        class="radio_button {{ auth()->user()->gender == 'Male' ? 'radio_button-selected' : '' }}">
                        <input type="radio" id="male" value="Male"
                            {{ auth()->user()->gender == 'Male' ? 'checked' : '' }} name="gender">
                        <div id="maleLabel"
                            class="gender_selection_title {{ auth()->user()->gender == 'Male' ? 'gender_selection_title-selected' : '' }}">
                            Male
                        </div>
                    </label>
                </div>
                <div class="gender_radio_button">
                    <label for="female"
                        class="radio_button {{ auth()->user()->gender == 'Female' ? 'radio_button-selected' : '' }}">
                        <input type="radio" id="female" value="Female"
                            {{ auth()->user()->gender == 'Female' ? 'checked' : '' }} name="gender">
                        <div id="femaleLabel"
                            class="gender_selection_title {{ auth()->user()->gender == 'Female' ? 'gender_selection_title-selected' : '' }}">
                            Female
                        </div>
                    </label>
                </div>
            </div>

            <div class="passwordDiv">
                <div class="input__form">
                    <input name="password" type="password" class="input @error('password') is-invalid @enderror"
                        id="password" placeholder=" ">
                    <label for="password" class="label">New Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input__form">
                    <input name="confirm-password" type="password"
                        class="input @error('confirm-password') is-invalid @enderror" id="cpassword" placeholder=" ">
                    <label for="password" class="label">Confirm New Password</label>
                    @error('confirm-password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="input__form">
                <input name="passwordConfirm" type="password"
                    class="input @error('passwordConfirm') is-invalid @enderror" id="passwordConfirm"
                    placeholder=" ">
                <label for="passwordConfirm" class="label">Old Password to Confirm Edit</label>
                @error('passwordConfirm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="buttonContainer">
                <div class="button">
                    <button type="submit" class="button__content">
                        <div>
                            Save
                        </div>
                    </button>
                </div>
                <div onclick="toggleEdit('editAccountForm')" class="button">
                    <div class="button__content">
                        <div>
                            Close
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME HEADER ====================-->
        <nav class="header__home" id="headerHome">
            <div class="nav__shop-name">
                <svg viewBox="0 0 192 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.51585 19L2.56912 18.7337L3.20838 18.4939C4.02521 18.1565 4.52242 17.5528 4.69999 16.6827L6.00515 9.67747C6.1472 8.93167 6.29814 8.10596 6.45795 7.20034C6.63553 6.27696 6.80422 5.36247 6.96404 4.45685C7.12385 3.53347 7.26591 2.69888 7.39021 1.95308H6.24487C5.60561 1.95308 5.05513 2.0685 4.59345 2.29935C4.13176 2.53019 3.71446 2.90309 3.34156 3.41805L1.21069 6.32136H0.944336L1.92986 1.42036H16.6861L15.8338 6.32136H15.5674L14.5819 3.63114C14.1912 2.51243 13.3833 1.95308 12.158 1.95308H11.066L9.41453 10.7163C9.23696 11.6219 9.05051 12.5985 8.85518 13.6462C8.67761 14.6761 8.50004 15.6794 8.32246 16.6561C8.16265 17.5794 8.50891 18.2187 9.36126 18.5738L9.70753 18.7337L9.65425 19H2.51585ZM14.9983 19L15.0515 18.7337L15.7174 18.5206C16.2502 18.2897 16.5609 17.9079 16.6497 17.3752L18.1147 9.67747C18.2922 8.71858 18.4876 7.65315 18.7007 6.48117C18.9137 5.29144 19.1091 4.17273 19.2866 3.12506C19.3932 2.50355 19.1446 2.07738 18.5408 1.84654L18.1413 1.68672L18.1946 1.42036H24.747L24.6937 1.68672L24.0012 1.89981C23.3974 2.11289 23.0423 2.52131 22.9358 3.12506L21.7371 9.67747H28.3428C28.4494 9.09148 28.5648 8.42559 28.6891 7.67979C28.8312 6.93398 28.9643 6.17042 29.0886 5.3891C29.2307 4.60779 29.355 3.87974 29.4615 3.20496C29.5681 2.53019 29.3106 2.0685 28.6891 1.8199L28.2896 1.68672L28.3428 1.42036H34.8952L34.842 1.68672L34.2027 1.89981C33.6167 2.11289 33.2616 2.52131 33.1373 3.12506L31.6989 10.7163C31.5214 11.7107 31.3349 12.7584 31.1396 13.8593C30.9443 14.9425 30.7401 16.1056 30.527 17.3486C30.4382 17.9168 30.6513 18.2986 31.1662 18.4939L31.7789 18.7337L31.7256 19H25.0933L25.1465 18.7337L25.919 18.4673C26.4339 18.2897 26.7447 17.9346 26.8512 17.4019L28.2097 10.2102H21.604C21.4086 11.2224 21.1955 12.3499 20.9647 13.5929C20.7516 14.8182 20.5385 16.079 20.3254 17.3752C20.2367 17.9257 20.4409 18.3075 20.9381 18.5206L21.4442 18.7337L21.3909 19H14.9983ZM33.6746 19L33.7279 18.7337L34.2339 18.5738C34.8732 18.3252 35.2461 17.8813 35.3526 17.2421L36.791 9.67747C36.9685 8.73634 37.155 7.69754 37.3503 6.56108C37.5457 5.40686 37.7321 4.31479 37.9097 3.28487C38.034 2.57458 37.7587 2.08626 37.084 1.8199L36.8176 1.68672L36.8709 1.42036H48.8836L48.2177 6.055H47.9514L47.4187 3.6045C47.2944 3.03627 47.0724 2.61898 46.7528 2.35262C46.4331 2.08626 45.9626 1.95308 45.3411 1.95308H41.8518L40.3868 9.67747H42.8373C43.6364 9.67747 44.2401 9.35784 44.6485 8.71858L45.5275 7.38679H45.7939L44.835 12.4742H44.5686L44.249 11.4088C44.0182 10.6097 43.4854 10.2102 42.6509 10.2102H40.2803C40.0494 11.5065 39.8008 12.8738 39.5345 14.3121C39.2681 15.7504 39.0284 17.1355 38.8153 18.4673H43.1037C43.6541 18.4673 44.1247 18.3608 44.5154 18.1477C44.906 17.9168 45.2878 17.535 45.6607 17.0023L47.4453 14.3654H47.7117L46.6462 19H33.6746ZM54.4058 19L54.4591 18.7337L55.125 18.5206C55.6577 18.2897 55.9684 17.9079 56.0572 17.3752L57.5222 9.67747C57.6998 8.71858 57.8951 7.65315 58.1082 6.48117C58.3213 5.29144 58.5166 4.17273 58.6942 3.12506C58.8007 2.50355 58.5521 2.07738 57.9484 1.84654L57.5488 1.68672L57.6021 1.42036H64.1545L64.1012 1.68672L63.4087 1.89981C62.805 2.11289 62.4498 2.52131 62.3433 3.12506L61.1447 9.67747H67.7503C67.8569 9.09148 67.9723 8.42559 68.0966 7.67979C68.2387 6.93398 68.3718 6.17042 68.4961 5.3891C68.6382 4.60779 68.7625 3.87974 68.8691 3.20496C68.9756 2.53019 68.7181 2.0685 68.0966 1.8199L67.6971 1.68672L67.7503 1.42036H74.3028L74.2495 1.68672L73.6102 1.89981C73.0242 2.11289 72.6691 2.52131 72.5448 3.12506L71.1065 10.7163C70.9289 11.7107 70.7424 12.7584 70.5471 13.8593C70.3518 14.9425 70.1476 16.1056 69.9345 17.3486C69.8457 17.9168 70.0588 18.2986 70.5737 18.4939L71.1864 18.7337L71.1331 19H64.5008L64.554 18.7337L65.3265 18.4673C65.8414 18.2897 66.1522 17.9346 66.2587 17.4019L67.6172 10.2102H61.0115C60.8161 11.2224 60.6031 12.3499 60.3722 13.5929C60.1591 14.8182 59.946 16.079 59.733 17.3752C59.6442 17.9257 59.8484 18.3075 60.3456 18.5206L60.8517 18.7337L60.7984 19H54.4058ZM73.0821 19L73.1354 18.7337L73.6414 18.5738C74.2807 18.3252 74.6536 17.8813 74.7601 17.2421L76.1985 9.67747C76.3761 8.73634 76.5625 7.69754 76.7578 6.56108C76.9532 5.40686 77.1396 4.31479 77.3172 3.28487C77.4415 2.57458 77.1663 2.08626 76.4915 1.8199L76.2251 1.68672L76.2784 1.42036H88.2912L87.6253 6.055H87.3589L86.8262 3.6045C86.7019 3.03627 86.4799 2.61898 86.1603 2.35262C85.8407 2.08626 85.3701 1.95308 84.7486 1.95308H81.2593L79.7943 9.67747H82.2448C83.0439 9.67747 83.6476 9.35784 84.0561 8.71858L84.935 7.38679H85.2014L84.2425 12.4742H83.9761L83.6565 11.4088C83.4257 10.6097 82.893 10.2102 82.0584 10.2102H79.6878C79.4569 11.5065 79.2083 12.8738 78.942 14.3121C78.6756 15.7504 78.4359 17.1355 78.2228 18.4673H82.5112C83.0617 18.4673 83.5322 18.3608 83.9229 18.1477C84.3135 17.9168 84.6953 17.535 85.0682 17.0023L86.8528 14.3654H87.1192L86.0537 19H73.0821ZM87.8306 19L87.8839 18.7337L88.3101 18.5738C89.0204 18.2897 89.4377 17.7925 89.562 17.0822L90.947 9.67747C91.1246 8.66531 91.3111 7.61764 91.5064 6.53444C91.7017 5.4335 91.8882 4.35918 92.0657 3.31151C92.2078 2.58346 91.9326 2.07738 91.24 1.79326L90.9737 1.68672L91.0269 1.42036H97.7392C99.7457 1.42036 101.228 1.79326 102.187 2.53907C103.146 3.26711 103.626 4.26152 103.626 5.52228C103.626 6.60547 103.253 7.56436 102.507 8.39895C101.761 9.23354 100.696 9.85505 99.3107 10.2635L102.028 17.1888C102.312 17.8636 102.756 18.343 103.359 18.6271L103.546 18.7337L103.466 19H98.6981L96.0078 10.9027H94.3032C94.1256 11.8261 93.948 12.8027 93.7704 13.8327C93.5929 14.8626 93.4064 15.9547 93.2111 17.1089C93.0868 17.8192 93.362 18.3075 94.0368 18.5738L94.3564 18.7337L94.3032 19H87.8306ZM94.4097 10.37H95.7415C97.1798 10.3345 98.2541 9.89944 98.9644 9.06485C99.6925 8.2125 100.056 7.05828 100.056 5.60219C100.056 3.16945 99.0443 1.95308 97.02 1.95308H96.0078L94.4097 10.37ZM104.478 19L104.558 18.7337L105.037 18.4673C105.393 18.2897 105.65 18.0944 105.81 17.8813C105.987 17.6505 106.112 17.3486 106.183 16.9757L107.594 9.67747C107.79 8.68307 107.976 7.65315 108.154 6.58772C108.349 5.50453 108.536 4.44797 108.713 3.41805C108.837 2.70776 108.562 2.17505 107.887 1.8199L107.621 1.68672L107.674 1.42036H114.094C115.496 1.42036 116.615 1.60681 117.45 1.97971C118.284 2.35262 118.879 2.84094 119.234 3.44469C119.607 4.04843 119.794 4.69657 119.794 5.3891C119.794 6.04612 119.589 6.68538 119.181 7.30688C118.773 7.91063 118.151 8.42559 117.317 8.85176C116.482 9.27794 115.434 9.55317 114.173 9.67747C115.434 9.81953 116.455 10.1125 117.237 10.5565C118.018 11.0004 118.586 11.5331 118.941 12.1546C119.314 12.7761 119.501 13.4331 119.501 14.1257C119.501 14.9602 119.243 15.7504 118.728 16.4962C118.213 17.2421 117.388 17.8458 116.251 18.3075C115.132 18.7692 113.659 19 111.83 19H104.478ZM111.244 9.46439H112.176C113.508 9.46439 114.511 9.10924 115.186 8.39895C115.86 7.67091 116.198 6.64099 116.198 5.3092C116.198 4.226 115.958 3.40029 115.479 2.83206C115.017 2.24607 114.324 1.95308 113.401 1.95308H112.655L111.244 9.46439ZM109.619 18.4673H111.19C112.753 18.4673 113.916 18.0234 114.68 17.1355C115.461 16.2299 115.852 15.0668 115.852 13.6462C115.852 11.2135 114.68 9.9971 112.336 9.9971H111.11L110.977 10.7163C110.764 12.0125 110.533 13.3088 110.285 14.6051C110.054 15.9014 109.832 17.1888 109.619 18.4673ZM132.079 19.4795C131.155 19.4795 130.241 19.364 129.335 19.1332C128.447 18.9024 127.693 18.5738 127.071 18.1477L127.71 14.2322H127.977L128.749 16.4163C129.051 17.2864 129.442 17.9257 129.921 18.3341C130.418 18.7425 131.137 18.9467 132.079 18.9467C133.126 18.9467 133.952 18.636 134.556 18.0145C135.177 17.393 135.488 16.6472 135.488 15.7771C135.488 15.3154 135.417 14.8803 135.275 14.4719C135.133 14.0635 134.858 13.6373 134.449 13.1934C134.059 12.7495 133.473 12.2523 132.691 11.7018C131.732 11.0093 130.995 10.3611 130.48 9.75738C129.965 9.15364 129.61 8.55877 129.415 7.97278C129.22 7.38679 129.122 6.79192 129.122 6.18818C129.122 5.1405 129.388 4.226 129.921 3.44469C130.454 2.64561 131.191 2.03299 132.132 1.60681C133.091 1.16288 134.174 0.940918 135.381 0.940918C136.269 0.940918 137.148 1.06522 138.018 1.31382C138.906 1.54466 139.643 1.86429 140.229 2.27271L139.483 6.00173H139.217L138.684 4.24376C138.4 3.30263 138.027 2.6101 137.566 2.16617C137.104 1.70448 136.402 1.47363 135.461 1.47363C134.538 1.47363 133.757 1.73999 133.117 2.27271C132.496 2.80543 132.185 3.51572 132.185 4.40358C132.185 5.16714 132.389 5.85967 132.798 6.48117C133.206 7.10268 133.943 7.79521 135.009 8.55877C136.411 9.58869 137.379 10.5209 137.912 11.3555C138.462 12.1724 138.738 13.0602 138.738 14.0191C138.738 15.1556 138.453 16.1322 137.885 16.9491C137.317 17.7481 136.527 18.3696 135.515 18.8136C134.52 19.2575 133.375 19.4795 132.079 19.4795ZM139.542 19L139.595 18.7337L140.261 18.5206C140.794 18.2897 141.104 17.9079 141.193 17.3752L142.658 9.67747C142.836 8.71858 143.031 7.65315 143.244 6.48117C143.457 5.29144 143.652 4.17273 143.83 3.12506C143.937 2.50355 143.688 2.07738 143.084 1.84654L142.685 1.68672L142.738 1.42036H149.29L149.237 1.68672L148.545 1.89981C147.941 2.11289 147.586 2.52131 147.479 3.12506L146.28 9.67747H152.886C152.993 9.09148 153.108 8.42559 153.232 7.67979C153.375 6.93398 153.508 6.17042 153.632 5.3891C153.774 4.60779 153.898 3.87974 154.005 3.20496C154.111 2.53019 153.854 2.0685 153.232 1.8199L152.833 1.68672L152.886 1.42036H159.439L159.385 1.68672L158.746 1.89981C158.16 2.11289 157.805 2.52131 157.681 3.12506L156.242 10.7163C156.065 11.7107 155.878 12.7584 155.683 13.8593C155.488 14.9425 155.283 16.1056 155.07 17.3486C154.982 17.9168 155.195 18.2986 155.71 18.4939L156.322 18.7337L156.269 19H149.637L149.69 18.7337L150.462 18.4673C150.977 18.2897 151.288 17.9346 151.395 17.4019L152.753 10.2102H146.147C145.952 11.2224 145.739 12.3499 145.508 13.5929C145.295 14.8182 145.082 16.079 144.869 17.3752C144.78 17.9257 144.984 18.3075 145.481 18.5206L145.987 18.7337L145.934 19H139.542ZM165.895 19.4528C164.616 19.4528 163.48 19.1776 162.485 18.6271C161.491 18.0766 160.71 17.2598 160.141 16.1766C159.573 15.0934 159.289 13.7439 159.289 12.128C159.289 10.6541 159.52 9.2513 159.982 7.91951C160.443 6.58772 161.1 5.39798 161.953 4.35031C162.823 3.30263 163.861 2.47692 165.069 1.87317C166.294 1.26943 167.653 0.967553 169.144 0.967553C170.476 0.967553 171.639 1.26943 172.634 1.87317C173.628 2.45916 174.4 3.30263 174.951 4.40358C175.501 5.48677 175.777 6.77417 175.777 8.26577C175.777 9.75738 175.546 11.178 175.084 12.5275C174.622 13.8771 173.956 15.0757 173.086 16.1233C172.234 17.1533 171.195 17.9701 169.97 18.5738C168.762 19.1598 167.404 19.4528 165.895 19.4528ZM166.161 18.9201C166.96 18.9201 167.715 18.6271 168.425 18.0411C169.135 17.4374 169.757 16.6205 170.29 15.5906C170.84 14.543 171.266 13.3355 171.568 11.9682C171.888 10.5831 172.048 9.11812 172.048 7.57324C172.048 5.61995 171.817 4.11946 171.355 3.07178C170.893 2.02411 170.112 1.50027 169.011 1.50027C168.194 1.50027 167.422 1.79327 166.694 2.37925C165.966 2.96524 165.326 3.7732 164.776 4.80311C164.225 5.83303 163.79 7.03165 163.471 8.39895C163.151 9.7485 162.991 11.1957 162.991 12.7406C162.991 14.7294 163.24 16.2565 163.737 17.322C164.252 18.3874 165.06 18.9201 166.161 18.9201ZM175.542 19L175.596 18.7337L175.889 18.6271C176.652 18.3608 177.105 17.8458 177.247 17.0822L178.632 9.67747C178.827 8.70083 179.014 7.70642 179.191 6.69426C179.369 5.66434 179.564 4.52788 179.777 3.28487C179.902 2.55683 179.618 2.05962 178.925 1.79326L178.659 1.68672L178.712 1.42036H184.519C186.809 1.42036 188.47 1.86429 189.499 2.75216C190.547 3.62226 191.071 4.77648 191.071 6.21481C191.071 7.24473 190.769 8.2125 190.165 9.11812C189.579 10.006 188.683 10.7251 187.475 11.2756C186.285 11.8083 184.785 12.0747 182.974 12.0747H181.802C181.66 12.785 181.509 13.5752 181.349 14.4453C181.207 15.2976 181.056 16.1589 180.896 17.029C180.772 17.8458 181.091 18.3874 181.855 18.6538L182.175 18.7337L182.121 19H175.542ZM181.908 11.542H182.894C184.243 11.542 185.335 11.0625 186.17 10.1036C187.005 9.127 187.422 7.78633 187.422 6.08164C187.422 4.74984 187.155 3.7288 186.623 3.01851C186.09 2.30822 185.326 1.95308 184.332 1.95308H183.693C183.409 3.55123 183.116 5.14938 182.814 6.74753C182.512 8.34568 182.21 9.94383 181.908 11.542Z" />
                </svg>
            </div>

            <ul class="nav__list-mid">
                <li class="nav__item">
                    <a href="{{ route('home') }}" class="nav__link hover-underline-animation">Home</a>
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
        </nav>

        <!--==================== ACCOUNT ====================-->
        <div class="hero__bg">
            <h1 class="hero__title">Account</h1>
        </div>

        @if (session()->has('success'))
            <div class="pop-up__container">
                <div class="alert alert-success alert-dismissable fade show" role="alert" id="successAlert">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="pop-up__container">
                <div class="alert alert-danger alert-dismissable fade show" role="alert" id="successAlert">
                    {{ session('error') }}
                </div>
            </div>
        @endif

        <div class="account__container">
            <!-- <div class="account_content_container"> -->
            <div class="account__menu-container">
                <!-- <div class="svg_pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div> -->
                <div class="account__menu" id="detailsButton" onclick="toggleDiv('details')"
                    style="transform: translateX(2rem);">Details</div>
                <div class="account__menu" id="favoritesButton" onclick="toggleDiv('favorites')">Favorites</div>
                <div class="account__menu" id="historyButton" onclick="toggleDiv('history')">Order History</div>
                <div class="account__menu" id="settingsButton" onclick="toggleDiv('settings')">Account Settings</div>
            </div>

            <div class="details__container" id="details">
                <div class="details__top">
                    <div class="account__title">Details</div>
                    <div>
                        <div onclick="toggleEdit('editAccountForm')" class="button">
                            <div class="button__content">
                                <div>Edit</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details__subtitle">Personal Data</div>
                <div class="details_content">
                    <div class="details_description">
                        Essential information that are necessary for account registration
                        and communication.
                    </div>
                    <div class="right_section_details">
                        <div class="first_last_name">
                            <div class="information__container">
                                <div class="information__title">First Name</div>
                                <div class="information__content">{{ auth()->user()->firstName }}</div>
                            </div>
                            <div class="information__container">
                                <div class="information__title">Last Name</div>
                                <div class="information__content">{{ auth()->user()->lastName }}</div>
                            </div>
                        </div>
                        <div class="information__container">
                            <div class="information__title">Email</div>
                            <div class="information__content">{{ auth()->user()->email }}</div>
                        </div>
                    </div>
                </div>
                <div class="details__subtitle">Optional Data</div>
                <div class="details_content">
                    <div class="details_description">
                        Manage your account information. Update your details to ensure
                        better transactions.
                    </div>
                    <div class="right_section_details">
                        <div class="information__container">
                            <div class="information__title">Phone Number</div>
                            <div class="information__content information__content-empty">
                                {{ auth()->user()->phoneNumber }}</div>
                        </div>
                        <div class="information__container">
                            <div class="information__title">Date of Birth</div>
                            <div class="information__content information__content-empty">{{ auth()->user()->DOB }}
                            </div>
                        </div>
                        <div class="information__container">
                            <div class="information__title">Gender</div>
                            <div class="information__content-radio">
                                <div class="gender_radio_button">
                                    <div
                                        class="radio_button {{ auth()->user()->gender == 'Male' ? 'radio_button-selected' : '' }}">
                                        <input type="radio" id="male" value="Male"
                                            {{ auth()->user()->gender == 'Male' ? 'checked' : '' }}>
                                    </div>
                                    <div
                                        class="gender_selection_title {{ auth()->user()->gender == 'Male' ? 'gender_selection_title-selected' : '' }}">
                                        <label for="male">Male</label>
                                    </div>
                                </div>

                                <div class="gender_radio_button">
                                    <div
                                        class="radio_button {{ auth()->user()->gender == 'Female' ? 'radio_button-selected' : '' }}">
                                        <input type="radio" id="female" value="Female"
                                            {{ auth()->user()->gender == 'Female' ? 'checked' : '' }}>
                                    </div>
                                    <div
                                        class="gender_selection_title {{ auth()->user()->gender == 'Female' ? 'gender_selection_title-selected' : '' }}">
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details__subtitle">Password</div>
                <div class="details_content">
                    <div class="details_description">
                        Secure your account with a strong password to protect your data
                        and maintain account integrity.
                    </div>
                    <div class="right_section_details">
                        <div class="information__container">
                            <div class="information__title">Password</div>
                            <div class="information__content">
                                ************
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="favorites_container" id="favorites" style="display:none">
                <div class="account__title">Favorites</div>
                <div class="container__card">
                    @forelse ($favorites as $favorites)
                        @include('layouts.cardContainer')
                    @empty
                        <p>You don't have Favorite Herbs!</p>
                    @endforelse
                </div>
            </div>
            <div class="history_container" id="history" style="display:none">
                <div class="account__title">Order History</div>
            </div>
            <div class="settings_container" id="settings" style="display:none">
                <div class="account__title">Account Settings</div>
                <div class="settingsContent">
                    <div class="signOutDiv">
                        <p>Click to safely and securely sign out and protect your accounts privacy.</p>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="button">
                                <div class="button__content">
                                    <div>Sign Out</div>
                                </div>
                            </button>
                        </form>
                    </div>

                    <div class="deleteAccountDiv">
                        <p>Click to permanently remove your account and all associated data. Proceed with caution.</p>
                        <button type="button" class="button" data-bs-toggle="modal"
                            data-bs-target="#deleteConfirmationModal">
                            <div class="button__content">
                                <div>Delete Account</div>
                            </div>
                        </button>
                    </div>
                </div>

            </div>
            <!-- </div> -->
        </div>

        <img src="{{ asset('img/bottom-account.png') }}" alt="" class="img-account-bottom">
    </main>

    <!--==================== DELETE CONFIRMATION ====================-->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirmation</h5>
                </div>
                <div class="modal-body">
                    Are you sure you want to <b>delete</b> this account?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form method="POST" action="{{ route('deleteAccount') }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--==================== FOOTER ====================-->
    @include('layouts.footerLayout')

    <!--========== SCROLL UP ==========-->
    <a href="#headerHome" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>
    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/account.js') }}"></script>
    <script>
        function toggleDiv(divId) {
            var divs = ['details', 'favorites', 'history', 'settings'];
            divs.forEach(function(div) {
                var button = document.getElementById(div + "Button")
                var content = document.getElementById(div)
                if (div == divId) {
                    button.style.transform = "translateX(2rem)";
                    content.style.display = 'block';
                } else {
                    button.style.transform = "translateX(0)";
                    content.style.display = 'none';
                }
            });
        }

        function toggleEdit(divId) {
            var content = document.getElementById(divId)
            // var main = document.getElementByClass(main)
            // var hasErrors = content.querySelectorAll('.invalid-feedback').length > 0;

            if (content.style.display == 'none') {
                content.style.display = 'block'
                // main.style.opacity = .5
            } else {
                content.style.display = 'none'
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        setTimeout(function() {
            document.getElementById('successAlert').style.display = 'none';
        }, 4000);
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"> --}}
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> --}}
    </script>
</body>

</html>
