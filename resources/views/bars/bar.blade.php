<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Restaurants & Bars & Banquets Template
http://www.templatemo.com/tm-507-Restaurants & Bars & Banquets
-->
        <title>Restaurants & Bars & Banquets CSS Web Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <a href="/bar" class="navbar-brand scroll-top">Restaurants & Bars & Banquets</a>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Hotel</a></li>
                        <li><a href="/bar">Restaurant</a></li>
                        <li><a href="/menu">Our Menus</a></li>
                        <li><a href="/blog">Blog Entries</a></li>
                        @if (Route::has('login'))
                                @auth
                                    <li><a href="/index">Admin Table</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>

                                @endauth
                        @endif
                        
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4 style="color:black">Here you can find delecious foods</h4>
                    <h2 style="color:black">Asian Restaurant</h2>
                    <div class="primary-button">
                        <a href="#" class="scroll-link" data-id="book-table">Order Right Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="img/cook_01.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>We cook delecious</h4>
                        <div class="contact-content">
                            <span>You can call us on:</span>
                            <h6>+ 7777 777 7777</h6>
                        </div>
                        
                        <div class="primary-white-button">
                            <a href="#" class="scroll-link" data-id="book-table">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="img/cook_02.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="/menu">
                        <img src="img/cook_breakfast.png" alt="Breakfast">
                        <h4>Breakfast</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="/menu">
                        <img src="img/cook_lunch.png" alt="Lunch">
                        <h4>Lunch</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="/menu">
                        <img src="img/cook_dinner.png" alt="Dinner">
                        <h4>Dinner</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="/menu">
                        <img src="img/cook_dessert.png" alt="Desserts">
                        <h4>Desserts</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Book Your Table Now</h2>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-12">
                    <div class="left-image">
                        <img src="img/book_left_image.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="right-info">
                        <h4>Reservation</h4>
                        <form id="form-submit" action="{{ route('bar_store')}}" method="Post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='day' onchange='this.form.()'>
                                            <option value="">Select day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='hour' onchange='this.form.()'>
                                            <option value="">Select hour</option>
                                            <option value="10-00">10:00</option>
                                            <option value="12-00">12:00</option>
                                            <option value="14-00">14:00</option>
                                            <option value="16-00">16:00</option>
                                            <option value="18-00">18:00</option>
                                            <option value="20-00">20:00</option>
                                            <option value="22-00">22:00</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="name" type="name" class="form-control" id="name" placeholder="Full name" required>
                                    </fieldset> 
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="phone" type="phone" class="form-control" id="phone" placeholder="Phone number" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required class="person" name='persons' onchange='this.form.()'>
                                            <option value="">How many persons?</option>
                                            <option value="1-Person">1 Person</option>
                                            <option value="2-Persons">2 Persons</option>
                                            <option value="3-Persons">3 Persons</option>
                                            <option value="4-Persons">4 Persons</option>
                                            <option value="5-Persons">5 Persons</option>
                                            <option value="6-Persons">6 Persons</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Book Table</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="featured-food">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Weekly Featured Food</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Breakfast</h2>
                        <img src="img/breakfast_item.jpg" alt="">
                        <div class="text-content">
                            <h4>Kale Chips Art Party</h4>
                            <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Lunch</h2>
                        <img src="img/lunch_item.jpg" alt="">
                        <div class="text-content">
                            <h4>Taiyaki Gastro Tousled</h4>
                            <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Dinner</h2>
                        <img src="img/dinner_item.jpg" alt="">
                        <div class="text-content">
                            <h4>Batch Squid Jean Shorts</h4>
                            <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Our blog post</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_01.jpg" alt="">
                        <div class="date">09 May 2020</div>
                        <div class="right-content">
                            <h4>Palov</h4>
                            <span>Top / Chef</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, corporis, voluptatem. Quo, dolorem? Id harum velit itaque magnam dicta mollitia iusto ex, eveniet odit perferendis, ipsum rerum consectetur! Earum, non...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_02.jpg" alt="">
                        <div class="date">07 May 2020</div>
                        <div class="right-content">
                            <h4>Friday Parties</h4>
                            <span>Chill / Dj Husi</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim error voluptates delectus vitae nesciunt ab at fugiat quaerat cupiditate incidunt. Quas, ut natus! Iure dolore unde et libero, voluptates illum!...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_03.jpg" alt="">
                        <div class="date">05 May 2020</div>
                        <div class="right-content">
                            <h4>Design</h4>
                            <span>Best / Designer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ab excepturi animi repellat, suscipit eos dolor itaque, temporibus incidunt expedita provident aperiam pariatur, deserunt ipsa veritatis minima accusantium magni? Illo?...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_04.jpg" alt="">
                        <div class="date">01 May 2020</div>
                        <div class="right-content">
                            <h4>Music</h4>
                            <span>Top / Musicians</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quam deleniti vitae molestiae, fuga qui dolorum. Mollitia consequuntur incidunt in. Nesciunt, reiciendis, pariatur. Beatae minus nemo, fugit dicta reiciendis nam....</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Restaurants & Bars & Banquets Template 2020</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://www.facebook.com/rustam.nasrulloev.1/" target="_parent"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Designed by <em>Friends Team</em></p>
                </div>
            </div>
        </div>
    </footer>


    


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>