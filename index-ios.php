<!DOCTYPE HTML>
 <html lang="en">
  <head>
  
     
   
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Welcome to Our Egyptian Wedding</title> 
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="Jessica Martin and Richard Knight's Egyptian Wedding" >


 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88739090-2', 'auto');
  ga('send', 'pageview');

</script>
 
 
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>-->
        <script src="assets/jquery/3.0.0/jquery.min.js"></script>
        
   <!-- HTML shiv and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
   
    
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="assets/bootstrap-v4/css/bootstrap.min.css"    >
    
    <!-- FONT AWESOME STYLESHEET -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" >
 
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="assets/owlcarousel-new/assets/owl.carousel.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="assets/owlcarousel-new/assets/owl.theme.default.css">
    
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Hanuman|Kaushan+Script|Parisienne|Prata|Tangerine|Great+Vibes" rel="stylesheet">
    
    <!-- LIGHT BOX -->
    <link href="assets/lightbox2-master/src/css/lightbox.css" rel="stylesheet">
    
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="assets/css/animations.css" >
    
   <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="assets/css/jr-styles.css" >
    
          
      
    </head>
    <body>
               <?PHP
      
  /*
*	Mobile device detection
*/
if( !function_exists('mobile_user_agent_switch') ){
	function mobile_user_agent_switch(){
		$device = '';
		//return $_SERVER['HTTP_USER_AGENT']; 
		if( stristr($_SERVER['HTTP_USER_AGENT'],'ipad') ) {
			$device = "ios ipad";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'iphone') || strstr($_SERVER['HTTP_USER_AGENT'],'iphone') ) {
			$device = "ios iphone";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'blackberry') ) {
			$device = "blackberry";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'android') ) {
			$device = "android";
		} else if ( stristr($_SERVER['HTTP_USER_AGENT'],'windows') ) {
            $device = 'windows';
        } else if ( stristr($_SERVER['HTTP_USER_AGENT'],'linux') ) {
            $device = 'linux';
        } else if ( stristr($_SERVER['HTTP_USER_AGENT'],'macintosh') ) {
            $device = 'macintosh';
        } else {
            $device = 'undefined';
        }
		
		if( $device ) {
			return $device; 
		} return false; {
			return false;
		}
	}
    $curr_device = mobile_user_agent_switch();
    
    ?>
  
      <script> 
              windowHeight = $(window).innerHeight();
        // alert('DEVICE: ' + '<?PHP echo mobile_user_agent_switch(); ?>' + '\n HEIGHT / WIDTH: ' +  screen.height + ' ' + screen.width + '\n wHEIGHT / wWIDTH: ' +  windowHeight + ' ' + window.width); console.log('user_agent')</script>
      
    <?php
}
      
?> 

               <nav id="navbar-site-top" class="navbar navbar-light navbar-fixed-top navbar-full ">
        <div class="container">
        <div class="row">
           <div class="col-xs-4"><button id="site-nav-toggler-btn" class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#nav-header" aria-controls="nav-header" aria-expanded="false" aria-label="Toggle navigation">
  </button></div>
           <div class="col-xs-4"><span class="text-xs-center" ><a class="" href="#">
    <img src="/assets/img/wedding-rings-top-50h.png" height="40" class="d-inline-block hidden-md-up" alt="">
  </a></span></div>
           <div class="col-xs-4"></div>
            
  
   
   <!-- <span class="heart-beat">&#9829;</span>--> 
       </div> <!-- END ROW -->
        </div>
    <div class="collapse navbar-toggleable-sm horizontal-align-parent text-xs-center" id="nav-header">
    <span class="hidden-md-up"><hr></span>
   
          <ul class="nav navbar-nav wedding-main-text">
            <li class="nav-item active">
                  <a id="home-nav-link" class="nav-link" >Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                 
              <a id="gallery-nav-link" class="nav-link" ><span class="nav-link-separator"> </span> Gallery</a>
            </li>
            <li class="nav-item">
                  <a id="couple-nav-link"  class="nav-link" ><span class="nav-link-separator"> </span> Couple</a>
            </li>
            <li class="nav-item">
              <a id="location-nav-link" class="nav-link location-info-link" ><span class="nav-link-separator"></span> Location &amp; Travel Info</a> 
            </li>
             
            <li class="nav-item">
              <a id="rsvp-nav-link" class="nav-link" ><span class="nav-link-separator"></span>RSVP</a>
            </li>
            
             <li class="nav-item">
              <a id="bridal-party-nav-link" class="nav-link" data-toggle="collapse" ><span class="nav-link-separator"></span>Bridal Party</a>
            </li>
            
            
           
            
          </ul>
          
          
            </div>
    </nav>
        <style>
