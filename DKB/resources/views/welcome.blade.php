


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desalech Kitfo Bet Food Delivery System</title>
    <meta name="title" content="Desalech Kitfo Bet - Amazing & Delicious Food">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preload" as="image" href="{{ asset('images/hero-slider-1.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/hero-slider-2.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/hero-slider-3.jpg') }}">

</head>

<body id="top">
    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Desalech Kitfo Bet</p>
    </div>

    <div class="topbar">
        <div class="container">

            <address class="topbar-item">
                <div class="icon">
                    <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">
                    Desalech Kitfo Bet , Harar, Ethiopia
                </span>
            </address>

            <div class="separator"></div>

            <div class="topbar-item item-2">
                <div class="icon">
                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">Daily :7.00 am to 12.00 pm</span>
            </div>

            <a href="tel:+251970739809" class="topbar-item link">
                <div class="icon">
                    <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">+251943072122</span>
            </a>

            <div class="separator"></div>

            <a href="mailto:daniyoman1993@gmail.com" class="topbar-item link">
                <div class="icon">
                    <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">DesalechKitfoBet@restaurant.com</span>
            </a>

        </div>
    </div>
    <!-- #HEADER -->
    <header class="header" darta-header>
        <div class="container">

            <img src="./images/logo.png" alt="penta-A - Dashboard" class="logo">

            <nav class="navbar" data-navbar>
                <button class="close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="#home" class="navbar-link hover-underline active">
                            <div class="separator"></div>
                            <span class="span">Home</span>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="#menu" class="navbar-link hover-underline">
                            <div class="separator"></div>
                            <span class="span">Menus</span>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="#about" class="navbar-link hover-underline">
                            <div class="separator"></div>
                            <span class="span">About Us</span>
                        </a>
                    </li>
                    <!-- <li class="navbar-item">
                        <a href="#" class="navbar-link hover-underline">
                            <div class="separator"></div>
                            <span class="span">Our Chefs</span>
                        </a>
                    </li> -->
                    <li class="navbar-item">
                        <a href="#footer" class="navbar-link hover-underline">
                            <div class="separator"></div>
                            <span class="span">Contact</span>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('login') }}" class="navbar-link hover-underline">
                            <div class="separator"></div>

                            <span class="span">Login</span>
                        </a>
                    </li>

                    <li class="navbar-item">
                        <a href="{{ route('register') }}" class="navbar-link hover-underline">
                            <div class="separator"></div>

                            <span class="span">Register</span>
                        </a>
                    </li>


                   
                </ul>
            </nav>

        </div>
    </header>
    <main>
        <article>
            <!-- #HERO -->

            <section class="hero text-center" aria-label="home" id="home">

                <ul class="hero-slider" data-hero-slider>

                    <li class="slider-item active" data-hero-slider-item>

                        <div class="slider-bg">
                            <img src="./images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
                        </div>

                        <p class="label-2 section-subtitle slider-reveal">Tradational & Hygine</p>

                        <h1 class="display-1 hero-title slider-reveal">
                            For the love of <br>
                            delicious food
                        </h1>

                        <p class="body-2 hero-text slider-reveal">
                            Come with family & feel the joy of mouthwatering food
                        </p>

                        <a href="#menu" class="btn btn-primary slider-reveal">
                            <span class="text text-1">View Our Menu</span>

                            <span class="text text-2" aria-hidden="true">View Our Menu</span>
                        </a>

                    </li>

                    <li class="slider-item" data-hero-slider-item>

                        <div class="slider-bg">
                            <img src="./images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
                        </div>

                        <p class="label-2 section-subtitle slider-reveal">delightful experience</p>

                        <h1 class="display-1 hero-title slider-reveal">
                            Flavors Inspired by <br>
                            the Seasons
                        </h1>

                        <p class="body-2 hero-text slider-reveal">
                            Come with family & feel the joy of mouthwatering food
                        </p>

                        <a href="#menu" class="btn btn-primary slider-reveal">
                            <span class="text text-1">View Our Menu</span>

                            <span class="text text-2" aria-hidden="true">View Our Menu</span>
                        </a>

                    </li>

                    <li class="slider-item" data-hero-slider-item>

                        <div class="slider-bg">
                            <img src="./images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
                        </div>

                        <p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>

                        <h1 class="display-1 hero-title slider-reveal">
                            Where every flavor <br>
                            tells a story
                        </h1>

                        <p class="body-2 hero-text slider-reveal">
                            Come with your family & feel the joy of mouthwatering food
                        </p>

                        <a href="#menu" class="btn btn-primary slider-reveal">
                            <span class="text text-1">View Our Menu</span>

                            <span class="text text-2" aria-hidden="true">View Our Menu</span>
                        </a>

                    </li>

                </ul>

                <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
                    <ion-icon name="chevron-back"></ion-icon>
                </button>

                <button class="slider-btn next" aria-label="slide to next" data-next-btn>
                    <ion-icon name="chevron-forward"></ion-icon>
                </button>

                <a href="#" class="hero-btn has-after">
                    <img src="./images/hero-icon.png" width="48" height="48" alt="booking icon">

                    <span class="label-2 text-center span">Book A Table</span>
                </a>

            </section>
            <!-- #SERVICE -->

            <section class="section service bg-black-10 text-center" aria-label="service">
                <div class="container">

                    <p class="section-subtitle label-2">Flavors For Royalty</p>

                    <h2 class="headline-1 section-title">We Offer Top Notch</h2>

                    <p class="section-text">
                        we give a better service for VIP level exellence.
                    </p>

                    <ul class="grid-list">

                        <li>
                            <div class="service-card">

                                <a href="#" class="has-before hover:shine">
                                    <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                        <img src="./images/service-1.jpg" width="285" height="336" loading="lazy" alt="Breakfast" class="img-cover">
                                    </figure>
                                </a>

                                <div class="card-content">

                                    <h3 class="title-4 card-title">
                                        <a href="#">Breakfast</a>
                                    </h3>

                                    <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <a href="#" class="has-before hover:shine">
                                    <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                        <img src="./images/service-2.jpg" width="285" height="336" loading="lazy" alt="Appetizers" class="img-cover">
                                    </figure>
                                </a>

                                <div class="card-content">

                                    <h3 class="title-4 card-title">
                                        <a href="#">Appetizers</a>
                                    </h3>

                                    <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <a href="#" class="has-before hover:shine">
                                    <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                                        <img src="./images/service-3.jpg" width="285" height="336" loading="lazy" alt="Drinks" class="img-cover">
                                    </figure>
                                </a>

                                <div class="card-content">

                                    <h3 class="title-4 card-title">
                                        <a href="#">Drinks</a>
                                    </h3>

                                    <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                                </div>

                            </div>
                        </li>

                    </ul>

                    <img src="./images/shape-1.png" width="246" height="412" loading="lazy" alt="shape" class="shape shape-1 move-anim">
                    <img src="./images/shape-2.png" width="343" height="345" loading="lazy" alt="shape" class="shape shape-2 move-anim">

                </div>
            </section>

            <!-- #ABOUT
 -->
            <section class="section about text-center" aria-labelledby="about-label" id="about">
                <div class="container">

                    <div class="about-content">

                        <p class="label-2 section-subtitle" id="about-label">Our Story</p>

                        <h2 class="headline-1 section-title">Every Flavor Tells a Story</h2>

                        <p class="section-text">
                            Desalech Kitfo Bet started their work was 2003.<br>
                            when the restaurant start work was with some man power <br>
                            and with small capital.Now the restaurant captial increase highly <br>
                            and the restaurant services also increase parallaly.
                        </p>

                        <div class="contact-label">Book Through Call</div>

                        <a href="tel:+251 970739809" class="body-1 contact-number hover-underline">+251943072122</a>

                        <a href="#" class="btn btn-primary">
                            <span class="text text-1">Read More</span>

                            <span class="text text-2" aria-hidden="true">Read More</span>
                        </a>

                    </div>

                    <figure class="about-banner">

                        <img src="./images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner" class="w-100" data-parallax-item data-parallax-speed="1">
                        <div class="abs-img abs-img-2 has-before">
                            <img src="./images/badge-2.png" width="133" height="134" loading="lazy" alt="">
                        </div>

                    </figure>

                    <img src="./images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

                </div>
            </section>

            <!-- #SPECIAL DISH -->

            <section class="special-dish text-center" aria-labelledby="dish-label">

                <div class="special-dish-banner">
                    <img src="./images/special-dish-banner.jpg" width="940" height="900" loading="lazy" alt="special dish" class="img-cover">
                </div>

                <div class="special-dish-content bg-black-10">
                    <div class="container">

                        <img src="./images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

                        <p class="section-subtitle label-2">Special Dish</p>

                        <h2 class="headline-1 section-title">KURT</h2>

                        <p class="section-text">
                            Kurt is Tradational food in ethiopia which is prepared by raw meat and different species of pepper.
                        </p>

                        <div class="wrapper">
                            <del class="del body-3">1000 Birr</del>

                            <span class="span body-1">1000 Birr</span>
                        </div>

                        <a href="#menu" class="btn btn-primary">
                            <span class="text text-1">View All Menu</span>

                            <span class="text text-2" aria-hidden="true">View All Menu</span>
                        </a>

                    </div>
                </div>

                <img src="./images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

                <img src="./images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

            </section>

            <!-- #MENU -->

            <section class="section menu" aria-label="menu-label" id="menu">
                <div class="container">

                    <p class="section-subtitle text-center label-2">Special Selection</p>

                    <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="menu-card hover:card">

                                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                    <img src="./images/menu-1.png" width="10" height="10" loading="lazy" alt="Greek Salad" class="img-cover">
                                </figure>

                                <div>

                                    <div class="title-wrapper">
                                        <h3 class="title-3">
                                            <a href="#" class="card-title">KITFO</a>
                                        </h3>
                                        <span class="span title-2">1000 Birr</span>
                                    </div>

                                    <p class="card-text label-1">
                                        Meat, red bell pepper, sliced cucumber onion, olives.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="menu-card hover:card">

                                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                    <img src="./images/menu-2.png" width="100" height="100" loading="lazy" alt="Lasagne" class="img-cover">
                                </figure>

                                <div>

                                    <div class="title-wrapper">
                                        <h3 class="title-3">
                                            <a href="#" class="card-title">Tibs</a>
                                        </h3>

                                        <span class="span title-2">800 Birr</span>
                                    </div>

                                    <p class="card-text label-1">
                                         ground meats
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="menu-card hover:card">

                                <figure class="card-banner img-holder" style="--width: 20px; --height: 100px;">
                                    <img src="./images/meat.jpeg" width="50px" height="50px" loading="lazy" alt="Butternut Pumpkin" class="img-cover">
                                </figure>

                                <div>

                                    <div class="title-wrapper">
                                        <h3 class="title-3">
                                            <a href="#" class="card-title">KURT</a>
                                        </h3>

                                        <span class="span title-2">500 Birr</span>
                                    </div>

                                    <p class="card-text label-1">
                                        Raw Meat and peppers.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="menu-card hover:card">

                                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                    <img src="./images/menu-1.png" width="100" height="100" loading="lazy" alt="devloper" class="img-cover">
                                </figure>

                                <div>

                                    <div class="title-wrapper">
                                        <h3 class="title-3">
                                            <a href="#" class="card-title">Special Kitfo</a>
                                        </h3>
                                        <span class="span title-2">1500 Birr</span>
                                    </div>

                                    <p class="card-text label-1">
                                        Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="menu-card hover:card">

                                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                    <img src="./images/service-3.jpg" width="100" height="100" loading="lazy" alt="Olivas Rellenas" class="img-cover">
                                </figure>

                                <div>

                                    <div class="title-wrapper">
                                        <h3 class="title-3">
                                            <a href="#" class="card-title">Drinks</a>
                                        </h3>

                                        <span class="span title-2">50 Birr</span>
                                    </div>

                                    <p class="card-text label-1">
                                        Tej                                    </p>

                                </div>

                            </div>
                        </li>
 
                        <li>
                            <div class="menu-card hover:card">

                                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                    <img src="./images/menu-6.png" width="100" height="100" loading="lazy" alt="Opu Fish" class="img-cover">
                                </figure>

                                <div>

                                    <div class="title-wrapper">
                                        <h3 class="title-3">
                                            <a href="#" class="card-title">Chikina Tibs</a>
                                        </h3>

                                        <span class="span title-2">700 Birr</span>
                                    </div>

                                    <p class="card-text label-1">
                                        Vegetables, cheeses, ground meats, seasonings and spices
                                    </p>

                                </div>

                            </div>
                        </li>

                    </ul>

                    <p class="menu-text text-center">
                        During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
                    </p>

                    <a href="#menu" class="btn btn-primary">
                        <span class="text text-1">View All Menu</span>

                        <span class="text text-2" aria-hidden="true">View All Menu</span>
                    </a>

                    <img src="./images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape" class="shape shape-2 move-anim">
                    <img src="./images/shape-6.png" width="343" height="345" loading="lazy" alt="shape" class="shape shape-3 move-anim">

                </div>
            </section>

            <!-- #RESERVATION -->

            <section class="reservation">
                <div class="container">

                    <div class="form reservation-form bg-black-10">

                        <form href="http://127.0.0.1:8000/register" class="form-left">

                            <h2 class="headline-1 text-center">Online Reservation</h2>

                            <p class="form-text text-center">
                                Booking request <a href="tel:+88123123456" class="link">+251943072122</a>
                                or fill out the order form
                            </p>

                            <div class="input-wrapper">
                                <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field">

                                <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field">
                            </div>

                            <div class="input-wrapper">

                                <div class="icon-wrapper">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                    <select name="person" class="input-field">
                                        <option value="1-person">1 Person</option>
                                        <option value="2-person">2 Person</option>
                                        <option value="3-person">3 Person</option>
                                        <option value="4-person">4 Person</option>
                                        <option value="5-person">5 Person</option>
                                        <option value="6-person">6 Person</option>
                                        <option value="7-person">7 Person</option>
                                    </select>

                                    <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                                </div>

                                <div class="icon-wrapper">
                                    <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                                    <input type="date" name="reservation-date" class="input-field">

                                    <ion-icon name="chevron-down" aria-hidden="false"></ion-icon>
                                </div>

                                <div class="icon-wrapper">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <select name="person" class="input-field">
                                        <option value="08:00am">08 : 00 am</option>
                                        <option value="09:00am">09 : 00 am</option>
                                        <option value="10:00am">10 : 00 am</option>
                                        <option value="11:00am">11 : 00 am</option>
                                        <option value="12:00am">12 : 00 am</option>
                                        <option value="01:00pm">01 : 00 pm</option>
                                        <option value="02:00pm">02 : 00 pm</option>
                                        <option value="03:00pm">03 : 00 pm</option>
                                        <option value="04:00pm">04 : 00 pm</option>
                                        <option value="05:00pm">05 : 00 pm</option>
                                        <option value="06:00pm">06 : 00 pm</option>
                                        <option value="07:00pm">07 : 00 pm</option>
                                        <option value="08:00pm">08 : 00 pm</option>
                                        <option value="09:00pm">09 : 00 pm</option>
                                        <option value="10:00pm">10 : 00 pm</option>
                                    </select>

                                    <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                                </div>

                            </div>

                            <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

                            <button type="submit" class="btn btn-secondary"><a href="http://127.0.0.1:8000/register">Submit</a></button>
                            <button type="submit"></button>

                        </form>

                        <div class="form-right text-center" style="background-image: url('./images/form-pattern.png')">

                            <h2 class="headline-1 text-center">Contact Us</h2>

                            <p class="contact-label">Booking Request</p>

                            <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+251943072122</a>

                            <div class="separator"></div>

                            <p class="contact-label">Location</p>

                            <address class="body-4">
                                Desalech Kitfo Bet <br>
                                Harar, Ethiopia
                            </address>

                            <p class="contact-label">Lunch Time</p>

                            <p class="body-4">
                                Monday to Sunday <br>
                                11.00 am - 2.30pm
                            </p>

                            <p class="contact-label">Dinner Time</p>

                            <p class="body-4">
                                Monday to Sunday <br>
                                05.00 pm - 10.00pm
                            </p>

                        </div>

                    </div>

                </div>
            </section>



            <!-- - #FEATURES
       -->

            <section class="section features text-center" aria-label="features">
                <div class="container">

                    <p class="section-subtitle label-2">Why Choose Us</p>

                    <h2 class="headline-1 section-title">Our Strength</h2>

                    <ul class="grid-list">

                        <li class="feature-item">
                            <div class="feature-card">

                                <div class="card-icon">
                                    <img src="./images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
                                </div>

                                <h3 class="title-2 card-title">Hygienic Food</h3>

                                <p class="label-1 card-text">We have good quality food with better service.</p>

                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="feature-card">

                                <div class="card-icon">
                                    <img src="./images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
                                </div>

                                <h3 class="title-2 card-title">Fresh Environment</h3>

                                <p class="label-1 card-text">Our enviroment preferd for refresh .</p>

                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="feature-card">

                                <div class="card-icon">
                                    <img src="./images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
                                </div>

                                <h3 class="title-2 card-title">Skilled Chefs</h3>

                                <p class="label-1 card-text">Oure skilled chef give good service for custemers.</p>

                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="feature-card">

                                <div class="card-icon">
                                    <img src="./images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
                                </div>

                                <h3 class="title-2 card-title">Event & Party</h3>

                                <p class="label-1 card-text">You can reserve at the weekend our restaurant for event.</p>

                            </div>
                        </li>

                    </ul>

                    <img src="./images/shape-7.png" width="208" height="178" loading="lazy" alt="shape" class="shape shape-1">

                    <img src="./images/shape-8.png" width="120" height="115" loading="lazy" alt="shape" class="shape shape-2">

                </div>
            </section>
            <!-- 
        - #EVENT -->

            <section class="section event bg-black-10" aria-label="event">
                <div class="container">

                    <p class="section-subtitle label-2 text-center">Recent Updates</p>

                    <h2 class="section-title headline-1 text-center">Upcoming Event</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="./images/event-1.jpg" width="350" height="450" loading="lazy" alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                                    <time class="publish-date label-2" datetime="2022-09-15">15/12/2023</time>
                                </div>

                                <div class="card-content">
                                    <p class="card-subtitle label-2 text-center">Food, Flavour</p>

                                    <h3 class="card-title title-2 text-center">
                                        Flavour so good you’ll try to eat with your eyes.
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="./images/event-2.jpg" width="350" height="450" loading="lazy" alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                                    <time class="publish-date label-2" datetime="2022-09-08">15/12/2023</time>
                                </div>

                                <div class="card-content">
                                    <p class="card-subtitle label-2 text-center">Healthy Food</p>

                                    <h3 class="card-title title-2 text-center">
                                        Flavour so good you’ll try to eat with your eyes.
                                    </h3>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card has-before hover:shine">

                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="./images/event-3.jpg" width="350" height="450" loading="lazy" alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                                    <time class="publish-date label-2" datetime="2022-09-03">03/09/2024</time>
                                </div>

                                <div class="card-content">
                                    <p class="card-subtitle label-2 text-center">Recipie</p>

                                    <h3 class="card-title title-2 text-center">
                                        Flavour so good you’ll try to eat with your eyes.
                                    </h3>
                                </div>

                            </div>
                        </li>

                    </ul>

                    <a href="#" class="btn btn-primary">
                        <span class="text text-1">View Our Blog</span>

                        <span class="text text-2" aria-hidden="true">View Our Blog</span>
                    </a>

                </div>
            </section>

        </article>
    </main>

    <!-- #FOOTER -->

    <footer id="footer" class="footer section has-bg-image text-center" style="background-image: url('./images/footer-bg.jpg')">
        <div class="container">

            <div class="footer-top grid-list">

                <div class="footer-brand has-before has-after">

                    <a href="#" class="logo">
                        <img src="./images/logo.png" width="160" height="50" loading="lazy" alt="Desalech Kitfo Bet  HOME">
                    </a>

                    <address class="body-4">
                        Desalech Kitfo Bet, Harar, Ethiopia
                    </address>

                    <a href="mailto:daniyoman1993@gmail.com" class="body-4 contact-link">DesalechKitfoBet@restaurant.com</a>

                    <a href="tel:+251943072122" class="body-4 contact-link">Booking Request : +251943072122</a>

                    <p class="body-4">
                        Open : 09:00 am - 01:00 pm
                    </p>

                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>

                    <p class="title-1">Get News & Offers</p>

                    <p class="label-1">
                        Subscribe us & Get <span class="span">25% Off.</span>
                    </p>

                    <form action="" class="input-wrapper">
                        <div class="icon-wrapper">
                            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                            <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
                        </div>

                        <button type="submit" class="btn btn-secondary">
                            <span class="text text-1">Subscribe</span>

                            <span class="text text-2" aria-hidden="true">Subscribe</span>
                        </button>
                    </form>

                </div>

                <ul class="footer-list">

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Dashboard</a>
                    </li>

                    <li>
                        <a href="#menu" class="label-2 footer-link hover-underline">Menus</a>
                    </li>

                    <li>
                        <a href="#about" class="label-2 footer-link hover-underline">About Us</a>
                    </li>

                    <li>
                        <a href="#ourchefs" class="label-2 footer-link hover-underline">Our Chefs</a>
                    </li>

                    <li>
                        <a href="#footer" class="label-2 footer-link hover-underline">Contact</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
                    </li>

                </ul>

            </div>

            <div class="footer-bottom">

                <p class="copyright">
                    &copy; 2023 Desalech Kitfo Bet. All Rights Reserved | Crafted by <a href="https://github.com/Daniyofaf" target="_blank" class="link">Developer</a>
                </p>

            </div>

        </div>
    </footer>

    <!-- #BACK TO TOP -->


    <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>

    <!-- - custom js link -->

    <script src="{{ asset('js/script.js') }}"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>