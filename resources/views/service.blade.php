<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} ">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

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
           <li class="active"><a href="/">HOME</a></li>
           <li><a href="/book">BOOKING ROOMS</a></li>
           <li><a href="/bar">RESTAURANT & BARS & BANQUETS</a></li>
           <li><a href="/service">SERVICES</a></li>
           <li class="dropdown">
             <a href="javascript:void(0)" class="dropbtn">ABOUT & GALLARY</a>
               <div class="dropdown-content">
                   <a href="#">PHOTOS</a>
                   <a href="#">VIDEOS</a>
               </div>
           </li>
           <li><a href="/contact">CONTACT US</a></li>
         </ul>
     </header>
<h1 class="display p-5">Our services</h1>

<div class="container">
    <div class="row">
      <div class="col-md-4 p-3">
        <div class="card">
          <img src="{{ asset('pictures/free-weight.jpg')}}" class="card-img-top" alt=""  height="300">
          <div class="card-body">
            <h5 class="card-title">Fitness</h5>
            <p class="card-text">Keep yourself in tonus</p>

          </div>
        </div>
      </div>
      <div class="col-md-4 p-3">
        <div class="card">
          <img src="{{ asset('pictures/P.jpg')}}" class="card-img-top" alt=""  height="300">
          <div class="card-body">
            <h5 class="card-title">Parking</h5>
            <p class="card-text">Suitable and safe places for your cars.</p>

          </div>
        </div>
      </div>
    <div class="col-md-4 p-3">
      <div class="card">
        <img src="{{ asset('pictures/check-in.jpg')}}" class="card-img-top" alt=""  height="300">
        <div class="card-body">
          <h5 class="card-title">Check-in and check-out</h5>
          <p class="card-text">Check-in and check-out services are open 24 hours</p>

        </div>
      </div>
    </div>
    <div class="col-md-4 p-3">
      <div class="card">
        <img src="{{ asset('pictures/concierge.jpg')}}" class="card-img-top" alt="..."  height="300">
        <div class="card-body">
          <h5 class="card-title">Concierge services</h5>
          <p class="card-text">The best concierge services for you.</p>

        </div>
      </div>
    </div>
    <div class="col-md-4 p-3">
      <div class="card">
        <img src= "{{ asset('pictures/spa.jpg')}}" class="card-img-top" alt="..."  height="300">
        <div class="card-body">
          <h5 class="card-title">Spa and massage services</h5>
          <p class="card-text">Our hotel focuses on maximum relaxation for their guests, providing luxury features like hot tubs, thermal pools, and professional massage services.</p>

        </div>
      </div>
    </div>
    <div class="col-md-4 p-3">
      <div class="card">
        <img src="{{ asset('pictures/business.jpg')}}" class="card-img-top" alt="..."  height="300">
        <div class="card-body">
          <h5 class="card-title">Business services</h5>
          <p class="card-text">Great place for you to work.</p>

        </div>
      </div>
    </div>
   </div>
   </div>
   <div class="footer">
        <div class="footer-content">
           <div class="footer-section about">
             <h2>About us</h2>
             <p>
The Friends Hotel covers a wide range of amenities <br>and has been serving everyone for years.There 
<br>are also many celebrities staying at this hotel.<br> For example, Akhmedov Dilkhayot also used <br>the services of this hotel</p>
           </div>

           <div class="footer-section links">
             <h2>Quick links</h2>
             <br>
             
               <a href=""><li>Parking</li></a>
               <a href=""><li>Hotels</li></a>
               <a href=""><li>Members</li></a>
               <a href=""><li>Gift Cards</li></a>
               <a href=""><li>FAQ</li></a>
             
           </div>

           <div class="footer-section content">
             <h2>Contact us</h2><br>
             <div class="contact">
              <a href=""><i class="fas fa-map-marker-alt"></i> Mirzo Ulug'bek region, Ziyolilar Street</a><br>
               <a href=""><i class="fas fa-phone-alt"></i> +99893 511 10 98</a><br>
               <a href=""><i class="fas fa-envelope"></i> Tashkent@Friens-hotel.uz</a>
               <div class="social-media">
                 <a href=""><i class="fab fa-instagram"></i></a>
                 <a href=""><i class="fab fa-facebook-f"></i></a>
                 <a href=""><i class="fab fa-telegram-plane"></i></a>
                 <a href=""><i class="fab fa-twitter"></i></a>
               </div>
             </div>
           </div>
        </div>
   <div class="team-section">
      <h1>FRIENDS TEAM</h1>
         <span class="border"></span>
              <div class="ps">
                  <a href="#"><img src="{{ asset('pictures/Eldor.jpg') }}" alt=""></a>
                  <a href="#"><img src="{{ asset('pictures/Rustam.jpg') }}" alt=""></a>
                  <a href="#"><img src="{{ asset('pictures/Husniddin.jpg') }}" alt=""></a>
                  <a href="#"><img src="{{ asset('pictures/Sardor.jpg') }}" alt=""></a>
                  <a href="#"><img src="{{ asset('pictures/Dilkhayot.jpg') }}" alt=""></a>
                  <a href="#"><img src="{{ asset('pictures/Tokhir.jpg') }}" alt=""></a>
              </div>
    </div>
        <div class="footer-bottom">
          &copy;Friends-hotel.uz
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
