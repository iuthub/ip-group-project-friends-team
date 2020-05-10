<!DOCTYPE html>
<html>

<head>
	<title>Booking</title>
		<link href="{{ asset('css/example.css') }}" type="text/css" rel="stylesheet">
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
	  	<td>Business</td>
	    <td>Room 11</td>
	    <td>1 bed</td>
	    <td>Free wi-fi, TV, Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>70$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Business</td>
	    <td>Room 12</td>
	    <td>1 bed</td>
	    <td>Free wi-fi, TV, Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>70$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Business</td>
	    <td>Room 13</td>
	    <td>1 bed</td>
	    <td>Free wi-fi, TV, Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>70$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Business</td>
	    <td>Room 14</td>
	    <td>2 beds <br>(seperate)</td>
	    <td>Free wi-fi, 2-TV, 2-Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>120$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Business</td>
	    <td>Room 15</td>
	    <td>2 beds <br>(seperate)</td>
	    <td>Free wi-fi, 2-TV, 2-Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>120$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Business</td>
	    <td>Room 16</td>
	    <td>2 beds <br>(seperate)</td>
	    <td>Free wi-fi, 2-TV, 2-Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>120$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Business</td>
	    <td>Room 17</td>
	    <td>3 beds <br>(2-together)<br>(1-seperate)</td>
	    <td>Free wi-fi, 2-TV, 2-Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>180$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Business</td>
	    <td>Room 18</td>
	    <td>3 beds <br>(2-together)<br>(1-seperate)</td>
	    <td>Free wi-fi, 2-TV, 2-Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>180$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  	  <tr>
	  	<td>Business</td>
	    <td>Room 19</td>
	    <td>4 beds <br>(2-together)<br>(2-seperate)</td>
	    <td>Free wi-fi, TV, Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>250$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	  	<td>Business</td>
	    <td>Room 20</td>
	    <td>4 beds <br>(2-together)<br>(2-seperate)</td>
	    <td>Free wi-fi, TV, Air condition, 
	    	<br>Telephone, 2-times lunch, 
	    	<br>Free pool access</td>
	    <td>250$/per night</td>
	    <td><button type="button"><a href="">Book Now</a></button></td>
	  </tr>
	  <tr>
	</table>

	<div class="pagination" >
	  <a href="/book">&laquo;</a>
	  <a href="/book">1</a>
	  <a href="/book1" class="active">2</a>
	  <a href="/book2">3</a>
	  <a href="/book2">&raquo;</a>
	</div>
</div>

	<div class="images">
		<div class="images1">
			<h1> Business Class Images:</h1>
				<img src="images/Bedroom buss 2 (1).jpg" width="250" height="250">
				<img src="images/Bedroom buss 2 (2).jpg" width="250" height="250">
				<img src="images/Bedroom buss 2 (3).jpg" width="250" height="250">
				<br>
				<img src="images/Bedroom buss 1 (1).jpg" width="250" height="250">
				<img src="images/Bedroom buss 1 (2).jpg " width="250" height="250">
				<img src="images/Bedroom buss 3 (1).jpg" width="250" height="250">
				<br>
				<img src="images/Bathroom buss (2).jpg" width="250" height="250">
				<img src="images/Bathroom buss (3).jpg" width="250" height="250">
				<img src="images/Hall buss 1 (1).jpg" width="250" height="250">
		</div>
	</div>

</body> 
</html>