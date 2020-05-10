<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }} ">
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
        <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">Login</a>

                  @endauth
              </div>
          @endif
        </div>

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


    </body>
</html>
