<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Actual M -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- M Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <!-- Remove Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>CaféDayNight</title>
</head>

<body>
    <section class="mymodal">
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4 id="info-modal-heading">Link Disabled</h4>
                <p id="info-modal-content">Sorry! All Links are Disabled</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
        </div>
    </section>
    <section class="mynav">
        <nav class="nav-fixed">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo" style="margin-left: 30px;">CaféDayNight</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 30px;">
                    <li><a href="index.php"">Home</a></li>
          <li><a href=" #about"">About</a></li>
                    <li><a href="#coffee">Coffee</a></li>
                    <li><a href="#contat" onclick="toggleModal();">Contact</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#coffee">Coffee</a></li>
            <li><a href="#contact" onclick="toggleModal();">Contact</a></li>
        </ul>
    </section>
    <section class="myslider">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="./assets/images/banner1.jpg" alt="Banner 1">
                    <div class="caption center-align white-text">
                        <h3>Cafe Day Night -- Quality Coffee</h3>
                        <h5 class="light text-lighten-3">
                            We are going to serve one of the Best Coffee around the World! </h5>
                    </div>
                </li>
                <li>
                    <img src="./assets/images/banner2.jpg" alt="Banner 2">
                    <div class="caption center-align white-text">
                        <h3>Cafe Day Night -- is working to serve you better than tomorrow</h3>
                        <h5 class="light text-lighten-3">
                            Taste our Coffee; You're never want to go back! </h5>
                    </div>
                </li>
                <li>
                    <img src="./assets/images/banner3.jpg" alt="Banner 3">
                    <div class="caption center-align white-text">
                        <h3>Hangouts, Business Meetings -- all in one Place!</h3>
                        <h5 class="light text-lighten-3">
                            Great Coffee is the Mood Changer for Human! </h5>
                    </div>
                </li>
        </div>
        </li>
        </ul>
        </div>
    </section>
    <section class="descrip">
        <div class="description white-text center">
            <h2 class="header">
                CafeDayNight -- Ultimate Quality Coffee
            </h2>
            <div class="row container center">
                <div class="col center l8 s12 move">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, provident veritatis pariatur dignissimos consequatur doloribus, mollitia nisi vel veniam, eveniet odit vero magnam dolorem ratione! Nam, beatae laborum ipsa non deserunt consequatur eius sed dolores cumque adipisci eveniet, ipsam dolor itaque pariatur maxime? Error quod, cum illum sint quaerat ipsa odio libero odit fugiat soluta itaque eum veniam, consectetur nostrum aperiam, porro animi? Provident, quasi delectus accusamus quisquam praesentium omnis deleniti recusandae, amet corporis, molestiae et dolorum maxime corrupti labore atque laboriosam accusantium reprehenderit temporibus eos. Labore ducimus distinctio consectetur modi magnam, sunt, id quia officiis totam facilis quis vel!
                </div>
                <div class="col center l4 s12 move">
                    <img src="./assets/images/coffee1.jpg" style="object-fit: content" height="200" width="auto" alt="Coffee">
                </div>
            </div>
        </div>
    </section>
    <section class="mycards" id="coffee">
        <div class="row" style="padding-left: 50px; padding-right: 50px;">
            <div class="col l4 m12 s12" style="padding: 50px 5px;">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="./assets/images/dalgonacoffee.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Coffeé Dalgona<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Dalgona Coffee<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m12 s12" style="padding: 50px 5px;">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="./assets/images/Latte.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Coffeé Latte<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Latte Coffee<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m12 s12" style="padding: 50px 5px;">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="./assets/images/americano-coffee.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Coffeé Americano<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Neo Coffee<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="myparallax">
        <div class="parallax-container">
            <div class="parallax"><img src="./assets/images/banner4.jpg" alt="Parallax_Banner 4"></div>
        </div>
    </section>
    <section class="myabout" id="about">
        <div class="row container white-text center">
            <h2 class="header">About Us</h2>
            <p>
                Café Day Night, a part of Coffee Day Global Limited, is India’s favourite hangout for coffee and conversations. Popularly known as CDN, we strive to provide the best experience to our guests. Our coffees are sourced from thousands of small coffee planters, who made us who we are today and we're glad to be a part of their lives. We opened our first cafe in 1996 at Brigade Road in Bangalore – the youth and the young at heart immediately took to the cafe, and it continues to be one of the most happening places in the city. CDN to the youth is a “hangout” spot where they meet people, make conversations, and have a whole lot of fun over steaming cups of great coffee.It's been an exciting journey since then to becoming the largest organised retail cafe chain in the country. We’re also present in Austria,United Kingdom and Malaysia, so if your travel takes you there, do stop by our outlets to get a taste from back home!
            </p>
            <a href="#" class="btn custom-btn waves-effect waves-light">Read More</a>
        </div>
    </section>
    <section class="myservices">
        <div class="row center white-text" style="padding-left: 50px; padding-right: 50px;">
            <div class="col s12 l4" style="padding: 50px;">
                <i class="large material-icons icon-custom">local_cafe</i>
                <h5 class="header">Variety of Coffee</h5>
            </div>
            <div class="col s12 l4" style="padding: 50px;">
                <i class="large material-icons icon-custom">local_dining</i>
                <h5 class="header"> Kinds of Beverage of Your Choice</h5>
            </div>
            <div class="col s12 l4" style="padding: 50px 50px;">
                <i class="large material-icons icon-custom">favorite</i>
                <h5 class="header">Your Choice --Our dishes</h5>
            </div>
        </div>
    </section>
    <section class="mycarousel">
        <div class="section white-text center">
            <h3 class="header">Whats our Customer Says:</h3>
            <div class="carousel carousel-effects" style="margin-block: 30px">
                <a href="#" class="carousel-item">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel" style="background-color: #6f4037 !important;">
                                <span class="white-text">First review</span>
                                <p class="white-text">This tiny, cute and colourful café doesn’t just have delightful deserts and freshly brewed coffee. f you are looking for a cosy, inspiring space with unlimited coffee to bring a book or your laptop to, then look no further.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="carousel-item">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel" style="background-color: #6f4037 !important;">
                                <span class="white-text">Second review</span>
                                <p class="white-text">This cosy, warmly lit café/bakery is a hit among patrons not just for its delicious, flavorful coffee but also its range of freshly baked delicacies. Pair your coffee with one of their delicious scones to truly experience the best.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="carousel-item">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel" style="background-color: #6f4037 !important;">
                                <span class="white-text">Third review</span>
                                <p class="white-text">CafeKing has got you covered with excellent coffee, hip decor and a full bar for when you switch from caffeine to booze. Pay an hourly minimum fee for faster WiFi and you can make this your new office, gets quite crowded during evenings.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="carousel-item">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel" style="background-color: #6f4037 !important;">
                                <span class="white-text">Fourth review</span>
                                <p class="white-text">CafeKing is the most stylish coffee shop placed in my city, where you should be headed if you love to sip your favorite brew while browsing a rich collection of books. Their food offerings are also delicious – an added advantage.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="carousel-item">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel" style="background-color: #6f4037 !important;">
                                <span class="white-text">Fivth review</span>
                                <p class="white-text">CafeKing is the place to be for the coffee lover with a sweet tooth. With cookies and other baked treats, combined with rich, this tiny bakery/café is perfect if you are just looking to quickly grab coffee and a snack and head out</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="carousel-item">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel" style="background-color: #6f4037 !important;">
                                <span class="white-text">Sixth review</span>
                                <p class="white-text">Offers rich and flavorful freshly Dalgona Coffee, freshly baked desserts and a range of delicious snacks. With warmly lit wood and brick interiors, cosy seating and free WiFi, Best ambiance for your office Meetings & Date also.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="carousel-item">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel" style="background-color: #6f4037 !important;">
                                <span class="white-text">Seventh review</span>
                                <p class="white-text">Wonderful place to sit and sip your freshly brewed coffee. It doesn’t hurt that they have an outstanding breakfast menu, as well as delicious snacks to indulge in throughout the day. They also open at 9:30am, unlike many of coffee shops.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="feedback" style="background-color: #6f4037; margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Contat with Us</h5>
                    <p class="white-text">
                        76, WhiteField Road, EPIP Area <br />
                        Bengalore-56, India
                    </p>
                    <p class="white-text">
                        +91-9801000200
                    </p>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Give your feedback via</h5>
                    <ul class="social-icons">
                        <li><a href="#" class="grey-text" onclick="toggleModal();"><img src="./assets/images/icons8-facebook-48.png" alt="Social Icons"></a></li>
                        <li><a href="#" class="grey-text" onclick="toggleModal();"><img src="./assets/images/icons8-twitter-48.png" alt="Social Icons"></a></li>
                        <li><a href="#" class="grey-text" onclick="toggleModal();"><img src="./assets/images/icons8-instagram-48.png" alt="Social Icons"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer" style="background-color: #49221b; margin-top: 0 !important;">
        <div class="footer-copyright">
            <div class="col l6 s12">
                <p class="white-text">&copy; CaffeeDayNight</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <p class="white-text">Designed by Soumydeep Sinha with LCO</p>
            </div>
        </div>
    </footer>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <!-- M Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Custom JS -->
    <script src="app.js"></script>
</body>

</html>
