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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-page.css') }}">

    <title>The Herb Shop</title>
</head>

<body>
    <main>
        <div class="product__container">
            <div class="product__container-left">
                <div class="product__inner-container-left">
                    <div class="product__card-img toprounded">
                        <img src="{{ asset('img/featured-img.png') }}" alt="">
                    </div>
                    <div class="button">
                        <div class="button__content">
                            <div>Add to Cart</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__container-right">
                <div>
                    <p class="product__title">Kanye West</p>
                    <p class="product__title">€ 59</p>
                    <p class="product__desc">
                        The Lullaby Flower is a truly enchanting botanical wonder. This petite, light-purple flower it
                        emits a tranquil and soothing glow when gently touched, inducing a deep slumber in those who
                        succumb to it.
                    </p>
                </div>
                <div class="funfact">
                    <p class="funfact__title caps">FUNFACT</p>
                    <p>
                        It was once considered a rare treasure in ancient civilizations, reserved for royalty and sages,
                        as they used it for regular sleep to alleviate their stress.
                    </p>
                </div>
                <div class="info" id="details">
                    <div class="info__top pointer" onClick='infoDrop("details")'>
                        <p>Details</p>
                        <div class="ri-arrow-right-up-line"></div>
                    </div>
                    <div class="info__content">
                        <div class="box details__box">
                            <div class="info__txt">
                                <p class="caps">SCIENTIFIC NAME</p>
                                <p>Lullaby Flower</p>
                            </div>
                            <div class="info__txt">
                                <p class="caps">ORIGIN</p>
                                <p>Lullaby Flower</p>
                            </div>
                            <div class="info__txt">
                                <p class="caps">COLLECTION</p>
                                <p>Lullaby Flower</p>
                            </div>
                            <div class="info__txt details__txt-bottom">
                                <p class="caps">MAGICAL PROPERTY</p>
                                <p>Lullaby Flower</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info" id="care">
                    <div class="info__top pointer" onClick='infoDrop("care")'>
                        <p>Care Instructions</p>
                        <div class="ri-arrow-right-up-line"></div>
                    </div>
                    <div class="info__content">
                        <div class="box care__box">
                            <div class="info__txt">
                                <div class="care__subtitle">
                                    <div class="ri-drop-line"></div>
                                    <p class="caps">WATERING</p>
                                </div>
                                <p>Lullaby Flower</p>
                            </div>
                            <div class="info__txt">
                                <div class="care__subtitle">
                                    <div class="ri-temp-cold-line"></div>
                                    <p class="caps">TEMPERATURE</p>
                                </div>
                                <p>Lullaby Flower</p>
                            </div>
                            <div class="info__txt">
                                <div class="care__subtitle">
                                    <div class="ri-sun-line"></div>
                                    <p class="caps">SUNLIGHT</p>
                                </div>
                                <p>Lullaby Flower</p>
                            </div>
                            <div class="info__txt">
                                <div class="care__subtitle">
                                    <div class="ri-plant-line"></div>
                                    <p class="caps">SOIL</p>
                                </div>
                                <p>Lullaby Flower</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info" id="appear">
                    <div class="info__top pointer" onClick='infoDrop("appear")'>
                        <p>Appearance</p>
                        <div class="ri-arrow-right-up-line"></div>
                    </div>
                    <div class="info__content">
                        <div class="box">
                            <p>
                                • Small and delicate, with light-purple petals. <br>
                                • Each blossom is approximately 2.5 inches in diameter. <br>
                                • Emits a faint, calming fragrance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="info" id="history">
                    <div class="info__top pointer" onClick='infoDrop("history")'>
                        <p>History</p>
                        <div class="ri-arrow-right-up-line"></div>
                    </div>
                    <div class="info__content">
                        <div class="box">
                            <p>
                                The origins of the Lullaby Flower are shrouded in mystery, with tales of its existence
                                dating back centuries. It is believed to have originated in the mystical gardens of an
                                ancient wizard, who cultivated it for its remarkable properties. The flower eventually
                                found its way into the hands of herbalists and enchanters, who treasured it for its
                                unique ability to bring a deep and peaceful slumber.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="product__end">
                    Lorem The Lullaby Flower is a truly enchanting botanical wonder. This petite, light-purple flower it
                    emits a tranquil and soothing glow when gently touched, inducing a deep slumber in those who succumb
                    to it.
                    It was once considered a rare treasure in ancient civilizations, reserved for royalty and sages, as
                    they used it for regular sleep to alleviate their stress.
                </p>
            </div>
        </div>
        <div class="quote">
            <p>
                The Lullaby Flower is a truly enchanting botanical wonder. This petite, light-purple flower it emits a
                tranquil and soothing glow when gently touched, inducing a deep slumber in those who succumb to it.
            </p>
        </div>
        <section class="advantages">
            <div class="advantages__container">
                <img src="{{ asset('img/icon/lucide_phone-call.png') }}" alt="" class="advantages__icon-img">

                <div class="advantages__title">
                    Ready Support
                </div>

                <div class="advantages__subtitle">
                    Full 24 hours ready to help contact support
                    on +93 420 7484848
                </div>
            </div>

            <div class="advantages__container">
                <img src="{{ asset('img/icon/lucide_truck.png') }}" alt="" class="advantages__icon-img">

                <div class="advantages__title">
                    Free Shipping
                </div>

                <div class="advantages__subtitle">
                    Get free shipping for orders that prices
                    over € 160
                </div>
            </div>

            <div class="advantages__container">
                <img src="{{ asset('img/icon/lucide_badge-check.png') }}" alt="" class="advantages__icon-img">

                <div class="advantages__title">
                    Guarantee
                </div>

                <div class="advantages__subtitle">
                    Will replace the plant for free if it dies
                    within 30 days
                </div>
            </div>

            <div class="advantages__container">
                <img src="{{ asset('img/icon/lucide_award.png') }}" alt="" class="advantages__icon-img">

                <div class="advantages__title">
                    Awards Winning
                </div>

                <div class="advantages__subtitle">
                    Multiple plants has won plant related awards
                </div>
            </div>
        </section>
        <section class="featured">
            <h1 class="featured__title">YOU MIGHT ALSO LIKE</h1>

            <div class="container__card">
                <div class="product__card toprounded">
                    <div class="product__card-img toprounded">
                        <img src="{{ asset('img/featured-img.png') }}" alt="">
                    </div>
                    <p>
                        Faerie Dust
                    </p>
                    <p>
                        € 59
                    </p>
                </div>

                <div class="product__card toprounded">
                    <div class="product__card-img toprounded">
                        <img src="{{ asset('img/featured-img.png') }}" alt="">
                    </div>
                    <p>
                        Faerie Dust
                    </p>
                    <p>
                        € 59
                    </p>
                </div>

                <div class="product__card toprounded">
                    <div class="product__card-img toprounded">
                        <img src="{{ asset('img/featured-img.png') }}" alt="">
                    </div>
                    <p>
                        Faerie Dust
                    </p>
                    <p>
                        € 59
                    </p>
                </div>

                <div class="product__card toprounded">
                    <div class="product__card-img toprounded">
                        <img src="{{ asset('img/featured-img.png') }}" alt="">
                    </div>
                    <p>
                        Faerie Dust
                    </p>
                    <p>
                        € 59
                    </p>
                </div>

                <div class="product__card toprounded">
                    <div class="product__card-img toprounded">
                        <img src="{{ asset('img/featured-img.png') }}" alt="">
                    </div>
                    <p>
                        Faerie Dust
                    </p>
                    <p>
                        € 59
                    </p>
                </div>
            </div>
        </section>
    </main>
    <script>
        const infoDrop = (infoPicked) => {
            console.log('henlo')
            var infoContent = document.getElementById(infoPicked)
            infoContent.toggleAttribute("show");
        }
    </script>
</body>

</html>
