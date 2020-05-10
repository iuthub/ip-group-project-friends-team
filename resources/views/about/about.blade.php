@include('layouts.nav')
<!DOCTYPE html>
<html>

<head>
    <title>Friend's Hotel</title>
    <meta name="description" content="Friends Hotel">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/smallabout.css') }}" media="(max-width: 630px)">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700|Lobster' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">

        <div class="girl">
            <img src="{{ asset('img/girl.jpg') }}" alt="girl">
        </div>

        <section class="intro">
            <h1>Friend's Hotel</h1>
            <aside class="right">
                <img src="{{ asset('img/burjalarab.png') }}" alt="burj">

            </aside>
            <p>Today, Jumeirah is a Dubai national champion and an acclaimed luxury hospitality leader — operating 24 Jumeirah branded properties (6,747 keys) in eight countries, and employing more than 13,500 colleagues across 140 nationalities. As exemplified through its flagship hotel, and global icon, Burj Al Arab, Jumeirah has transformed the way that luxury is defined.</p>
            <p>In 2018, Jumeirah entered a phase of accelerated growth under the leadership of its new CEO, José Silva. We have seen unparalleled success in Dubai and regionally, and will build upon this expertise as it expands internationally. In terms of strategy, Jumeirah Group will continue to own properties and grow through acquisition, as well as hotel management agreements. Both new and existing markets have been identified for expansion across Middle East, Europe and Asia with the vision to take the brand global — with each property clearly stamped with the Jumeirah signature, to make a strong statement within the industry.</p>
            <p>Jumeirah’s strategic positioning puts Food & Beverage as a core brand pillar and its strongest differentiator. No other hotel in Dubai can compete with Jumeirah for properties or rich dining experiences, and new restaurant concepts will be central to our international development strategy. With the recent appointment of, renowned epicure, Micheal Ellis as Chief Culinary Officer, Jumeirah will drive creativity and reinvigorate its dining concepts and gastronomic experiences across its portfolio.</p>
            <p>Placing the guest at the centre of all we do is a top priority. A current focus is to elevate the already exceptional standards, which are at the heart of Jumeirah. We are committed to continuous improvement and ensuring that the Jumeirah name is synonymous with great service, high quality and exhilarating experiences. With a renewed determination to lead luxury hospitality, Jumeirah has recommitted to deliver personalised guest experiences by offering service that goes beyond expectations.</p>
            <p>Jumeirah serves understated luxury in spaces designed to make every stay truly unforgettable. Our hotels set new standards within the industry by creating environments that stir emotion; in our restaurants, spas, guest rooms and lobbies, you will find harmonious spaces, signature landscapes, and iconic architecture inspired by the iconic Burj Al Arab. Travel experiences are enhanced for Jumeirah guests, through warm hospitality, luxurious atmospheres and a sense of calm that each Jumeirah hotel evokes.</p>
        </section>

        <section class="contact">
            <h2>Each Sunday free Party</h2>
            <aside class="left">
                <img src="{{ asset('img/hotel.png') }}" alt="hotel">

            </aside>

            <p>Starts promptly at <time>20:00</time></p>

            <p>Chinobod Street <br> 61 Tashkent UZ<br> 100030 </p>


            <p>Coming?
                <a href="mailto:yes@friendshotel.lol?Subject=Yes I'm coming"></a>Email yes@friendshotel.lol</p>
        </section>

        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11979.430048653523!2d69.3016641!3d41.3554507!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd780cc35066bbc00!2sFriends%20Hostel!5e0!3m2!1sru!2s!4v1589122855662!5m2!1sru!2s" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </section>


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

