<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} ">

    <style>
        @keyframes animate{
            0%,100%{
                background-image: url("{{asset('pictures/3.jpg') }}");
            }
            25%{
                background-image: url("{{asset('pictures/5.jpg') }}");
            }
        }
    </style>

    <title>Services</title>
  </head>
  <body>
    <header>
       <div class="logo">
       <img src="{{ asset('pictures/Ligo3.png') }} ">
       </div>
         <ul>
           <li class="active"><a href="#">HOME</a></li>
           <li><a href="#">BOOKING ROOMS</a></li>
           <li><a href="/bar">RESTAURANT & BARS & BANQUETS</a></li>
           <li><a href="/service">SERVICES</a></li>
           <li class="dropdown">
             <a href="javascript:void(0)" class="dropbtn">ABOUT & GALLARY</a>
               <div class="dropdown-content">
                   <a href="#">PHOTOS</a>
                   <a href="#">VIDEOS</a>
               </div>
           </li>
           <li><a href="#">CONTACT US</a></li>
         </ul>
     </header>
<h1 class="display p-5">Services</h1>
<div class="container">
    <div class="row">
      <div class="col-md-4 p-3">
        <div class="card">
          <img src="{{ asset('pictures/free-weight.jpg')}}" class="card-img-top" alt=""  height="300">
          <div class="card-body">
            <h5 class="card-title">Fitness</h5>
            <p class="card-text">Keep yourself in tonus</p>
            <a href= "#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-3">
        <div class="card">
          <img src="{{ asset('pictures/P.jpg')}}" class="card-img-top" alt=""  height="300">
          <div class="card-body">
            <h5 class="card-title">Parking</h5>
            <p class="card-text">Suitable and safe places for your cars.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <div class="col-md-4 p-3">
      <div class="card">
        <img src="check-in.jpg" class="card-img-top" alt=""  height="300">
        <div class="card-body">
          <h5 class="card-title">Check-in and check-out</h5>
          <p class="card-text">Check-in and check-out services are open 24 hours</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 p-3">
      <div class="card">
        <img src="concierge.jpg" class="card-img-top" alt="..."  height="300">
        <div class="card-body">
          <h5 class="card-title">Concierge services</h5>
          <p class="card-text">The best concierge services for you.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 p-3">
      <div class="card">
        <img src= "spa.jpg" class="card-img-top" alt="..."  height="300">
        <div class="card-body">
          <h5 class="card-title">Spa and massage services</h5>
          <p class="card-text">Our hotel focuses on maximum relaxation for their guests, providing luxury features like hot tubs, thermal pools, and professional massage services.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 p-3">
      <div class="card">
        <img src="business.jpg" class="card-img-top" alt="..."  height="300">
        <div class="card-body">
          <h5 class="card-title">Business services</h5>
          <p class="card-text">Great place for you to work.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
   </div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