#cover-main {
    background-color: yellow; 
    color: red;
}
</style>
          <div id="top-menu-spacer" class="" style="">
        </div>
        <section id="cover-main" class="page-cover" style="">
        <div class="container-fluid">
         <div class="row">
               <div id="cover-main-container-inner-wrapper" class="container-inner-wrapper" >
           <!-- 
            <div class="row cover-img-row clearfix">
               <div class="col-xs-12 offset-xs-0 col-sm-8 col-md-8 offset-sm-4 col-lg-4 offset-lg-7">
                <div class="cover-img-wrapper">
                   <div id="float-img-wrapper-1" class="cover-img-float"><img id="float-img-1" class="cover-couple-img" src="assets/img/couple/dr-kiss.jpg" alt=""></div>
                   <div id="float-img-wrapper-2" class="cover-img-float"><img id="float-img-2" class="cover-couple-img" src="assets/img/couple/rich-jess-smile-side.jpg" alt="">
                  </div>
                    <img id="cover-couple-img-main" class="cover-couple-img" src="assets/img/couple/jess-rich-smile.jpg" alt="">
                     
                </div>
               


            </div>
               <div class="col-xs-12 offset-xs-0 col-sm-8 col-md-6 offset-sm-4 col-lg-4 offset-lg-7">
                <div class="cover-img-wrapper">
                   <div id="float-img-wrapper-1" class="cover-img-float"><img id="float-img-1" class="cover-couple-img" src="assets/img/couple/dr-kiss.jpg" alt=""></div>
                   <div id="float-img-wrapper-2" class="cover-img-float"><img id="float-img-2" class="cover-couple-img" src="assets/img/couple/rich-jess-smile-side.jpg" alt="">
                  </div>
                    <img class="cover-couple-img" src="assets/img/couple/jess-rich-smile.jpg" alt="">

                </div>

            </div>
            </div>
            <div class="row cover-fade-row clearfix">
             <div class="col-xs-12 offset-xs-0 col-sm-8 col-md-8 offset-sm-4 col-lg-4 offset-lg-7">
                    <div id="fade-in-wrapper-2" class="box fade-in one">
                        <h2 id="cover-fade-in-header" class="display-1">Richard &amp; Jessica</h2> 
                         <h2 id="cover-fade-in-sub" class="display-4">November 4th, 2017</h2> 
                      </div>
                </div>
            </div>
            -->
                 <div id="cover-fade-in-div" class="col-xs-12 col-sm-10 col-md-8 offset-sm-1 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 vertical-align-child">
                    <div id="fade-in-wrapper-2" class="box fade-in one">
                        <h1 id="cover-fade-in-header" class="display-1">Richard &amp; Jessica</h1> 
                         <h2 id="cover-fade-in-sub" class="display-4">November 4th, 2017</h2> 
                         
                      </div>
                </div>
            
             </div><!-- End container-inner-wrapper -->
            
             
         </div>
        
        </div>
        
        
    </section>
      <script>
           /* windowHeight = $(window).innerHeight();
       
         
          // get size
           var x = document.getElementById("cover-main").style.height = screen.availHeight +'px';
          var x = document.getElementById("cover-main").style.width = screen.availWidth;
                   
              $('#cover-main').height( windowHeight);
        $('#cover-main .container-fluid').height( windowHeight);
      //  $('#cover-main').css('width',  screen.width +'px');
          
         var divHeight =  $('#cover-main').height() ;
          
          var bgInfo =  $('#cover-main').height() ;
          
          var bgIMG = $('#cover-main').css('background-size');
     //     console.log('background', bgInfo);

        $(document).ready(function(){
            
     //    alert("cover height: " + divHeight + "\nwindow height: " + windowHeight + "\ncontainer height: " + windowHeight ) ;  
        });*/
        </script>
       
       <section id="gallery-main-1" class="page-section gallery-section" style="background-attachment:scroll;">
         <div class="bg-overlay ">
            <div class="container-fluid">
          
               <div class="row">
               <div class="col-xs-12">
                   <h2 class="display-4 section-header dark-text text-xs-center">A Match Made In Heaven</h2>
                 
                  <div id="gallery-carousel-main-1" class="couple-gallery-carousel owl-carousel owl-theme" style="height:100px">

                          <div class="item"><img class="rounded img-thumbnail" src="assets/img/couple/couple-kiss-cheek-300.jpg" width= "150" height= "150" alt="Owl Image"></div>
                          <div class="item"><img class="rounded" src="assets/img/couple/couple-kiss-cheek-300.jpg" alt="Owl Image"></div>
                          <div class="item"><img class="rounded" src="assets/img/couple/couple-kiss-cheek-300.jpg" alt="Owl Image"></div>
                          <div class="item"><img class="rounded" src="assets/img/couple/couple-kiss-cheek-300.jpg" alt="Owl Image"></div>
                            <div class="item"><img class="rounded" src="assets/img/couple/couple-kiss-cheek-300.jpg" alt="Owl Image"></div>
                    </div>
                    
                                
                        
                
            </div>
               
           </div>
         
        </div>
           </div>
        
        
    </section>
       <section id="about-couple-main" class="page-section">
        <div class="container-fluid">
            <div class="row">
               <div class="col-xs-12 col-sm-6">
                       <div id="bride-bg-row" class="couple-bg-row row vertical-align-parent">
                           <div class="col-xs-12 col-sm-12 col-md-12 offset-md-0 col-lg-8 offset-lg-2 vertical-align-child">

              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
			<div id="bride-info-card" class="card couple-info-card ">
                  <div class="card-block info-header">
                    <h4 class="display-4 section-header light-text card-title">Jessica Martin</h4>
                    <hr class="thick-hr">
                    <h4 class="card-subtitle">THE BRIDE</h4>
                    <hr class="thick-hr">
                      <h4 class="card-sub-subtitle">"His Beatiful Queen"</h4>
                   <!-- <img src="/assets/img/jess/jess-thumb.jpg" alt="" class="couple-thumbnail-single rounded-circle">
                  -->
                       <p class="text-xs-center">
                   <button id="groom-words-btn" type="button" class="btn btn-primary couple-words-btn">"In His Words"</button></p>
                  </div> <div class="card-block social-links">
     
                    <a href="https://www.facebook.com/Nippylavernnyc" target="_blank" class="card-link "><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                    <a href="https://www.instagram.com/nippylavern" target="_blank" class="card-link "><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                  </div>
            
    

              
    
