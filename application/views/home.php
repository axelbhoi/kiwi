<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Homepage</title>
<link rel="icon" href="<?php echo base_url();?>img/favicon.png" type="image/png">
<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="<?php echo base_url();?>js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/classie.js"></script>


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>
<body>
<div style="overflow:hidden;">
<header class="header" id="header" style = "background-image: url(<?php echo base_url();?>img/<?php echo $images[0]->name;?>);"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="<?php echo base_url();?>img/logo.png" alt=""></a>	
        </figure>	
        <!--
            <h1 class="animated fadeInDown delay-07s">Welcome To Knight Studios</h1>
        -->
        <ul class="we-create animated fadeInUp delay-1s">
        	<li style="color:#FFFFFF">We are a digital media production house that loves capturing<br> and creating beautiful memories in photos and and videos.</li>
        </ul>
            <a class="link animated fadeInUp delay-1s" href="#" id = "button">Get Started</a>
    </div>
</div>
</header><!--header-end-->


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li class="small-logo"><a href="#header"><img src="<?php echo base_url();?>img/small-logo.png" alt=""></a></li>
            <li><a href="#client">Clients</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Services</h2>
    	<h6>We offer exceptional service with complimentary hugs.</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-paw"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>PRODUCTION</h3>
                        <p>Wherein we think of ideas and then point our cameras and lights at said things.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-gear"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>POST PRODUCTION</h3>
                        <p>Wherein we take the footage of the things and create even better things from them.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-apple"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>ANIMATION / V F X</h3>
                        <p>Wherein we create something awesome from the nothingness, and make it move.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>PHOTOGRAPHY</h3>
                        <p>Wherein we take pictures of things. These don't move, though. They are still.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="<?php echo base_url();?>img/<?php echo $images[1]->name;?>" alt="">
            </figure>
        
        </div>
	</div>
</section><!--main-section-end-->



<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="<?php echo base_url();?>img/<?php echo $images[2]->name;?>" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>featured work</h2>
            	<P class="padding-b">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</P>
            	<div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>magic of theme development</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>COMPLETE PACKAGED</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>FAST PHASE PRODUCTION</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->



<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
            <?php if($categories):?>
                <li><a href="#" data-filter="*" class="current" >All</a></li>

                <?php foreach($categories as $category):?>

                    <li><a href="#" data-filter=".<?php echo $category->tag;?>" ><?php echo $category->name;?></a></li>

                <?php endforeach;?>
            <?php endif;?>
            <!--
        	<li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".production" >Production</a></li>
            <li><a href="#" data-filter=".post-production" >Post-Production</a></li>
            <li><a href="#" data-filter=".animation" >Animation / VFX</a></li>
            <li><a href="#" data-filter=".photography" >Photography</a></li>
            -->
        </ul>
       </div> 
        
	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
        <?php if($works):?>
            <?php foreach($works as $work):?>

                <div class=" Portfolio-box <?php echo $work->tag;?>">
                    <a href="#"><img src="<?php echo base_url();?>img/<?php echo $work->cover;?>" alt="" ></a>   
                    <h3><?php echo $work->name;?></h3>
                    <p><?php echo $work->cname;?></p>
                </div>            

            <?php endforeach;?>
        <?php endif;?>

                <!--
                <div class="Portfolio-box post-production">
                	<a href="#"><img src="<?php echo base_url();?>img/Portfolio-pic2.jpg" alt=""></a>	
                	<h3>Luca Theme</h3>
                    <p>Post Production</p>
                </div>
                <div class=" Portfolio-box production">
                	<a href="#"><img src="<?php echo base_url();?>img/Portfolio-pic3.jpg" alt=""></a>	
                	<h3>Uni Sans</h3>
                    <p>Production</p>
                </div>
                <div class=" Portfolio-box photography" >
                	<a href="#"><img src="<?php echo base_url();?>img/Portfolio-pic4.jpg" alt=""></a>	
                	<h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>
                <div class=" Portfolio-box production">
                	<a href="#"><img src="<?php echo base_url();?>img/Portfolio-pic5.jpg" alt=""></a>	
                	<h3>Hipster</h3>
                    <p>Production</p>
                </div>
                <div class=" Portfolio-box photography">
                	<a href="#"><img src="<?php echo base_url();?>img/Portfolio-pic6.jpg" alt=""></a>	
                	<h3>Windmills</h3>
                    <p>Photography</p>
                </div>
                -->
    </div>
</section><!--main-section-end-->


<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Kiwi House. They made sure we were well fed and drunk all the time!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="<?php echo base_url();?>img/client-pic1.jpg" alt="">
                <h3>Axel Mikael M. Felipe</h3>
                <span>Digital NetWerkz PH</span>
            </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->
<div class="c-logo-part"><!--c-logo-part-start-->
	<div class="container">
    	<ul>
        	<li><a href="#"><img src="<?php echo base_url();?>img/c-liogo1.png" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>img/c-liogo2.png" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>img/c-liogo3.png" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>img/c-liogo4.png" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>img/c-liogo5.png" alt=""></a></li>
    	</ul>
	</div>
</div><!--c-logo-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="<?php echo base_url();?>img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Axel Mikael M. Felipe</h3>
                <span class="wow fadeInDown delay-03s">Web Developer</span>
                <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="<?php echo base_url();?>img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Zigfred Javillo</h3>
                <span class="wow fadeInDown delay-06s">Project Manager</span>
                <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="<?php echo base_url();?>img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Jessie James M. Gamis</h3>
                <span class="wow fadeInDown delay-09s">Grapics & Design</span>
                <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>hello@knightstudios.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
        	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
            	<div class="form">
                	<input class="input-text" type="text" name="" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                	<textarea class="input-text text-area" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                    <input class="input-btn" type="submit" value="send message">
                </div>	
            </div>
        </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="<?php echo base_url();?>img/footer-logo.png" alt=""></a></div>
        <span class="copyright">Kiwi House created by © <a href="#">Digital NetWerkz PH 2015</a> . All Rights Reserved.</span>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
    });
</script>

<script type = "text/javascript">
    $("#button").click(function(e) {
        $('html, body').animate({
            scrollTop: $("#test").offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });    
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500,'easeInOutExpo');

			event.preventDefault();
		});
    

	});

</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>
</body>
</html>