<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Suji Digitals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span>Suji</span>Digitals</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Admin</span></a></li>
	          
	          <li class="nav-item"><a href="customermanage/index.php" class="nav-link"><span>Customers Management</span></a></li>
	          <li class="nav-item"><a href="Orders/index.php" class="nav-link"><span>Orders Management</span></a></li>
	          <li class="nav-item"><a href="Delivery/index.php" class="nav-link"><span>Delivery Management</span></a></li>
	      
            <li class="nav-item"><a href="index.html" class="nav-link"><span>LogOut</span></a></li>
            
          </ul>

          <div>
            
          <!-- Notification Area -->
            <nav class="navigation">
              <ul class="inner-navigation">
                <li class="right">
                  <div class="dropdown-container">
                    <a href="#" data-dropdown="notificationMenu" class="menu-link has-notifications circle">
                      <i class="fa icon-bell"></i>
                    </a>
                    <ul class="dropdown" name="notificationMenu">
                      <li class="notification-group">
                        <div class="noti_area">
                        <?php
                            include_once("Orders/config.php");
                            $query="select orders.*,users.UserName from orders INNER JOIN users ON users.id=orders.user_id;";
							$result = mysqli_query($mysqli, $query);
							
							if(mysqli_num_rows($result)==0){
								echo "No Notifications";
							}
                            while($res = mysqli_fetch_array($result)) {
                              echo "<a href=\"../P/Orders/OrderEdit.php?id=".$res['id']."\">";
                              ?>
                              <div class="single_noti">

                              <?php
                              echo "<div class=\"noti_username\">".$res['UserName']."</div>";
                              echo "<div class=\"noti_category\">".$res['categary']."(".$res['quantity'].")</div>";
                              // echo "<div>".$res['quantity']."</div><br>";
                              // echo "<div>".$res['description']."</div><br>";
                              // echo "<div>".$res['UserName']."</div><br>";
                              echo "<hr>";
                              echo "</div>";
                              echo "</a>";
                            }
                            ?>

                      
                        <!-- </div> -->
                          </div>
                      </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>
            <!-- Notification Area -->






          </div>
	      </div>
	    </div>
	  </nav>
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Hey! We Are</span>
		  				<h1>Suji Digitals</h1>
			  				<h2>
								  <span
								     class="txt-rotate"
								     data-period="2000"
								     data-rotate='[ "Banner Printing ", "Sticker Printing", "Photography", "Visiting Card Printing", "WeddingCard Printing" ]'></span>
								</h2>
							</div>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About us</h2>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>Suji Digitals</span></li>
		            	<li class="d-flex"><span>Since:</span> <span>November 28, 1989</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>Sathiyakattu Road, Chulipuram
							Jaffna</span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span>1000</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>ajitharan@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>077 327 5598</span></li>
		            </ul>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
              	<p class="mb-4">
	                <span class="number" data-number="120">0</span>
	                <span>Project complete</span>
                </p>
             
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>


    

    
 

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container-fluid px-md-5">
				<div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 shadow">
              <div class="text">
                <strong class="number" data-number="100">0</strong>
                <span>Awards</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 shadow">
              <div class="text">
                <strong class="number" data-number="1200">0</strong>
                <span>Complete Projects</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 shadow">
              <div class="text">
                <strong class="number" data-number="1200">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 shadow">
              <div class="text">
                <strong class="number" data-number="500">0</strong>
                <span>Cups of coffee</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Address</h3>
		            <p>Sathiyakattu Road, Chulipuram Jaffna</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Contact Number</h3>
		            <p><a href="tel://1234567920">077 327 5598</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Email Address</h3>
		            <p><a href="mailto:info@yoursite.com">ajitharan@gmail.com</a></p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Website</h3>
		            <p><a href="#">yoursite.com</a></p>
	            </div>
	          </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/about.jpg);"></div>
          </div>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
        
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Sathiyakattu Road, Chulipuram Jaffna</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">077 327 5598</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ajitharan@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

       
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>


<style>