</div>
		</div>
		<div class="back">
			<!-- back content -->
			<div id="bride-info-card" class="card couple-info-card ">
                  <div class="card-block info-header">
                    <p class="card-text"><span class="large-quote">"</span>She is the love of my life, the pain in my side, the push when I want stop, the battery that keeps me going, my north star when I can't find my way, she's my everything. </p>
                    <p class="card-text">Not sure what I did to get such an amazing, beautiful and talented woman in my life, but Thank God I did it." - Richard Knight
                    </p>
                    
                    <div class="text-xs-center">
                        <button id="groom-words-btn" type="button" class="btn btn-primary btn-sm couple-words-to-front-btn"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></button>
                
                      </div>
                    </div> <div class="card-block social-links">
     
                    <a href="https://www.facebook.com/Nippylavernnyc" target="_blank" class="card-link "><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                    <a href="https://www.instagram.com/nippylavern" target="_blank" class="card-link "><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                  </div>
            
    

              
    
</div>
		</div>
	</div> <!-- END FLIPPER -->
</div> <!-- END FLIPPER CONTAINER -->
 
         
                 
                   </div>
                           
                       </div>
                   
               </div>
               
               <div class="col-xs-12 col-sm-6">
                       <div id="groom-bg-row" class="couple-bg-row row vertical-align-parent">
                           <div class="col-xs-12 col-sm-12 col-md-12 offset-md-0 col-lg-8 offset-lg-2 vertical-align-child">
                <div class="flip-container" >
                 <div class="flipper">
		<div class="front">
			 <div id="groom-info-card" class="card couple-info-card">
                  <div class="card-block info-header">
                    <h4 class="display-4  section-header light-text card-title">Richard Knight</h4>
                    <hr class="thick-hr">
                    <h4 class="card-subtitle">THE GROOM</h4>
                    <hr class="thick-hr">
                    <h4 class="card-sub-subtitle">"Her Charismatic King"</h4>
                    <!--<img src="/assets/img/rich/rich-thumb-dark.jpg" alt="" class="couple-thumbnail-single rounded-circle">
                  </div>
                 --> <!--<div class="card-block"><p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia explicabo id veniam iste officiis nesciunt animi vitae, doloribus atque temporibus perferendis esse porro recusandae quibusdam magnam natus praesentium necessitatibus iusto?</p>
                   </div>-->
                    <p class="text-xs-center">
                   <button id="groom-words-btn" type="button" class="btn btn-primary couple-words-btn">"In Her Words"</button></p>
                  </div>
                  <div class="card-block social-links">
                    <a href="https://www.facebook.com/richard.knight.73932" target="_blank" class="card-link "><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                    <a href="https://www.instagram.com/whoisrichardknight" target="_blank" class="card-link "><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                  </div>
                
                  
                   </div>
    

              
  
		</div>
		<div class="back">
			<!-- back content -->
			<div id="bride-info-card" class="card couple-info-card ">
                  <div class="card-block info-header">
                    <p class="card-text"><span class="large-quote">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia explicabo id veniam iste officiis nesciunt animi vitae, doloribus atque temporibus perferendis esse porro recusandae quibusdam magnam natus praesentium necessitatibus iusto?
                  
                    </p>
                    <div class="text-xs-center">
                        <button id="groom-words-btn" type="button" class="btn btn-primary btn-sm couple-words-to-front-btn"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></button>
                
                    </div>
                    </div> <div class="card-block social-links">
     
                    <a href="https://www.facebook.com/Nippylavernnyc" target="_blank" class="card-link "><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                    <a href="https://www.instagram.com/nippylavern" target="_blank" class="card-link "><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                  </div>
            
    

              
    
</div>
		</div>
	</div> <!-- END FLIPPER -->
    </div> <!-- END FLIPPER-CONTAINER -->
              
              
                           
                       </div>
                   
               </div>
                
                   
            </div>
        </div>
        </div>
        
        <script>
           $('.couple-words-btn').click(function(event){
                //console.log('this object', this);
               var btn_id = '#' + this.getAttribute('id');
               
               //console.log('this object: ', btn_id);
               
               // Set class of flipper card to 'flip-now'
               var curr_flipper = $(this).closest('.flipper');
                $(curr_flipper).css('transform','rotateY(180deg)');
                
               var curr_back = $(this).closest('.back');
                var curr_container = $(this).closest('.flip-container');
                 
               // DISABLED - FLIP ON HOVER 
              /* $( curr_container ).hover(function() {
                  $(curr_flipper).css('transform','rotateY(180deg)');
                  $(curr_flipper).css('transform','');
                   // $(this).css('transform','rotateY(180deg)');
                    //console.log('focus out ', this);
               });*/
               
           });
            $('.couple-words-to-front-btn').click(function(event){
                var btn_id = '#' + this.getAttribute('id');
               
               // Set class of flipper card to 'flip-now'
               var curr_flipper = $(this).closest('.flipper');
                $(curr_flipper).css('transform','');
                
            
               });
             
            
           </script>
        
    </section> 
       
   <section id="location-main" class="page-section">
        <div class="container-fluid">
            <div class="row">
                  <div id="location-info-content" class="col-xs-12 col-md-6">
                     <h2 class="display-4 section-header dark-text text-xs-center">Destination: <span>Cancun Mexico</span></h2>
                     <hr>
                     <h2 class="text-xs-center wedding-main-text">The Royalton <span>Riviera Cancun</span> <br><small>Luxury Resort &amp; Spa</small></h2><hr>
                     <p class="text-xs-center "><a class="btn btn-success " target="_blank" href="http://www.royaltonresorts.com/en/riviera-cancun/all-inclusive-resorts.aspx" role="button">Visit The Royalton <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                   
                         
                 <div id="location-carousel-main" class="owl-carousel owl-theme">
                   


                      <div class="item"><img src="assets/img/royalton/600-400/1-royalton-sky-view.jpg" alt="The Last of us"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/2-gallery-3.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/3-Family-Suite-Rooftop-Jaccuzzi-6.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/4-Luxury-Chairman-Suite_Swimout-6.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/5-Presidential-2-Bedroom-1.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/6-Hideaway-at-Royalton-Riviera-Cancun-03.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/7-royalton-bar.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/8-royalton-dining.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/9-royalton-luxury-dining.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/10-royalton-luxury-dining-2.jpg" alt="The Royalton"></div>
                      <div class="item"><img src="assets/img/royalton/600-400/11-Royalton-Riviera-Cancun-Overview.jpg" alt="The Royalton"></div>
               
                         
                         
                   <!-- With light box links
                      <div class="item">                <a href="assets/img/royalton/600-400/1-royalton-sky-view.jpg" data-lightbox=""><img src="assets/img/royalton/600-400/1-royalton-sky-view.jpg" alt="The Last of us"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/2-gallery-3.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/2-gallery-3.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/3-Family-Suite-Rooftop-Jaccuzzi-6.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/3-Family-Suite-Rooftop-Jaccuzzi-6.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/4-Luxury-Chairman-Suite_Swimout-6.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/4-Luxury-Chairman-Suite_Swimout-6.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/5-Presidential-2-Bedroom-1.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/5-Presidential-2-Bedroom-1.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/6-Hideaway-at-Royalton-Riviera-Cancun-03.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/6-Hideaway-at-Royalton-Riviera-Cancun-03.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/7-royalton-bar.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/7-royalton-bar.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/8-royalton-dining.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/8-royalton-dining.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/9-royalton-luxury-dining.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/9-royalton-luxury-dining.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/10-royalton-luxury-dining-2.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/10-royalton-luxury-dining-2.jpg" alt="The Royalton"></a></div>
                      <div class="item"> <a href="assets/img/royalton/600-400/11-Royalton-Riviera-Cancun-Overview.jpg" data-lightbox="royalton-pics"><img src="assets/img/royalton/600-400/11-Royalton-Riviera-Cancun-Overview.jpg" alt="The Royalton"></a></div>
               -->
                         
                         
                        </div> <!--   <div class="embed-responsive embed-responsive-4by3">
  <iframe class="embed-responsive-item" src="http://bcove.me/d2u12lzu" allowfullscreen></iframe>
