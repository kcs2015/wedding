$(document).ready(function() {
 
    // SET COVER MAIN DIV TO SIZE OF VIEWPORT TO AVOID ADDRESS BAR ISSUE ON IOS
     windowHeight = $(window).innerHeight();
       
         
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
        });

    // END SET COVER MAIN
    
    
    $("#location-carousel-main").owlCarousel({
              items: 1,
        autoplay : true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,   
        nav:true,
        loop:true
    
        
            
  });

     /* OLD $("#location-carousel-main").owlCarousel({
      autoPlay : 3000,
    stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    transitionStyle:"fade"
  });*/

    
 $(".couple-gallery-carousel").owlCarousel({
 
    loop:true,
     nav: true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
     responsiveClass:true,
    responsive : {
    // breakpoint from 0 up
    0 : {
     items:1
    
    },
    // breakpoint from 480 up
    430 : {
        items:1,
        nav:false
    },// breakpoint from 480 up
    480 : {
        items:2,
         nav:false
    },
    // breakpoint from 768 up
    768 : {
        items:2
    },
    // breakpoint from 768 up
    860 : {
        items:3,
         nav:false
    },
    // breakpoint from 768 up
    1160 : {
        items:4,
        nav:true
    },
    // breakpoint from 768 up
    1500 : {
        items:5,
        nav:true
    },
    // breakpoint from 768 up
    1900 : {
        items:6,
        nav:true
    }
}
    /*stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    transitionStyle:"fade",
     itemsMobile:[320,1]*/
  }); 
    
    /*OLD $(".couple-gallery-carousel").owlCarousel({
      autoPlay : 3000,
      items : 4,
    stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    transitionStyle:"fade",
     itemsMobile:[320,1]
  });*/
    /* OWL CAROUSEL WITH PROGRESS BAR */
  var time = 7; // time in seconds
 
  var $progressBar,
      $bar, 
      $elem, 
      isPause, 
      tick,
      percentTime;
 
    //Init the carousel
    $("#location-carousel").owlCarousel({
      slideSpeed : 500,
      paginationSpeed : 500,
      singleItem : true,
      afterInit : progressBar,
      afterMove : moved,
      startDragging : pauseOnDragging
    });
 
    //Init progressBar where elem is $("#owl-demo")
    function progressBar(elem){
      $elem = elem;
      //build progress bar elements
      buildProgressBar();
      //start counting
      start();
    }
 
    //create div#progressBar and div#bar then prepend to $("#owl-demo")
    function buildProgressBar(){
      $progressBar = $("<div>",{
        id:"progressBar"
      });
      $bar = $("<div>",{
        id:"bar"
      });
      $progressBar.append($bar).prependTo($elem);
    }
 
    function start() {
      //reset timer
      percentTime = 0;
      isPause = false;
      //run interval every 0.01 second
      tick = setInterval(interval, 10);
    };
 
    function interval() {
      if(isPause === false){
        percentTime += 1 / time;
        $bar.css({
           width: percentTime+"%"
         });
        //if percentTime is equal or greater than 100
        if(percentTime >= 100){
          //slide to next item 
          $elem.trigger('owl.next')
        }
      }
    }
 
    //pause while dragging 
    function pauseOnDragging(){
      isPause = true;
    }
 
    //moved callback
    function moved(){
      //clear interval
      clearTimeout(tick);
      //start again
      start();
    }
 
    //uncomment this to make pause on mouseover 
    // $elem.on('mouseover',function(){
    //   isPause = true;
    // })
    // $elem.on('mouseout',function(){
    //   isPause = false;
    // })
 
    /* OWL CAROUSEL WITH PROGRESS BAR */
    

    $('#clock').countdown('2017/11/03', function(event) {
  var $this = $(this).html(event.strftime(''
    + '<div id="timer-weeks" class="timer-block"><span class="time-value"> %w</span><span class="time-name">Weeks</span> </div> '
    + '<div id="timer-days" class="timer-block"><span class="time-value"> %d</span><span class="time-name">Days</span> </div> '
    + '<div id="timer-hours" class="timer-block"><span class="time-value"> %H</span><span class="time-name">Hours</span> </div> '
    + '<div id="timer-min" class="timer-block"><span class="time-value"> %M</span><span class="time-name">Min\'s</span> </div> '
    + '<span id="timer-sec" class="timer-block"><span class="time-value"> %S</span><span class="time-name">Sec\'s</span> </div>'));
           
});
    
    $('body').animatescroll();
    
    // BOOTSTRAP MODIFICATION - Close Nav menu once mobile nav link is clicked
      $('.nav-link').click(function(){
          var isTogglerExpanded = $('#site-nav-toggler-btn').attr('aria-expanded');
          //console.log('toggle',isTogglerExpanded);
          
          
          if (isTogglerExpanded == 'true'){
          // if Toggler button is expanded
              $('#nav-header').collapse('toggle');
             
              
          }
      
});
    
   $('#home-nav-link').click( function(){

       $('#cover-main').animatescroll({scrollSpeed:2000,easing:'easeOutSine'});
       
             // Collapse navbar once nav-link is clicked   
        //   $('#nav-header').collapse('hide');  
   });
       $('#gallery-nav-link').click( function(){

       $('#gallery-main-1').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
       
             // Collapse navbar once nav-link is clicked   
        //   $('#nav-header').collapse('hide'); 
       });
          
       $('#couple-nav-link').click( function(){

       $('#about-couple-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:50});
       
             // Collapse navbar once nav-link is clicked   
          // $('#nav-header').collapse('hide'); 
       });
           
    $('.location-info-link').click( function(){

       $('#location-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:50});
             // Collapse navbar once nav-link is clicked   
         //  $('#nav-header').collapse('hide'); 
    });
        
        $('#bridal-party-nav-link').click( function(){

       $('#bridesmaids-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:50});
            
             // Collapse navbar once nav-link is clicked   
         //  $('#nav-header').collapse('hide'); 
});
            
        //$('.rsvp-nav-link').click( function(){
       
       $('.rsvp-animate-nav-link').click( function(){

       $('#rsvp-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:50});
             // Collapse navbar once nav-link is clicked   
         //  $('#nav-header').collapse('hide'); 
  
                   
});
    
    /* ON CHANGE OF "SELECT TRAVEL DATES FIELD -> SWITCH FOCUS TO ENTER DATES TEXT FIELD */
   $( "#mce-TRAVDATES" ).change(function() {
        var selectionOption = $( "#mce-TRAVDATES option:selected" ).text();
      // console.log("OPTION", selectionOption);
       
          if ( selectionOption == 'Other Dates'){
              $("#mce-OTHERDATES").focus();
          } 
        
    });


    
    /* INITIALIZE TOOLTIP FOR COPY BUTTON */
    $('.copy-btn').click(function(event){
            $(this).tooltip('show');
            var targetField = event.target.getAttribute('data-copytarget');
            //console.log('tool: ', targetField);
        $(targetField).addClass('success-field');
        $(targetField).css('box-shadow','10px 10px 5px green');
            
    });
    
    /* CODE FOR COPY BUTTON*/
    
(function() {

  'use strict';

  // click events
  document.body.addEventListener('click', copy, true);

  // event handler
  function copy(e) {

    // find target element
    var
      t = e.target,
      c = t.dataset.copytarget,
      inp = (c ? document.querySelector(c) : null);

    // is element selectable?
    if (inp && inp.select) {

      // select text
      inp.select();

      try {
        // copy text
        document.execCommand('copy');
        inp.blur();
      }
      catch (err) {
        alert('please press Ctrl/Cmd+C to copy');
      }

    }

  }
    
    

})();
                    
                     
 
});