@import 'https://fonts.googleapis.com/css?family=Open+Sans';



 .navigation .inner-navigation li .menu-link.menu-anchor {
	 padding: 20px;
	 margin: 0;
	 background: #ff5252;
	 color: #fff;
}
 .navigation .inner-navigation li .menu-link.has-notifications {
	 background: #ff5252;
	 color: #fff;
}
 .navigation .inner-navigation li .menu-link.circle {
	 line-height: 3.8em;
	 padding: 7px 12px;
	 border-radius: 50%;
}
 .navigation .inner-navigation li .menu-link.circle:hover {
	 background: #ff5252;
	 color: #fff;
}
 .navigation .inner-navigation li .menu-link.square:hover {
	 background: #ff5252;
	 color: #fff;
	 transition: background 0.5s, color 0.5s;
}
 .dropdown-container {
	 overflow-y: hidden;
}
 .dropdown-container.expanded .dropdown {
	 -webkit-animation: fadein 0.5s;
	 -moz-animation: fadein 0.5s;
	 -ms-animation: fadein 0.5s;
	 -o-animation: fadein 0.5s;
	 animation: fadein 0.5s;
	 display: block;
}
 .dropdown-container .dropdown {
	 -webkit-animation: fadeout 0.5s;
	 -moz-animation: fadeout 0.5s;
	 -ms-animation: fadeout 0.5s;
	 -o-animation: fadeout 0.5s;
	 animation: fadeout 0.5s;
	 display: none;
	 position: absolute;
	 width: 300px;
	 height: auto;
	 max-height: 600px;
	 overflow-y: hidden;
	 padding: 0;
	 margin: 0;
	 background: #eee;
	 margin-top: 3px;
	 margin-right: -15px;
	 border-top: 4px solid #ff5252;
	 border-bottom-left-radius: 15px;
	 border-bottom-right-radius: 15px;
	 -webkit-box-shadow: 2px 2px 15px -5px rgba(0, 0, 0, 0.75);
	 -moz-box-shadow: 2px 2px 15px -5px rgba(0, 0, 0, 0.75);
	 box-shadow: 2px 2px 15px -5px rgba(0, 0, 0, 0.75);
	/* &:before{
		 position: absolute;
		 content: ' ';
		 width: 0;
		 height: 0;
		 top: -13px;
		 right: 7px;
		 border-left: 8px solid transparent;
		 border-right: 8px solid transparent;
		 border-bottom: 10px solid $secondary-color;
	}
	 */
}
 .dropdown-container .dropdown .notification-group {
	 border-bottom: 1px solid #e3e3e3;
	 overflow: hidden;
	 min-height: 65px;
}
 .dropdown-container .dropdown .notification-group:last-child {
	 border-bottom: 0;
	 border-bottom-left-radius: 15px;
	 border-bottom-right-radius: 15px;
}
 .dropdown-container .dropdown .notification-group .notification-tab {
	 padding: 0px 25px;
	 min-height: 65px;
}
 .dropdown-container .dropdown .notification-group .notification-tab:hover {
	 cursor: pointer;
	 background: #3f51b5;
}
 .dropdown-container .dropdown .notification-group .notification-tab:hover .fa, .dropdown-container .dropdown .notification-group .notification-tab:hover h4, .dropdown-container .dropdown .notification-group .notification-tab:hover .label {
	 color: #fff;
	 display: inline-block;
}
 .dropdown-container .dropdown .notification-group .notification-tab:hover .label {
	 background: #ff5252;
	 border-color: #ff5252;
}
 .dropdown-container .dropdown .notification-group .notification-list {
	 padding: 0;
	 overflow-y: auto;
	 height: 0px;
	 max-height: 250px;
	 transition: height 0.5s;
}
 .dropdown-container .dropdown .notification-group .notification-list .notification-list-item {
	 padding: 5px 25px;
	 border-bottom: 1px solid #e3e3e3;
}
 .dropdown-container .dropdown .notification-group .notification-list .notification-list-item .message {
	 margin: 5px 5px 10px;
}
 .dropdown-container .dropdown .notification-group .notification-list .notification-list-item .item-footer a {
	 color: #3f51b5;
	 text-decoration: none;
}
 .dropdown-container .dropdown .notification-group .notification-list .notification-list-item .item-footer .date {
	 float: right;
}
 .dropdown-container .dropdown .notification-group .notification-list .notification-list-item:nth-of-type(odd) {
	 background: #e3e3e3;
}
 .dropdown-container .dropdown .notification-group .notification-list .notification-list-item:hover {
	 cursor: pointer;
}
 .dropdown-container .dropdown .notification-group .notification-list .notification-list-item:last-child {
	 border-bottom: 0;
	 border-bottom-left-radius: 15px;
	 border-bottom-right-radius: 15px;
}
 .dropdown-container .dropdown .notification-group.expanded .notification-tab {
	 background: #3f51b5;
}
 .dropdown-container .dropdown .notification-group.expanded .notification-tab .fa, .dropdown-container .dropdown .notification-group.expanded .notification-tab h4, .dropdown-container .dropdown .notification-group.expanded .notification-tab .label {
	 color: #fff;
	 display: inline-block;
}
 .dropdown-container .dropdown .notification-group.expanded .notification-tab .label {
	 background: #ff5252;
	 border-color: #ff5252;
}
 .dropdown-container .dropdown .notification-group.expanded .notification-list {
	 height: 250px;
	 max-height: 250px;
	 transition: height 0.5s;
}
 .dropdown-container .dropdown .notification-group .fa, .dropdown-container .dropdown .notification-group h4, .dropdown-container .dropdown .notification-group .label {
	 color: #333;
	 display: inline-block;
}
 .dropdown-container .dropdown .notification-group .fa {
	 margin-right: 5px;
	 margin-top: 25px;
}
 .dropdown-container .dropdown .notification-group .label {
	 float: right;
	 margin-top: 20px;
	 color: #3f51b5;
	 border: 1px solid #3f51b5;
	 padding: 0px 7px;
	 border-radius: 15px;
}
 .right {
	 float: right;
}
 .left {
	 float: left;
}
 @media only screen and (max-width: 321px) {
	 .dropdown-container .dropdown .notification-group .notification-tab h4 {
		 display: none;
	}
	 .dropdown-container .dropdown .notification-group .notification-tab:hover h4 {
		 display: none;
	}
	 .dropdown-container .dropdown .notification-group.expanded .notification-tab h4 {
		 display: none;
	}
}
 @media only screen and (max-width: 514px) {
	 .dropdown-container .dropdown {
		 width: 100%;
		 margin: 0px;
		 left: 0;
	}
}
 @keyframes fadein {
	 from {
		 opacity: 0;
	}
	 to {
		 opacity: 1;
	}
}
 @-moz-keyframes fadein {
	 from {
		 opacity: 0;
	}
	 to {
		 opacity: 1;
	}
}
 @-webkit-keyframes fadein {
	 from {
		 opacity: 0;
	}
	 to {
		 opacity: 1;
	}
}
 @-ms-keyframes fadein {
	 from {
		 opacity: 0;
	}
	 to {
		 opacity: 1;
	}
}
 @-o-keyframes fadein {
	 from {
		 opacity: 0;
	}
	 to {
		 opacity: 1;
	}
}
 @keyframes fadeout {
	 from {
		 opacity: 1;
	}
	 to {
		 opacity: 0;
	}
}
 @-moz-keyframes fadeout {
	 from {
		 opacity: 1;
	}
	 to {
		 opacity: 0;
	}
}
 @-webkit-keyframes fadeout {
	 from {
		 opacity: 1;
	}
	 to {
		 opacity: 0;
	}
}
 @-ms-keyframes fadeout {
	 from {
		 opacity: 1;
	}
	 to {
		 opacity: 0;
	}
}
 @-o-keyframes fadeout {
	 from {
		 opacity: 1;
	}
	 to {
		 opacity: 0;
	}
}
 
