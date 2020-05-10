<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link href="{{ asset('css/example.css') }}" type="text/css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
           <li><a href="/about">ABOUT</a></li>
           <li><a href="/contact">CONTACT US</a></li>
         </ul>
     </header>

<div class="table">
	<table id="customers">
	  <tr>
	  	<th>Class</th>
	    <th>Room</th>
	    <th>Capacity</th>
	    <th>Features</th>
	    <th>Price</th>
	    <th>Booking</th>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 1</td>
	    <td>1 bed</td>
	    <td>No</td>
	    <td>30$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 2</td>
	    <td>1 bed</td>
	    <td>No</td>
	    <td>30$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 3</td>
	    <td>1 bed</td>
	    <td>No</td>
	    <td>30$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 4</td>
	    <td>2 beds</td>
	    <td>No</td>
	    <td>50$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 5</td>
	    <td>2 beds</td>
	    <td>No</td>
	    <td>50$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 6</td>
	    <td>2 beds</td>
	    <td>No</td>
	    <td>50$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 7</td>
	    <td>3 beds</td>
	    <td>No</td>
	    <td>75$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 8</td>
	    <td>3 beds</td>
	    <td>No</td>
	    <td>75$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 9</td>
	    <td>4 beds</td>
	    <td>No</td>
	    <td>100$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Economy</td>
	    <td>Room 10</td>
	    <td>4 beds</td>
	    <td>No</td>
	    <td>100$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	</table>

	<div class="pagination" >
	  <a href="/book">&laquo;</a>
	  <a href="/book" class="active">1</a>
	  <a href="/book1">2</a>
	  <a href="/book2">3</a>
	  <a href="/book2">&raquo;</a>
	</div>
</div>

	<div class="images">
		<div class="images1">
			<h1> Economy Class Images:</h1>
				<img src="{{ asset('Images/bedecon1.jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bedroom econ 1 (2).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bedroom econ 1 (3).jpg') }}" width="250" height="250">
				<br>
				<img src="{{ asset('Images/Bathroom econ (1).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bathroom econ (2).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bathroom econ (3).jpg') }}" width="250" height="250">
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

</body>
</html>
