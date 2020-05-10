<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_us_page.css') }}">
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


  <center>
    <em>
      <h1 class="asd"> FRIENDS HOTEL </h1>

      <h2 class="asd"> All the best for you! </h2>

      <h2 class="asd"> Contact Us </h2>
    </em>
  </center>

  <hr />

  <style>
    * {
      box-sizing: border-box;
    }


    .column {
      float: left;
      width: 33.33%;
      padding: 10px;
      height: 300px;
    }

    .row:after {
      display: table;
      clear: both;
    }
  </style>

  <body>

    <div class="row">
      <div class="column" style="background-color:#77a6d4;">
            <h2>Our contacts:</h2>
          
        <p sdf="sdf">
          <table>

            <tr>
              <td>Eldorjon Obidov </td>
              <td> +998903273104 @OBIDOV_909 </td>
            </tr>

            <tr>
              <td>Rustam Nasrulloev </td>
              <td> +998919730888 @hakuna_matata_OG </td>
            </tr>
            <tr>
              <td>Khusainov Khusniddin </td>
              <td> +998901234567 @lollapaloooza </td>
            </tr>
            <tr>
              <td>Rakhimjonov Sardorjon </td>
              <td> +998935349604 @HARIBO </td>
            </tr>
            <tr>
              <td>Akhmedov Dilkhayot </td>
              <td> +998994921098 @Dilxayot98 </td>
            </tr>
            <tr>
              <td>Tokhir Kurbonov </td>
              <td> +998919168595 @tokhir_dp </td>
            </tr>

          </table>
        </p>
      </div>
      <div class="column" style="background-color:#518cc8;">
            <h2> Address: </h2>
        <p class="sdf"> 9, Ziyolilar str., M.Ulugbek district, Tashkent city, 100170 </p>
      </div>
      <div class="column" style="background-color:#3d80c2;">
            <h2> Business Hours: </h2>
        <p class="sdf">
          <table>

            <tr>
              <td> Monday: </td>
              <td> 24 hours </td>
            </tr>
            <tr>
              <td> Tuesday: </td>
              <td> 24 hours </td>
            </tr>
            <tr>
              <td> Wednesday: </td>
              <td> 23 hours </td>
            </tr>
            <tr>
              <td> Thursday: </td>
              <td> 24 hours </td>
            </tr>
            <tr>
              <td> Friday: </td>
              <td> 24 hours </td>
            </tr>
            <tr>
              <td> Saturday: </td>
              <td> 24 hours </td>
            </tr>
            <tr>
              <td> Sunday: </td>
              <td> 24 hours </td>
            </tr>

          </table>
        </p>
      </div>
    </div>
    <hr />
    <center>
      <div class="images">
        <a
          href="https://www.google.com/maps/place/%D0%A3%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82+%D0%98%D0%BD%D1%85%D0%B0/@41.338525,69.3323413,17z/data=!3m1!4b1!4m5!3m4!1s0x38aef48a8ed4d0e9:0x3772abeffc72e7b8!8m2!3d41.338525!4d69.33453">
          <text class="M">
            <h2>Map</h2>
          </text> <img src="{{ asset('pictures/map.jpg') }}" alt="Map"></a>
      </div>
    </center>
  </body>

</html>