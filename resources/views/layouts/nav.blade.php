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
       <li class="active"><a href="/">HOME</a></li>
       <li><a href="/book">BOOKING ROOMS</a></li>
       <li><a href="/bar">RESTAURANT & BARS & BANQUETS</a></li>
       <li><a href="/service">SERVICES</a></li>
       <li><a href="/about">ABOUT</a></li>
       <li><a href="/contact">CONTACT US</a></li>
     </ul>

     <div class="flex-center position-ref full-height " style="margin-left: 95%">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}" style="color:black;">Home</a>
                  @else
                      <a href="{{ route('login') }}" style="color:black;">Login</a>

                  @endauth
              </div>
          @endif
        </div>
 </header>
</body>