</div>-->
                                             <!--<object id="flashObj" width="480" height="270" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" /><param name="bgcolor" value="#FFFFFF" /><param name="flashVars" value="videoId=4073155785001&playerID=2209747167001&playerKey=AQ~~,AAACAjbl3IE~,5ak6eABhcgFcLS_DIjHCKxsVtwN8XcEU&domain=embed&dynamicStreaming=true" /><param name="base" value="http://admin.brightcove.com" /><param name="seamlesstabbing" value="false" /><param name="allowFullScreen" value="true" /><param name="swLiveConnect" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://c.brightcove.com/services/viewer/federated_f9?isVid=1&isUI=1" bgcolor="#FFFFFF" flashVars="videoId=4073155785001&playerID=2209747167001&playerKey=AQ~~,AAACAjbl3IE~,5ak6eABhcgFcLS_DIjHCKxsVtwN8XcEU&domain=embed&dynamicStreaming=true" base="http://admin.brightcove.com" name="flashObj" width="480" height="270" seamlesstabbing="false" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" swLiveConnect="true" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>-->
                         
                
            </div>
                 <div id="" class="col-xs-12 col-md-6">
                     <div id="location-info-bg-wrapper" class="bg-overlay bg-dark wedding-main-text">
                         
                        <h2 id="location-info-header" class="display-4 text-xs-center">Important Info Below: <br>Please Read</h2>
                     
                     <p>Please ensure that you RSVP at the bottom of this page. In the coming weeks you will receive information on how to reserve your room and schedule a payment plan (based on your room occupancy) </p> 
                        <blockquote>
                            <p>A deposit of $65 is required to hold your room per person  (These rates are based on double occupancy).  </p> <p>If you would like  to have your own room a payment of $130 is required to hold your room. </p> 

                            
                        </blockquote>
                         
                     <p>If you plan on sharing a room, please make a note of how many people you will be sharing with and each persons name. A deposit is required for each person you are sharing the room with. </p> <p>Please note: The maximum persons allowed in one room is 5. Please do not wait until the last minute to book your room as this is a busy season for traveling.</p>

                     <p>Your Deposit will hold a luxury Junior Suite. If you would like to stay on the Hideaway (Adults Only) or the Diamond club side. Please make note of this when signing up as this side of the resort has a higher rate.</p>

                     <p>Once you receive your rate the Payment Plan schedule will go as follows:</p>
                    
                    <div id="rate-info-wrapper" class=""><ul>
                        <li>Each payment will be due on <strong>the 20th of every month</strong></li>
                        <li>50% of the total Room cost must be paid for  <strong>May 20th, 2017</strong></li>
                        <li>The Final payment is Due <strong>August 20th, 2017</strong></li>
                    </ul></div>
                    
                     <p class="text-xs-center"><a class="btn btn-primary" data-toggle="collapse" href="#packagesTable" aria-expanded="false" aria-controls="packagesTable">
    <i class="fa fa-caret-down" aria-hidden="true"></i> View Packages <i class="fa fa-caret-down" aria-hidden="true"></i>
  </a></p>
                   <div class="collapse" id="packagesTable">
  <div id="rates-table-wrapper-main">

                   
                   
                    <h2 class="text-xs-center">Luxury Junior Suite Packages</h2>
                    <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Occupancy</th>
      <th>3 Nights</th>
      <th>Add'l Night</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Single</th>
      <td>$741</td>
      <td>$252</td>
      
    </tr>
    <tr>
      <th scope="row">Double</th>
      <td>$513</td>
      <td>$176</td>
      
    </tr>
    <tr>
      <th scope="row">Triple</th>
      <td>$477</td>
      <td>$164</td>
      
    </tr>
  <tr>
      <th scope="row">Quad</th>
      <td>$456</td>
      <td>$157</td>
      
    </tr>
  <tr>
      <th scope="row">5 PAC</th>
      <td>$447</td>
      <td>$154</td>
     
    </tr>
  <tr>
      <th scope="row">Children<br><small>-- under 12 -- </small></th>
      <td>$165</td>
      <td>$20</td>
     
    </tr>
  <tr>
      <th scope="row">2x Children <br><small>-- under 12 -- </small></th>
      <td>$288</td>
      <td>$101</td>
     
    </tr>
  </tbody>
