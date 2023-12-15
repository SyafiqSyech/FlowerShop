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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>The Herb Shop &copy;</title>
</head>

<body>
    <div onclick="window.location='{{ route('show', ['id' => isset($featuredHerbs) ? $featuredHerbs->herbsId : (isset($youMightAlsoLike) ? $youMightAlsoLike->herbsId : (isset($favorite) ? $favorite->herbsId : $herb->herbsId))]) }}';"
        class="product__card toprounded">
        <div class="product__card-img toprounded">
            <img src="{{ asset(isset($featuredHerbs) ? $featuredHerbs->herbsImage : (isset($youMightAlsoLike) ? $youMightAlsoLike->herbsImage : (isset($favorite) ? $favorite->herbsImage : $herb->herbsImage))) }}"
                alt="">
        </div>
        <p>
            {{ isset($featuredHerbs) ? $featuredHerbs->herbName : (isset($youMightAlsoLike) ? $youMightAlsoLike->herbName : (isset($favorite) ? $favorite->herbName : $herb->herbName)) }}
        </p>
        <p>
            € {{ number_format(isset($featuredHerbs) ? $featuredHerbs->herbPrice : (isset($youMightAlsoLike) ? $youMightAlsoLike->herbPrice : (isset($favorite) ? $favorite->herbPrice : $herb->herbPrice))) }}
        </p>
    </div>


</body>

</html>
