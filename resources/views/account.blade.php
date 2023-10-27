<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Herb Shop &copy;</title>
</head>
<body>
    @extends('layouts.navbarLayout')

    @section('content')
        <header>
            <img src="{{ asset('assets/marek-piwnicki-sU_kKMURZbA-unsplash 1.png') }}" alt="" class="background-img">
            <h1>ACCOUNT</h1>
        </header>
        
        <nav>
            <ul>
                <li><a href="#">Details</a></li>
                <li><a href="#">Favorites</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">Account Settings</a></li>
                
              </ul>
        </nav>

        <main>
            <h3>DETAILS</h3>
            <br>
            <div class="personal-data">
                <h5>PERSONAL DATA</h5>
                <div class="line"></div>
                <h5>Essential information that are necessary for account registration and communication</h5>
                <div class="personal-data-details">
                    <h6>First Name</h6>
                    
                    <h6>Last Name</h6>
                    <h6>Email</h6>
                </div>
            </div>

        </main>
    @endsection
</body>
</html>