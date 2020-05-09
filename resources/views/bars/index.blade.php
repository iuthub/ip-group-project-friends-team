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
                        <li><a href="/bar">Home</a></li>
                        <li><a href="/menu">Our Menus</a></li>
                        <li><a href="/blog">Blog Entries</a></li>
                        <li><a href="/index">Admin Table</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
</div>
<!--/.header-->
    <div class="row">
        <div class="col-md-12">
            <h1>Adminstration</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Selected day</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Phone number</th>
                        <th>How many people</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bars as $bar)
                        <tr>
                            <td>
                                {{ $bar->day }}
                            </td>
                            <td>
                                {{ $bar->hour }}
                            </td>
                            <td>
                                {{ $bar->name }}
                            </td>
                            <td>
                                {{ $bar->tel_number }}
                            </td>
                            <td>
                                {{ $bar->people }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
</body>