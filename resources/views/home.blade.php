<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Hotel Miranda</title>

</head>
<body>
    <header class="header">
        <div class="header__container">
            <div class="header__menu-mobile">
                <input type="checkbox" id="menu-toggle" class="header__menu-toggle">
                <label for="menu-toggle" class="header__menu-hamburger">
                    <div class="header__line header__line--1"></div>
                    <div class="header__line header__line--2"></div>
                    <div class="header__line header__line--3"></div>
                </label>
                <nav class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item"><a href="about.html" class="header__menu-link">About Us</a></li>
                        <li class="header__menu-item"><a href="rooms.html" class="header__menu-link">Rooms</a></li>
                        <li class="header__menu-item"><a href="offers.html" class="header__menu-link">Offers</a></li>
                        <li class="header__menu-item"><a href="contact.html" class="header__menu-link">Contact</a></li>
                    </ul>
                </nav>
                <div class="header__letter-h">
                    <img src="./img/H.png" alt="" class="header__letter-h-img">
                </div>
                <div class="header__title">
                    <h5 class="header__title-h5">HOTEL</h5>
                    <h5 class="header__title-h5 header__title-h5--miranda">MIRANDA</h5>
                </div>
                <div class="header__icons">
                    <img class="header__icon header__icon--profile" src="./img/iconoPerfil.png" alt="Profile">
                    <img class="header__icon header__icon--lens" src="./img/iconoLupa.png" alt="Search">
                </div>
            </div>
        </div>


        <div class="header__container2">
            <div class="header__menu-desktop">
                
                
                <div class="header__letter-h">
                    <img src="./img/H.png" alt="" class="header__letter-h-img">
                </div>
                <div class="header__title">
                    <h5 class="header__title-h5">HOTEL</h5>
                    <h5 class="header__title-h5 header__title-h5--miranda">MIRANDA</h5>
                </div>

                    <ul class="header__menu-list">
                        <li class="header__menu-item"><a href="about.html" class="header__menu-link">About Us</a></li>
                        <li class="header__menu-item"><a href="rooms.html" class="header__menu-link">Rooms</a></li>
                        <li class="header__menu-item"><a href="offers.html" class="header__menu-link">Offers</a></li>
                        <li class="header__menu-item"><a href="contact.html" class="header__menu-link">Contact</a></li>
                    </ul>

                <div class="header__icons">
                    <img class="header__icon header__icon--profile" src="./img/iconoPerfil.png" alt="Profile">
                    <img class="header__icon header__icon--lens" src="./img/iconoLupa.png" alt="Search">
                </div>
            </div>
        </div>

        
    </header>

    <div class="black-background__perfect-base-for-you">
        <div class="h5-title">
            <h5>THE ULTIMATE LUXURY EXPERIENCE</h5>
        </div>
        <div class="big-title__perfect-base-for-you">
            <h1>The Perfect Base For You</h1>
        </div>
        <div class="btns__take-tour-learn-more">
            <button class="btn__take-a-tour">TAKE A TOUR</button>
            <button class="btn">LEARN MORE</button>
        </div>
    </div>

    <div class="select-dates">
        <div class="arrival-departure__dates">
            <div class="select__arrival-date">
                <label for="arrival-date" class="select__label">Arrival Date</label>
                <div class="select__input-wrapper">
                    <input value="24th march 2020" type="date" id="arrival-date" name="date" class="select__input">
                </div>
            </div>
            <div class="select__departure-date">
                <label for="departure-date" class="select__label">Departure Date</label>
                <div class="select__input-wrapper">
                    <input value="30th march 2020" type="date" id="departure-date" name="date" class="select__input">
                </div>
            </div>
            <div class="btn-check-availability">
                <button class="btn">CHECK AVAILABILITY</button>
            </div>
        </div>
    </div>

   <div class="about-us-home">
        <div class="about-us-home__title">
            <h5>ABOUT US</h5>
        </div>
        <div class="big-title__discover-our-underground">
            <h1>Discover Our Underground.</h1>
        </div>
        <div class="information-text__btn-book-now">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button class="btn">BOOK NOW</button>
        </div>
    </div>
    
    <div class="strong-team">
        <div class="strong-team__image"></div>
        <div class="strong-team__content">
            <img class="strong-team__icon" src="./img/iconStrongTeam.png" alt="Strong Team Icon">
            <img class="strong-team__icon--difused" src="./img/iconDifusedStrongTeam.png" alt="Difused Strong Team Icon">
            <h1 class="strong-team__title">Strong Team</h1>
            <p class="strong-team__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        </div>
    </div>

    <div class="luxury-room__hand-picked-rooms">
        <div class="luxury-room__image-gray"></div>
        <div class="luxury-room__black-background">
            <img src="./img/calendarioFlechaIzquierda.png" alt="">
            <h1 class="luxury-room__title">Luxury Room</h1>
            <p class="luxury-room__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        </div>
    </div>
    
    <div class="title-rooms__title-hand-picked-rooms-slider">
        <h5>ROOMS</h5>
        <h1>Hand Picked Rooms</h1>
        <div class="title-rooms__icons-room">
            <img src="./img/iconoCama.png" alt="">
            <img src="./img/iconoWifi.png" alt="">
            <img src="./img/iconoCoche.png" alt="">
            <img src="./img/iconoFrio.png" alt="">
            <img src="./img/iconoGimnasio.png" alt="">
            <img src="./img/iconoCigarro.png" alt="">
            <img src="./img/iconoCopa.png" alt="">
        </div>
        <div class="title-rooms__slider-container">
            <input type="radio" id="slide1" name="slider" checked>
            <input type="radio" id="slide2" name="slider">
            <input type="radio" id="slide3" name="slider">
            <div class="title-rooms__slider-wrapper">
                <div class="title-rooms__slide">
                    <img src="./img/imagenPorDefecto.png" alt="Imagen 1">
                </div>
                <div class="title-rooms__slide">
                    <img src="./img/imagenPorDefecto.png" alt="Imagen 2">
                </div>
                <div class="title-rooms__slide">
                    <img src="./img/imagenPorDefecto.png" alt="Imagen 3">
                </div>
            </div>
    
            <label for="slide1" class="title-rooms__prev">❮</label>
            <label for="slide3" class="title-rooms__next">❯</label>
        </div>
    </div>

    <div class="minimal-duplex-room__price-night">
        <h1>Minimal Duplex Room</h1>
        <div class="minimal-duplex-room__text">
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</h5>
        </div>
        <div class="minimal-duplex-room__paraphs-price-night">
            <p class="minimal-duplex-room__price">$345</p><p class="minimal-duplex-room__night">/Night</p>
        </div>
    </div>    

    <div class="di-titles__video-and-button">
        <h5>INTRO VIDEO</h5>
        <div class="di-titles__big-title-video-button">
            <h1>Meet With Our Luxury Place.</h1>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
        <video width="100%" height="360" controls>
            <source src="" type="video/mp4">
        </video>
        <button>BOOK NOW</button>
    </div>
    
    <div class="facilities__core-features-and-slider">
        <h5>FACILITIES</h5>
        <h1>Core Features</h1>
        <img class="facilities__icon-stars-hand" src="./img/icon01.png" alt="">
        <img class="facilities__icon-numbers-difused" src="./img/iconStarsHand.png" alt="">
        <div class="facilities__div-big-title-paraph">
            <h1>Have High Rating</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
        </div>
        <img class="facilities__icon-slider" src="./img/Frame 90.png" alt="">
    </div>    

    <img class="icon-donut" src="./img/iconDonut.png" alt="">
    <div class="food-menu">
        <h5>MENU</h5>
        <h1 class="food-menu__big-title">Our Foods Menu</h1>
        <div class="food-menu__slider-options">
            <div class="food-menu__option1">
                <div class="food-menu__option-image"></div>
                <div class="food-menu__title-text">
                    <h1>Eggs & Bacon</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
            <div class="food-menu__option2">
                <div class="food-menu__option-image"></div>
                <div class="food-menu__title-text">
                    <h1>Tea & Coffee</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
            <div class="food-menu__option3">
                <div class="food-menu__option-image"></div>
                <div class="food-menu__title-text">
                    <h1>Chia Oatmeal</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
        <div class="food-menu__btns-slider">
            <div class="food-menu__prev-slider">❮</div>
            <div class="food-menu__next-slider">❯</div>
        </div>
    </div>

    <div class="slider-home-3-images">
        <input type="radio" name="slider" id="slide-1" checked>
        <input type="radio" name="slider" id="slide-2">
        <input type="radio" name="slider" id="slide-3">

        <div class="slider-home-3-images__slides">
            <div class="slider-home-3-images__slide">
                <img src="./img/imagenPorDefecto.png" alt="Imagen 1">
            </div>
            <div class="slider-home-3-images__slide">
                <img src="./img/imagenPorDefecto.png" alt="Imagen 2">
            </div>
            <div class="slider-home-3-images__slide">
                <img src="./img/imagenPorDefecto.png" alt="Imagen 3">
            </div>
        </div>

        <div class="slider-home-3-images__nav-dots">
            <label for="slide-1" class="slider-home-3-images__nav-dot slider-home-3-images__dot-1"></label>
            <label for="slide-2" class="slider-home-3-images__nav-dot slider-home-3-images__dot-2"></label>
            <label for="slide-3" class="slider-home-3-images__nav-dot slider-home-3-images__dot-3"></label>
        </div>
    </div>

    <div class="black-background-final-home">
        <div class="black-background-final-home__icon-number-text-component">
            <img src="./img/rocket_84k.svg" alt="">
            <h1>84k<span>+</span></h1>
            <p>Projects are Completed</p>
        </div>
        <div class="black-background-final-home__icon-number-text-component">
            <img src="./img/people_10M.png" alt="">
            <h1>10M<span>+</span></h1>
            <p>Active Backers Around World</p>
        </div>
        <div class="black-background-final-home__icon-number-text-component">
            <img src="./img/stonks_02k.png" alt="">
            <h1>02k<span>+</span></h1>
            <p>Categories Served</p>
        </div>
        <div class="black-background-final-home__icon-number-text-component">
            <img src="./img/book_100M.png" alt="">
            <h1>100M<span>+</span></h1>
            <p>Idea Raised Funds</p>
        </div>
    </div>
    
    <footer>
        <div class="footer-container">
            <div class="footer-title">
                <div class="img-h-title">H</div>
                <div class="title-hotel-miranda">
                    <h2 class="h2-hotel">HOTEL</h2>
                    <h2 class="h2-miranda">MIRANDA</h2>
                </div>
            </div>
            <div class="text-and-icons-footer">
                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                <div class="icons-footer">
                    <div class="icon-footer-component">
                        <div class="icon-around">
                            <img class="inside-icon" src="./img/f_facebook.png" alt="Facebook">
                        </div>
                    </div>
                    <div class="icon-footer-component">
                        <div class="icon-around">
                            <img class="inside-icon" src="./img/twitter_bird.png" alt="Twitter">
                        </div>
                    </div>
                    <div class="icon-footer-component">
                        <div class="icon-around">
                            <img class="inside-icon" src="./img/Be_icon.png" alt="Behance">
                        </div>
                    </div>
                    <div class="icon-footer-component">
                        <div class="icon-around">
                            <img class="inside-icon" src="./img/icon_linkedin.png" alt="LinkedIn">
                        </div>
                    </div>
                    <div class="icon-footer-component">
                        <div class="icon-around">
                            <img class="inside-icon" src="./img/yt_icon.png" alt="YouTube">
                        </div>
                    </div>
                </div>
                <div class="footer-services">
                    <h1>Services.</h1>
                    <div class="services-list">
                        <div class="service-component">
                            <p>+ Resturent & Bar</p>
                        </div>
                        <div class="service-component">
                            <p>+ Swimming Pool</p>
                        </div>
                        <div class="service-component">
                            <p>+ Wellness & Spa</p>
                        </div>
                        <div class="service-component">
                            <p>+ Restaurant</p>
                        </div>
                        <div class="service-component">
                            <p>+ Conference Room</p>
                        </div>
                        <div class="service-component">
                            <p>+ Coctail Party House</p>
                        </div>
                        <div class="service-component">
                            <p>+ Gaming Zone</p>
                        </div>
                        <div class="service-component">
                            <p>+ Marrige Party</p>
                        </div>
                        <div class="service-component">
                            <p>+ Party Planning</p>
                        </div>
                        <div class="service-component">
                            <p>+ Tour Consultancy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-footer">
                <h1>Contact Us.</h1>
                <div class="contact-types">
                    <div class="contact-component">
                        <img src="./img/phoneFooter.png" alt="Phone">
                        <h1>Phone Number<p>+987 876 765 76 577</p></h1>
                    </div>
                    <div class="contact-component">
                        <img src="./img/emailFooter.png" alt="Email">
                        <h1>Email<p>emailhotelmiranda@gmail.com</p></h1>
                    </div>
                    <div class="contact-component">
                        <img src="./img/ubiFooter.png" alt="Address">
                        <h1>Address<p>Invented Miranda St. 45</p></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-section-terms-of-use">
            <p class="paraph-copyright">Copyright By@Example - 2020</p>
            <p class="paraph-termsofuse">Terms of use  &nbsp;&nbsp;  |  &nbsp;&nbsp;  Privacy Environmental Policy</p>
        </div>
    </footer>
    
    
</body>
</html>