</table>
                  <hr class="thick-hr">
                   <h2 class="text-xs-center">Hideaway<br> Luxury Junior Suite Packages<br><small><em>Adults Only</em></small></h2>
                    
 <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Occupancy</th>
      <th>3 Nights</th>
      <th>Add'l Night</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Single</th>
      <td>$822</td>
      <td>$279</td>
      
    </tr>
    <tr>
      <th scope="row">Double</th>
      <td>$570</td>
      <td>$195</td>
      
    </tr>
    <tr>
      <th scope="row">Triple</th>
      <td>$528</td>
      <td>$181</td>
      
    </tr>
  <tr>
      <th scope="row">Quad</th>
      <td>$507</td>
      <td>$174</td>
      
    </tr>
  <tr>
      <th scope="row">5 PAC</th>
      <td>$447</td>
      <td>$154</td>
     
    </tr>
    
  </tbody>
</table>
<hr class="thick-hr">
 <h2 class="text-xs-center">Diamond Club<br>Luxury Junior Suite Packages</h2>
 <hr class="thick-hr">
 <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Occupancy</th>
      <th>3 Nights</th>
      <th>Add'l Night</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Single</th>
      <td>$876</td>
      <td>$297</td>
      
    </tr>
    <tr>
      <th scope="row">Double</th>
      <td>$603</td>
      <td>$206</td>
      
    </tr>
    <tr>
      <th scope="row">Triple</th>
      <td>$558</td>
      <td>$198</td>
      
    </tr>
  <tr>
      <th scope="row">Quad</th>
      <td>$537</td>
      <td>$184</td>
      
    </tr>
  <tr>
      <th scope="row">5 PAC</th>
      <td>$522</td>
      <td>$179</td>
     
    </tr>
    <tr>
      <th scope="row">Children<br><small>-- under 12 -- </small></th>
      <td>$165</td>
      <td>$20</td>
     
    </tr>
  <tr>
      <th scope="row">2x Children <br><small>-- under 12 -- </small></th>
      <td>$333</td>
      <td>$116</td>
     
    </tr>
  </tbody>
</table> 
 
  </div>
</div> <!-- END COLLAPSE -->
                    <br>
                    <!--<p class="text-xs-center"><a class="btn btn-danger" href="#rsvp-main" role="button">RSVP HERE</a></p> 
                    --> </div>
                     
                     
                </div>
            </div>
       </div>
    </section><!-- -->

    <section id="rsvp-main" class="page-section">
       <div class="color-stripe">
           
           
       </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-10 offset-sm-1 col-md-10 offset-md-1 col-lg-8 offset-lg-2 ">                    
                       <h2 class="display-4 wedding-main-text text-xs-center">Will You Be Attending?</h2> 
                       
                       <hr class="thick-hr">
                       <div class="card">
                  <h1 class="section-header dark-text text-xs-center">R.S.V.P. </h1>
                  <hr>
               
                  <div class="card-block">
                    <form id="rsvp-form" class="wedding-main-text" action="//theknightcouple.us14.list-manage.com/subscribe/post?u=e979f64a411e296b5acec32cc&amp;id=4051286caa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
   <div class="form-group row">
    <div class="col-sm-3">
    
    <label for="mce-FNAME">First Name</label>
    <input type="email" class="form-control" id="mce-FNAME" aria-describedby="" placeholder="Enter Your First Name" name="FNAME">
    </div>    <div class="col-sm-3">
    
    <label for="mce-LNAME">Last Name</label>
    <input type="email" class="form-control" id="mce-LNAME" aria-describedby="" placeholder="Enter Your Last Name" name="LNAME">
    </div>
    <div class="col-sm-3">
    
    <label for="mce-PHONE">Phone #</label>
    <input type="text" class="form-control" id="mce-PHONE" aria-describedby="" placeholder="xxx-xxx-xxxx">
    </div>
  <div class="col-sm-3">
    
    <label for="mce-EMAIL">Email Addr.</label>
    <input type="email" class="form-control" id="mce-EMAIL" aria-describedby="emailHelp" placeholder="Enter email" name="EMAIL">
    <!--<small id="emailHelp" class="form-text text-muted">To send important info to your inbox</small>-->
  </div> 
                        </div> 
 <div class="form-group row">
    <div class="col-sm-6">
    <label for="mce-TRAVDATES">Choose your Travel dates:</label>
    <select class="form-control" id="mce-TRAVDATES" name="TRAVDATES">
      <option>Select Your Dates Here</option>
      <option>3 Nights: Thu. Nov 2nd - Sun. Nov 5th, 2017</option>
      <option>3 Nights: Fri. Nov 3rd - Mon. Nov 6th, 2017</option>
      <option>4 Nights: Thu. Nov 2nd- Mon. Nov 6th, 2017</option>
       <option>Other Dates</option>
    </select>

  </div>
    <div class="col-sm-3">
         <label for="mce-OTHERDATES">Enter Dates</label>
    <input type="text" class="form-control" id="mce-OTHERDATES" aria-describedby="" placeholder="(if necessary)" name="OTHERDATES">
     </div>
    <div class="col-sm-2">
         <label for="mce-NUMGUESTS"># of Guests:</label>
    <select class="form-control" id="mce-NUMGUESTS" name="NUMGUESTS">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
     </div>
     </div>
  
  <div class="form-group">
    <label for="mce-ADDR">Mailing Address</label>
    <input type="text" class="form-control" id="mce-ADDR" aria-describedby="" placeholder="Enter Your Street Address" name="ADDR">
  </div>  
 <div class="form-group">
    <label for="mce-ADDR2">Address 2</label>
    <input type="text" class="form-control" id="mce-ADDR2" aria-describedby="" placeholder="Enter Apt, Suite, etc"  name="ADDR2">
    
  </div>  

   <div class="form-group row">
    <div class="col-sm-4">
     <label for="mce-CITY">City</label>
    <input type="text" class="form-control" id="mce-CITY" aria-describedby="" placeholder="Enter Your City" name="CITY">
    </div>
    <div class="col-sm-4">
     <label for="mce-STATE" >State</label>
    <input type="text" class="form-control" id="mce-STATE" aria-describedby="" placeholder="Enter Your State" name="STATE">
 
       </div>
   
    <div class="col-sm-4">
      <label for="mce-ZIP">Zip Code</label>
    <input type="text" class="form-control" id="mce-ZIP" aria-describedby="" placeholder="Enter Your Zip Code"  name="ZIP">
 
 </div>
    
  </div>  
  <br>
  <p><strong>Please ensure that you have read the important hotel information <a href="#location-main" class="location-info-link">here</a></strong></p>
  <hr>
 