.noti_area{
  height:250px;
  overflow:scroll;
  overflow-x:hidden;
}
.single_noti div{
  padding: 10px;
}
.single_noti hr{
  margin:0px;

}
.single_noti:hover{
  background-color:#ffffff;
}
.noti_username{
  color: black;
}
.noti_category{
  margin-top: -27px;
    font-size: 13px;
}
</style>

<script>


//Open dropdown when clicking on element
$(document).on('click', "a[data-dropdown='notificationMenu']",  function(e){
  e.preventDefault();
  
  var el = $(e.currentTarget);
  
  $('body').prepend('<div id="dropdownOverlay" style="background: transparent; height:100%;width:100%;position:fixed;"></div>')
  
  var container = $(e.currentTarget).parent();
  var dropdown = container.find('.dropdown');
  var containerWidth = container.width();
  var containerHeight = container.height();
  
  var anchorOffset = $(e.currentTarget).offset();

  dropdown.css({
    'right': containerWidth / 2 + 'px'
  })
  
  container.toggleClass('expanded')
  
});

//Close dropdowns on document click

$(document).on('click', '#dropdownOverlay', function(e){
  var el = $(e.currentTarget)[0].activeElement;
  
  if(typeof $(el).attr('data-dropdown') === 'undefined'){
    $('#dropdownOverlay').remove();
    $('.dropdown-container.expanded').removeClass('expanded');
  }
})

//Dropdown collapsile tabs
$('.notification-tab').click(function(e){
  if($(e.currentTarget).parent().hasClass('expanded')){
    $('.notification-group').removeClass('expanded');
  }
  else{
    $('.notification-group').removeClass('expanded');
    $(e.currentTarget).parent().toggleClass('expanded');
  }
})

</script>