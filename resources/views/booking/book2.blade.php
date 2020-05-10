<!DOCTYPE html>
<html>

<head>
	<title>Booking</title>
		<link href="{{ asset('css/example.css') }}" type="text/css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
           <li><a href="#">SERVICES</a></li>
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
				<img src="images/Bedroom first 1 (1).jpg" width="250" height="250">
				<img src="images/Bedroom first 1 (2).jpg" width="250" height="250">
				<img src="images/Bedroom first 1 (3).jpg" width="250" height="250">
				<img src="images/Bedroom first 2 (1).jpg" width="250" height="250">
				<br>
				<img src="images/Bedroom first 2 (2).jpg" width="250" height="250">
				<img src="images/Bedroom first 2 (3).jpg" width="250" height="250">
				<img src="images/Bedroom first 4 (1).jpg" width="250" height="250">
				<img src="images/Bathroom first (1).jpg" width="250" height="250">
				<br>
				<img src="images/Bathroom first (2).jpg" width="250" height="250">
				<img src="images/Bathroom first (3).jpg" width="250" height="250">
				<img src="images/Bathroom first (5).jpg" width="250" height="250">
				<img src="images/Hall first 1 (1).jpg" width="250" height="250">
				<br>
				<img src="images/Hall first 2 (1).jpg" width="250" height="250">
				<img src="images/Hall first 2 (2).jpg" width="250" height="250">
				<img src="images/Hall first 2 (3).jpg" width="250" height="250">
				<img src="images/Hall first 3 (1).jpg" width="250" height="250">
				<br>
				<img src="images/Hall first 3 (2).jpg" width="250" height="250">
				<img src="images/Hall first 3 (3).jpg" width="250" height="250">
				<img src="images/Hall first 4 (2).jpg" width="250" height="250">
				<img src="images/Hall first 4 (3).jpg" width="250" height="250">
		</div>
	</div>

</body> 
</html>