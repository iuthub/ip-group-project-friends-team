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
	  	<td>First</td>
	    <td>Room 21</td>
	    <td>1 bed</td>
	    <td> Free fast wi-fi, 4K TV screens, Air condition,
	    	<br>Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>100$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 22</td>
	    <td>1 bed</td>
	    <td> Free fast wi-fi, 4K TV screens, Air condition,
	    	<br>Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>100$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 23</td>
	    <td>1 bed</td>
	    <td> Free fast wi-fi, 4K TV screens, Air condition,
	    	<br>Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>100$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 24</td>
        <td>2 beds <br>(seperate)</td>
	    <td> Free fast wi-fi, 2-4K TV screens, 2-Air condition,
	    	<br>Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>180$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 25</td>
	    <td>2 beds <br>(seperate)</td>
	    <td> Free fast wi-fi, 2-4K TV screens, 2-Air condition,
	    	<br>Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>180$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 26</td>
	    <td>2 beds <br>(seperate)</td>
	    <td> Free fast wi-fi, 2-4K TV screens, 2-Air condition,
	    	<br>Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>180$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 27</td>
	    <td>3 beds <br>(seperate)</td>
	    <td> Free fast wi-fi, 3-4K TV screens, 3-Air condition,
	    	<br>2-Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>300$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 28</td>
	    <td>3 beds <br>(seperate)</td>
	    <td> Free fast wi-fi, 3-4K TV screens, 3-Air condition,
	    	<br>2-Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>300$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 29</td>
	    <td>4 beds <br>(seperate)</td>
	    <td> Free fast wi-fi, 4-4K TV screens, 4-Air condition,
	    	<br>2-Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>450$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>First</td>
	    <td>Room 30</td>
	    <td>4 beds <br>(seperate)</td>
	    <td> Free fast wi-fi, 4-4K TV screens, 4-Air condition,
	    	<br>2-Telephone, daily newspaper, 3-times lunch,
	    	<br>Free pool and gym access, Floor sensor lights,
	    	<br>Inductive charging, Bluetooth furniture</td>
	    <td>450$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	</table>

	<div class="pagination" >
	  <a href="/book">&laquo;</a>
	  <a href="/book">1</a>
	  <a href="/book1">2</a>
	  <a href="/book2" class="active">3</a>
	  <a href="/book2">&raquo;</a>
	</div>
</div>

	<div class="images">
		<div class="images1">
			<h1> First Class Images:</h1>
				<img src="{{ asset('Images/Bedroom first 1 (1).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bedroom first 1 (2).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bedroom first 1 (3).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bedroom first 2 (1).jpg') }}" width="250" height="250">
				<br>
				<img src="{{ asset('Images/Bedroom first 2 (2).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bedroom first 2 (3).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bedroom first 4 (1).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bathroom first (1).jpg') }}" width="250" height="250">
				<br>
				<img src="{{ asset('Images/Bathroom first (2).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bathroom first (3).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Bathroom first (5).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Hall first 1 (1).jpg') }}" width="250" height="250">
				<br>
				<img src="{{ asset('Images/Hall first 2 (1).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Hall first 2 (2).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Hall first 2 (3).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Hall first 3 (1).jpg') }}" width="250" height="250">
				<br>
				<img src="{{ asset('Images/Hall first 3 (2).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Hall first 3 (3).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Hall first 4 (2).jpg') }}" width="250" height="250">
				<img src="{{ asset('Images/Hall first 4 (3).jpg') }}" width="250" height="250">
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
