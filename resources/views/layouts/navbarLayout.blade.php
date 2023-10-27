<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Herb Shop &copy;</title>
    <link rel="stylesheet" href="{{ asset('navbar.css') }}">
</head>
<body>
    <nav>
        <div class="shop-name">THE HERB SHOP</div>
        <ul class="menu-list-tengah">
            <li><a href="{{ route('register') }}">Home</a></li>
            <li><a href="{{ route('register') }}">Herbs</a></li>
            <li><a href="{{ route('register') }}">Contact</a></li>
        </ul>
        <ul class="menu-list-kanan">
            <li><a href="{{ route('register') }}">Cart</a></li>
            <li><a href="{{ route('register') }}">Account</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>