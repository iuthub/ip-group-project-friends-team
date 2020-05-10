
@include('layouts.nav')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<div class="welcome">
  <div class="nav-border">
  <span class="border3"></span>
  </div>
	<div class="hotel">
		<h1>OUR HOTEL</h1>
		   <span class="border1"></span>
       <h4>FEATURET AMENITIES</h4>
      <div class="block">
       <div class="featuret-amenities">
         <i class="fas fa-dumbbell"><p> Fitness center</p></i>
         <i class="fas fa-swimmer" > <p>Pool</p></i>
         <i class="fas fa-utensils"> <p>Restaurant</p></i>
         <i class="fas fa-tv"> <p>Cinema</p></i>
         <i class="fas fa-concierge-bell"> <p>Room service</p></i>
         <i class="fas fa-wifi"> <p>Free Wi-Fi</p></i>
       </div>

       <div class="block-amenities">
         <div class="amenities">
                <div class="fitness">
                    <img src="{{ asset('pictures/fit.jpg') }}" alt=""><h2>Fitness Center</h2>
                     <p>Being away from home does not mean foregoing your fitness regime.<br>
                     Friends Hotel provides you an opportunity to stay fit at<br>
                     one of the best gyms in town with the latest Life Fitness equipment<br>
                     and dynamic selection of workout programs that cater<br> to fitness-conscious
                     travelers.</p>
                </div>
                <div class="cinema">
                    <img src="{{ asset('pictures/cinema.jpg') }}" alt=""><h2>Cinema</h2>
                    <p>Being away from home does not mean foregoing your fitness regime.<br>
                     Friends Hotelprovides you an opportunity to stay fit at<br>
                     one of the best gyms in town with the latest Life Fitness equipment<br>
                     and dynamic selection of workout programs that cater<br> to fitness-conscious
                     travelers.</p>
                </div>
         </div>
       </div>
     </div>
	</div>




  <div class="rooms">
    <h1>ROOMS</h1>
    <span class="border2"></span>
    <div class="room-page">
      <img src="{{ asset('pictures/room3.jpg') }}" alt="">
    </div>
      <div class="room-amenities">
         <div class="amenities2">
                <div class="fitness1">
                    <img src="{{ asset('pictures/room1.jpg') }}" alt="">
                    
                      <a href="#">LEARN MORE</a>
                      <a href="#">BOOK NOW</a>
                   
                </div>
                <div class="fitness2">
                    <img src="{{ asset('pictures/room2.jpg') }}" alt="">
                      <a href="#">LEARN MORE</a>
                      <a href="#">BOOK NOW</a>
                </div>

              </div>
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