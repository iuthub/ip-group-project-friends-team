<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Restaurants & Bars & Banquets Template
http://www.templatemo.com/tm-507-Restaurants & Bars & Banquets
-->
        <title>Restaurants & Bars & Banquets - Blog page</title>
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
            <a href="#" class="navbar-brand scroll-top">Restaurants & Bars & Banquets</a>
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


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Blog</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi sint earum eos porro repellat omnis vero dignissimos sunt id voluptatum, iusto, magni sit, consequuntur animi optio expedita vel delectus beatae!</p>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="img/blog_item_01.jpg" alt="">
                        <div class="date">09 May 2020</div>
                        <div class="down-content">
                            <h4>Palov</h4>
                            <span>Top / Chef</span>
                            <p>Vivamus venenatis mi enim, ut gravida sem viverra sit amet. Nam ullamcorper dui nec risus malesuada fringilla. Aliquam erat volutpat. Aliquam a varius odio. Quisque iaculis massa vel nunc porta vehicula. Nulla consectetur iaculis elit. Vivamus euismod lorem rutrum iaculis commodo. Cras congue nisi non varius tincidunt.</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="img/blog_item_02.jpg" alt="">
                        <div class="date">07 May 2020</div>
                        <div class="down-content">
                            <h4>Friday Parties</h4>
                            <span>Chill / Dj Husi</span>
                            <p>Praesent id pellentesque est. Etiam vestibulum eros quis vulputate convallis. Praesent quam diam, placerat a ipsum sed, facilisis dignissim lorem. Vivamus a elit vitae mauris fringilla scelerisque sit amet eget mauris. Suspendisse vulputate congue eleifend.</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="img/blog_item_03.jpg" alt="">
                        <div class="date">05 May 2020</div>
                        <div class="down-content">
                            <h4>Design</h4>
                            <span>Best / Designer</span>
                            <p>Mauris mollis urna sit amet eros pretium, a tincidunt tellus eleifend. Sed dictum sit amet sapien ut scelerisque. Duis vulputate elit vehicula nisl maximus eleifend. Suspendisse potenti. Aenean ut dui fermentum, pharetra quam vitae, placerat dolor. Curabitur at dolor sed felis lacinia ultricies sit amet vel sem.</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="img/blog_item_04.jpg" alt="">
                        <div class="date">01 May 2020</div>
                        <div class="down-content">
                            <h4>Music</h4>
                            <span>Top / Musicians</span>
                            <p>Pellentesque nec orci in erat venenatis viverra. Vivamus in lorem et leo feugiat ullamcorper. Donec volutpat fermentum erat non aliquet. Cras fermentum, risus a blandit sodales, erat turpis eleifend lacus, venenatis mollis leo lorem vel eros. Quisque et sem tempus, feugiat urna iaculis, tempor metus.</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <ul class="page-number">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&gt;&gt;</a></li>
                    </ul>
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