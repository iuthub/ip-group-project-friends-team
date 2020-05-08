<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
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
       <li class="active"><a href="#">HOME</a></li>
       <li><a href="#">BOOKING ROOMS</a></li>
       <li><a href="#">RESTAURANT & BARS & BANQUETS</a></li>
       <li><a href="#">SERVICES</a></li>
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
</body>