<p class="text-xs-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</p>
</form>
                  </div>
                </div>
                
                </div>
                 
            </div>
        </div>
        
        
    </section>

   <section id="deposit-info" class="page-section">
       
       <div class="container-fluid">
           <div class="row">
               <div  class="col-xs-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 ">
                    <div id="deposit-info-row" class="row">
                       <h2 class="display-4 wedding-main-text text-xs-center">After You R.S.V.P.</h2>
                   <div id="deposit-info-wrapper">
                       
                       
                    <p class="text-xs-center">Fill out the form below for detailed instructions to hotel and airfare reservations
                    <hr>
                   
                   <form id="deposit-info-form" action="">
                       <div class="form-group row">
                          <label for="name" class="col-xs-5 col-form-label">Your Name:</label>
                          <div class="col-xs-7">
                            <input class="form-control" type="text" placehoder="Your Name" id="name" placeholder="First & Last Name">
                          </div>
                        </div>
                           
                       
                       <div class="form-group row">
                           
                           
                            <label for="room-select" class="col-xs-5 col-form-label">Your Suite:</label> 
                               <div class="col-xs-7">
                               <select class="form-control" id="room-select">
                              <option>Luxury Junior Suite</option>
                              <option>Hideaway Luxury Junior Suite (Adults Only)</option>
                              <option>Diamond Club Luxury Junior Suite</option>
                            </select>
                           </div>
                          </div>
                          
                           <div class="form-group row">
                           
                            
                       <fieldset class="form-group">
                             <div class="col-xs-5">Deposit Amount</div>
                             <div class="col-xs-7"><div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="deposit-amount" id="deposit-50" value="50" checked>
                                $50-Room Deposit Only
                              </label>
                            </div>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="deposit-amount" id="deposit-100" value="100">
                                 $100-Room + Airfare Deposit
                              </label>
                            </div>
                           </div>
                           
                          </fieldset>
                       </div>
                      
                   <p class="text-xs-center">
                          <button id="deposit-info-submit" type="button" class="btn btn-primary"><i class="fa fa-chevron-down" aria-hidden="true"></i> Submit <i class="fa fa-chevron-down" aria-hidden="true"></i></button></p>
                     
                      
                <script>
                        $('#deposit-info-submit').click(
                        function(){

               // Get form variables
                    var name = $('#name').val();
                            
                            
                    var depositAmount = $("#deposit-info-form input[type='radio']:checked").val();
                    var room = $('#room-select').val();
                    var room_type = '';
                    
                    if (room == 'Luxury Junior Suite'){
                        room_type = 'Lux Jr'
                    }  else if (room == 'Hideaway Luxury Junior Suite (Adults Only)'    ) {
                        room_type = 'Hdy Lux Jr';
                        
                    }   else if (room == 'Diamond Club Luxury Junior Suite'    ) {
                        room_type = 'Dmd Lux Jr';
                        
                    }     
                    var depositOutput = '';
                // Create output string
                   // alert("Name: " + name + " Deposit Amount: " + depositAmount + " Rm: " + room);
                    depositOutput = "Nm: " + name + " Amt: " + depositAmount + " Rm: " + room_type;
                
                //Set text field value to output string
                    $('#deposit-info-notes').val(depositOutput);
                
                // Expand collapse
                $('#deposit-info-collapse').collapse('show');
                });

                   </script>
                
                                  </form>
                                  <div class="collapse" id="deposit-info-collapse">
                  <div class="card card-block">
                   <p id="deposit-intro-instructions"class="text-xs-center">Follow the directions below to reserve your room and discounted airfare:</p>

                      <p class="deposit-instruction"><span class="deposit-step-num">1. </span> Copy the following notes below</p>
                      <p class="text-xs-center "><input type="text" id="deposit-info-notes" class="deposit-info-display-item" value=""><button id="dep-notes-copy-btn" class="btn btn-primary copy-btn <?php echo($curr_device); ?>" data-toggle="tooltip" data-placement="top" title="Copied!" data-copytarget="#deposit-info-notes">Copy</button></p>
                      
                  
                     
                      <p class="deposit-instruction"><span class="deposit-step-num">2. </span> Go to our  Deposit Page:</p>
                    <p id="wedding-acct-link"  class="text-xs-center" ><a href="https://cash.me/$theknightcouple" target="_blank">Jessica &amp; Richard's Wedding Deposit Link</a>
                      <p  class="text-xs-center">*If you do not have a Square Cash account signup <a href="https://cash.me/app/SLBNDJD">here</a> for $10 account credit</p>

                      <p class="deposit-instruction"><span class="deposit-step-num">3. </span> Paste your notes from the section above into the notes section </p>
                      <p  class="text-xs-center">  <a href="assets/img/screenshot-cash-note.jpg" data-lightbox="deposit-pic"><img src="assets/img/screenshot-cash-note.jpg" alt="Cash Note Screenshot" class="rounded deposit-screenshot deposit-info-display-item " style="max-width: 100%; height:auto;"></a>
                       </p>
                      <div class="click-to-zoom-text text-xs-center"><a href="assets/img/screenshot-cash-note.jpg" data-lightbox="">(Click to Zoom Pic)</a> </div>
    
                      
                      <p class="deposit-instruction"><span class="deposit-step-num">4. </span> Enter your deposit details (Amount and Debit Card Info) </p>
                      <p class="text-xs-center">  <a href="assets/img/screenshot-cash-payment-details.jpg" data-lightbox="roadtrip"><img src="assets/img/screenshot-cash-payment-details.jpg" alt="Cash Payment Details Screenshot" class="rounded deposit-screenshot deposit-info-display-item" style="max-width: 100%; height:auto;"></a></p>
                      <div class="click-to-zoom-text text-xs-center"><a href="assets/img/screenshot-cash-note.jpg" data-lightbox="deposit-pic">(Click to Zoom Pic)</a> </div>
                        <br>
                      <ol>
                          <li>Enter you deposit amount - Ex: $50 or $100</li>
                          <li>Enter your debit card information</li>
                          <li>Submit your deposit</li>
                          <li><strong>**Ensure that your Name and room type are in the notes of the payment.</strong></li>
                      </ol>
                       <p class="deposit-instruction"> Once complete we will send you additional information regarding rooms and discounted airfare rates as our information becomes available</p>
                  </div><!-- END CARD -->
                </div><!-- END COLLAPSE-->


                                   </div>
                       
           </div>
                    
               </div>               
                  
           </div>
           
       </div>
   </section>

   <section id="bridesmaids-main" class="page-section vertical-align-parent">
        <div class="bridal-party-info-row vertical-align-child">
            <div class="container-fluid">
            <div class="bridal-party-row row">
                <div class="col-xs-12 col-md-6 "> 
                     <h2 id="" class="display-4 light-text section-header text-xs-center">Bridesmaids</h2>
               <div class="bg-overlay vertical-align-parent">
                   <h2 class="text-xs-center vertical-align-child annoucement-text">To Be Announced Shortly</h2>
                   
               </div>
                </div>
                    <div class="col-xs-12 col-md-6 "> 
                     <h2 class="display-4 light-text section-header text-xs-center">GroomsMen</h2>
               <div class="bg-overlay vertical-align-parent annoucement-text">
                   <h2 class="text-xs-center vertical-align-child">To Be Announced Shortly</h2>
                   
               </div>
                </div>
               <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                    <div class="bridal-single-content text-xs-center">
                         <img src="/assets/img/bahia1.jpg" alt="" class=" bridal-party-thumbnail rounded-circle">
                    <div class="bridal-party-title">
                        <h3 class=" text-xs-center"><span>Maid Of Honor</span></h3>
                    </div>
                        
                    </div>
                
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="bridal-single-content">
                        <div class="bridal-thumb-content text-xs-center">
                             <img src="/assets/img/bahia1.jpg" alt="" class=" bridal-party-thumbnail rounded-circle">
                            
                        </div>
                                        <div class="bridal-party-title">
                        <h3 class=" text-xs-center"><span>Brides Maid</span></h3>
                    </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="bridal-single-content text-xs-center">
                         <img src="/assets/img/bahia1.jpg" alt="" class=" bridal-party-thumbnail rounded-circle">
                                        <div class="bridal-party-title">
                        <h3 class=" text-xs-center"><span>Brides Maid</span></h3>
                    </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="bridal-single-content text-xs-center">
                         <img src="/assets/img/bahia1.jpg" alt="" class=" bridal-party-thumbnail rounded-circle">
                                        <div class="bridal-party-title">
                        <h3 class=" text-xs-center"><span>Brides Maid</span></h3>
                    </div>
                        
                    </div>
                </div>
               -->
                
            </div>
        </div>
        
        </div>
           
        
    </section>
 <!--<section id="groomsmen-main" class="page-section">
        <div class="container-fluid">
            <div class="row">
                <h2 class="display-4 dark-text section-header text-xs-center">Groomsmen</h2>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                    <div class="bridal-single-content text-xs-center">
                         <img src="/assets/img/bahia1.jpg" alt="" class=" bridal-party-thumbnail rounded-circle">
                    <div class="bridal-party-title">
                        <h3 class=" text-xs-center"><span>Best Man</span></h3>
                    </div>
                        
                    </div>
                
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="bridal-single-content">
                        <div class="bridal-thumb-content text-xs-center">
                             <img src="/assets/img/bahia1.jpg" alt="" class=" bridal-party-thumbnail rounded-circle">
                            
                        </div>
                                        <div class="bridal-party-title">
                        <h3 class=" text-xs-center"><span>Best Man</span></h3>
                    </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="bridal-single-content text-xs-center">
                         <img src="/assets/img/bahia1.jpg" alt="" class=" bridal-party-thumbnail rounded-circle">
                                        <div class="bridal-party-title">
                        <h3 class=" text-xs-center"><span>Groomsmen</span></h3>
                    </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="bridal-single-content text-xs-center">
                         <img src="/assets/img/bahia1.jpg" alt="" class=" bridal-party-thumbnail rounded-circle">
                                        <div class="bridal-party-title">
                        <h3 class=" text-xs-center"><span>Groomsmen</span></h3>
                    </div>
                        
                    </div>
                </div>
               
                
            </div>
        </div>
        
        
    </section>
  -->      
