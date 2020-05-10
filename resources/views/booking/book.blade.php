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
				<a target="_blank" href="images/Bedroom econ 1 (1).jpg">
				<img src="images/Bedroom econ 1 (1).jpg" width="250" height="250">
				<img src="images/Bedroom econ 1 (2).jpg" width="250" height="250">
				<img src="images/Bedroom econ 1 (3).jpg" width="250" height="250">
				<br>
				<img src="images/Bathroom econ (1).jpg" width="250" height="250">
				<img src="images/Bathroom econ (2).jpg" width="250" height="250">
				<img src="images/Bathroom econ (3).jpg" width="250" height="250">
		</div>
	</div>


</body>
</html>
