<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== WEBSITE LOGO =========-->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

    <!--=============== CSS BOOTSTRAP ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <title>The Herb Shop &copy;</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    @include('layouts.navbarLayout')

        <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__background-pict" id="home__bg-pict"></div>

            <h1 class="home__title">GROW MAGIC</h1>

            <p class="home__subtitle">
                At The Herb Shop, we cultivate the mystical and the
                extraordinary. Explore our enchanted collection of <br> magical
                herbs and uncover the essence of wonder.
            </p>

            <div class="button__container">
                <button class="home__discover button">
                    Discover Nature’s Arcane
                    <i class="ri-arrow-right-up-line"></i>
                </button>
            </div>
        </section>

        <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <h1 class="featured__title">FEATURED</h1>

            <div class="featured__container">
                <div class="featured__container-each">
                    <div class="featured__image">
                        <img src="{{ asset('assets/featured-img.png') }}" alt="" class="featured__img">
                    </div>

                    <p class="featured__herb-name">
                        Faerie Dust
                    </p>

                    <p class="featured__herb-price">
                        € 59
                    </p>
                </div>

                <div class="featured__container-each">
                    <div class="featured__image">
                        <img src="{{ asset('assets/featured-img.png') }}" alt="" class="featured__img">
                    </div>

                    <p class="featured__herb-name">
                        Faerie Dust
                    </p>

                    <p class="featured__herb-price">
                        € 59
                    </p>
                </div>

                <div class="featured__container-each">
                    <div class="featured__image">
                        <img src="{{ asset('assets/featured-img.png') }}" alt="" class="featured__img">
                    </div>

                    <p class="featured__herb-name">
                        Faerie Dust
                    </p>

                    <p class="featured__herb-price">
                        € 59
                    </p>
                </div>
            </div>

            <div class="featured__button-container">
                <button class="featured__button button">
                    See More
                    <i class="ri-arrow-right-up-line"></i>
                </button>
            </div>
        </section>

        <!--==================== NEW COLLECTION ====================-->
        <section class="new__collection section" id="new-collection">
            <!--==================== LEFT ====================-->
            <div class="left__container">
                <div class="newcollect__image-background"></div>

                <div class="newcollect__image">
                    <img src="{{ asset('assets/newcollect-pict.png') }}" alt="" class="newcollect__img">
                </div>
            </div>

            <!--==================== RIGHT ====================-->
            <div class="right__container">
                <div class="newcollect__title">
                    <p class="newcollect__small-title">
                        ALL NEW
                    </p>

                    <h1 class="newcollect__big-title">
                        SWIFTGROW
                    </h1>
                </div>

                <div class="newcollect__para">
                    <p class="newcollect__text">
                        For those seeking fast results and quick enchantment, <br>
                        our Swiftgrow Herb Collection is the answer. These <br>
                        small wonders of nature are not only quick to grow <br>
                        but also fast to use, making them ideal companions <br>
                        for those who desire instant magic. Experience the <br>
                        power of nature's agility with Swiftgrow herbs. <br>
                    </p>
                </div>

                <div class="newcollect__button-container">
                    <button class="newcollect__button button">
                        Discover
                        <i class="ri-arrow-right-up-line"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== COLLECTIONS ====================-->
        <section class="collection section" id="collection">
            <h1 class="collection__title">COLLECTIONS</h1>

            <div class="collection__container">
                <div class="collection__container-each-1">
                    <div class="collection__image">
                        <img src="{{ asset('assets/collection-exotic.png') }}" alt=""
                            class="collection__img">
                    </div>

                    <p class="collection__herb-name">
                        EXOTIC
                    </p>

                    <p class="collection__herb-explanation">
                        Immerse yourself in the enchanting <br>
                        world of rare and mystical herbs, <br>
                        handpicked from the far corners of the <br>
                        earth, offering extraordinary qualities <br>
                        and untold wonders. <br>
                    </p>

                    <div class="collection__button-container">
                        <button class="collection__button-1 button">
                            Explore
                            <i class="ri-arrow-right-up-line"></i>
                        </button>
                    </div>
                </div>

                <div class="collection__container-each-2">
                    <div class="collection__image">
                        <img src="{{ asset('assets/collection-swiftgrow.png') }}" alt=""
                            class="collection__img">
                    </div>

                    <p class="collection__herb-name">
                        SWIFTGROW
                    </p>

                    <!-- <p class="collection__herb-name-new">
                        NEW
                    </p> -->

                    <p class="collection__herb-explanation">
                        Experience the magic of nature's <br>
                        efficiency with our SwiftGrow herbs – <br>
                        small, swift to cultivate, and quick to <br>
                        manifest their remarkable properties for <br>
                        your needs. <br>
                    </p>

                    <div class="collection__button-container">
                        <button class="collection__button-2 button">
                            Explore
                            <i class="ri-arrow-right-up-line"></i>
                        </button>
                    </div>
                </div>

                <div class="collection__container-each-3">
                    <div class="collection__image">
                        <img src="{{ asset('assets/collection-alchemical.png') }}" alt=""
                            class="collection__img">
                    </div>

                    <p class="collection__herb-name">
                        ALCHEMICAL
                    </p>

                    <p class="collection__herb-explanation">
                        Craft potions and elixirs like a true <br>
                        sorcerer. Our alchemical herbs possess <br>
                        ystical properties, waiting to be <br>
                        harnessed for your mystical <br>
                        experiments. <br>
                    </p>

                    <div class="collection__button-container">
                        <button class="collection__button-3 button">
                            Explore
                            <i class="ri-arrow-right-up-line"></i>
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <!--==================== TESTIMONY CAROUSEL ====================-->
        <section class="testimony__carousel section" id="testimony-carousel">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators" id="bs__overides-carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1" id="carousel__button"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2" id="carousel__button"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3" id="carousel__button"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/testimony-pict.png') }}" class="d-block w-100"
                            id="testimony__carousel-img-1" alt="...">
                        <div class="carousel-caption d-none d-md-block" id="bs__overides-carousel-caption-1">
                            <h5 class="carousel__name">GANDALF THE GREY</h5>
                            <p class="carousel__testimony-para">
                                Through the winding paths of Middle-earth, I have sought wisdom and power. The <br>
                                herbs from The Herb Shop are nothing short of magical, a true source of enchantment.
                                <br>
                                They have been a trusted companion on my journey. <br>
                            </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/testimony-pict.png') }}" class="d-block w-100"
                            id="testimony__carousel-img-2 alt="...">
                        <div class="carousel-caption d-none d-md-block" id="bs__overides-carousel-caption-2">
                            <h5 class="carousel__name">SYAFIQ THE HOBBIT</h5>
                            <p class="carousel__testimony-para">
                                Through the winding paths of Middle-earth, I have sought wisdom and power. The <br>
                                herbs from The Herb Shop are nothing short of magical, a true source of enchantment.
                                <br>
                                They have been a trusted companion on my journey. <br>
                            </p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/testimony-pict.png') }}" class="d-block w-100"
                            id="testimony__carousel-img-3 alt="...">
                        <div class="carousel-caption d-none d-md-block" id="bs__overides-carousel-caption-3">
                            <h5 class="carousel__name">MATT THE EXECUTOR</h5>
                            <p class="carousel__testimony-para">
                                Through the winding paths of Middle-earth, I have sought wisdom and power. The <br>
                                herbs from The Herb Shop are nothing short of magical, a true source of enchantment.
                                <br>
                                They have been a trusted companion on my journey. <br>
                            </p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!--==================== ADVANTAGES ====================-->
        <section class="advantages section" id="advatages">
            <div class="advantages__container">
                <div class="advantages__each">
                    <div class="advantages__icon">
                        <img src="{{ asset('assets/icon/lucide_phone-call.png') }}" alt=""
                            class="advantages__icon-img">
                    </div>

                    <div class="advantages__title">
                        Ready Support
                    </div>

                    <div class="advantages__subtitle">
                        Full 24 hours ready to help contact support <br>
                        on +93 420 7484848
                    </div>
                </div>

                <div class="advantages__each">
                    <div class="advantages__icon">
                        <img src="{{ asset('assets/icon/lucide_truck.png') }}" alt=""
                            class="advantages__icon-img">
                    </div>

                    <div class="advantages__title">
                        Free Shipping
                    </div>

                    <div class="advantages__subtitle">
                        Get free shipping for orders that prices <br>
                        over € 160
                    </div>
                </div>

                <div class="advantages__each">
                    <div class="advantages__icon">
                        <img src="{{ asset('assets/icon/lucide_badge-check.png') }}" alt=""
                            class="advantages__icon-img">
                    </div>

                    <div class="advantages__title">
                        Guarantee
                    </div>

                    <div class="advantages__subtitle">
                        Will replace the plant for free if it dies <br>
                        within 30 days
                    </div>
                </div>

                <div class="advantages__each">
                    <div class="advantages__icon">
                        <img src="{{ asset('assets/icon/lucide_award.png') }}" alt=""
                            class="advantages__icon-img">
                    </div>

                    <div class="advantages__title">
                        Awards Winning
                    </div>

                    <div class="advantages__subtitle">
                        Multiple plants has won plant related awards
                    </div>
                </div>
            </div>
        </section>

        <!--==================== OUR STORY ====================-->
        <section class="ourStory section" id="ourStory">
            <div class="ourStory__container">
                <div class="ourStory__frame-container">
                    <div class="ourStory__image">
                        <img src="{{ asset('assets/ourStory-pict.png') }}" alt="" class="ourStory__img">

                        <div class="ourStory__shop-title">
                            <h1 class="oS__the">THE</h1>
                            <h1 class="oS__herb">HERB</h1>
                            <h1 class="oS__shop">SHOP</h1>
                        </div>
                    </div>
                </div>

                <div class="ourStory__right-container">
                    <h1 class="ourStory__text-title">
                        OUR<br>STORY
                    </h1>

                    <p class="ourStory__text">
                        For generations, The Herb Shop has been a <br>
                        purveyor of the finest magical herbs in all <br>
                        of the four corners of the world. The <br>
                        whispers of enchantment and the aroma of <br>
                        potent herbs have guided us through the <br>
                        ages, passing down knowledge hidden from <br>
                        the ordinary world. <br>
                    </p>

                    <div class="ourStory__button-container">
                        <button class="ourStory__btn button">
                            Learn More
                            <i class="ri-arrow-right-up-line"></i>
                        </button>
                    </div>
                </div>
            </div>


        </section>

    </main>

   
    <!--==================== FOOTER ====================-->
    @include('layouts.footerLayout')
   
    <!--========== SCROLL UP ==========-->
    <a href="#home__bg-pict" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>
    

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/landing-page.js') }}"></script>

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