<!--        <section id="blog-main" class="page-section">
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-xs-center">BLOG SECTION</h1>
            </div>
        </div>
        
        
    </section>-->

   
   <!--<section id="registry-main" class="page-section">
        <div class="container-fluid">
            <div class="row">
                 <h1 class="text-xs-center">RSVP SECTION</h1>
            </div>
        </div>
        
        
    </section>-->
<!--<section id="pre-footer-main" class="page-section">
        <div class="container-fluid">
            <div class="row">
                 <h1 class="text-xs-center">SEE YOU THERE THANK YOU SECTION</h1>
            </div>
        </div>
        
        
        </section>-->
    

   
  <!-- <section id="SECTION-NAME" class="page-section">
        <div class="container-fluid">
            <div class="row">
                
            </div>
        </div>
        
        
    </section>-->
   
   <div id="footer-spacer">
       <!-- USED TO MAINTAIN SPACING AT BOTTOM OF PAGE FOR FIXED FOOTER-->
   </div>
   
   <footer id="footer-main" class="footer-timer ">
       <div id="timer-header" class="timer-block"><span id="timer-header-1" class="timer-header-section">Days Til</span>  <span id="timer-header-2" class="timer-header-section">Our Wedding</span><br></div>
           <div id="clock"></div>
   </footer>
   
    </body>

    
    <!-- TETHER JS-->
       <script src="assets/tether/1.2.0/tether.min.js"></script>
       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>-->
    <!-- BOOTSTRAP JS -->
    <script src="assets/bootstrap-v4/js/bootstrap.min.js"></script>
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>-->
      <!-- PARALLAX JS -->
    <script src="assets/js/main.js" ></script>
    <!-- JQUERY VALIDATE -->
    <script src="assets/jquery/jquery-validation-1.15.1/dist/jquery.validate.min.js"></script>
    
    <!-- OWL Carousel js plugin -->
    <script src="assets/owlcarousel-new/owl.carousel.js"></script>
	
    <!-- Parallax JS -->
    <script src="assets/js/main.js" ></script>
    
    <!-- Countdown JS -->
    <script src="assets/countdown/dist/jquery.countdown.min.js" ></script>
    
    <!-- Animated Scroll -->
    <script src="assets/animatescroll/animatescroll.min.js"></script>
    
     <!-- Clipboard JS-->
    <script src="assets/js/clipboard.min.js"></script>
    
     <!-- LIGHT BOX -->
     <script src="assets/lightbox2-master/src/js/lightbox.js"></script>
   
    <!-- RKM JS -->
    <script src="assets/js/jr-scripts.js" ></script>
    
   

        <!--
<script>if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>if(!image_urls){var image_urls=Array()}if(!flash_urls){var flash_urls=Array()}image_urls['rain1']="http://2.bp.blogspot.com/-IQXNv-_CBLE/TpWcK7LL4VI/AAAAAAAAG0I/bcxYcqc_uI0/pinkpetal1.png";image_urls['rain2']="http://4.bp.blogspot.com/-teXCIicWPF4/TpWcLLg0A2I/AAAAAAAAG0U/IPPCr1gponc/pinkpetal2.png";image_urls['rain3']="http://3.bp.blogspot.com/-3JG9HLECCRU/TpWcLZGSYtI/AAAAAAAAG0g/zIJINua93TE/redpetal1.png";image_urls['rain4']="http://2.bp.blogspot.com/-BByhQEK5E24/TpWcLux4xRI/AAAAAAAAG0s/x2hIr1AV_Ac/redpetal2.png";$(document).ready(function(){var c=$(window).width();var d=$(window).height();var e=function(a,b){return Math.round(a+(Math.random()*(b-a)))};var f=function(a){setTimeout(function(){a.css({left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100)}).animate({top:(d-10)+'px'},e(7500,8000),function(){$(this).fadeOut('slow',function(){f(a)})})},e(1,8000))};$('<div></div>').attr('id','rainDiv')
.css({position:'fixed',width:(c-20)+'px',height:'1px',left:'0px',top:'-5px',display:'block'}).appendTo('body');for(var i=1;i<=20;i++){var g=$('<img/>').attr('src',image_urls['rain'+e(1,4)])
.css({position:'absolute',left:e(0,c)+'px',top:'-30px',display:'block',opacity:'0.'+e(10,100),'margin-left':0}).addClass('rainDrop').appendTo('#rainDiv');f(g);g=null};var h=0;var j=0;$(window).resize(function(){c=$(window).width();d=$(window).height()})});</script>
<script>if(typeof jQuery=='undefined'){document.write('<'+'script');document.write(' language="javascript"');document.write(' type="text/javascript"');document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');document.write('</'+'script'+'>')}</script><script>$(document).ready(function(){var a=$('<img>').attr({'src':'http://2.bp.blogspot.com/-IQXNv-_CBLE/TpWcK7LL4VI/AAAAAAAAG0I/bcxYcqc_uI0/pinkpetal1.png','border':0});$('<a></a>').css({position:'absolute',right:'0px',top:'22px','z-index':'90'}).attr({'href':'http://tutorialuntukblog.blogspot.com/2011/10/tutorial-kelopak-bunga-berguguran-di.html'}).append(a).appendTo('body')});</script> -->
    
</html>