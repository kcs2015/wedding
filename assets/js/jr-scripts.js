$(document).ready(function() {
 
  $('.nav-link').click(function(){
      $('#site-nav-toggler-btn').collapse('toggle');
      
});

    
    
    $("#location-carousel-main").owlCarousel({
      autoPlay : 3000,
    stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    transitionStyle:"fade"
  });

    
 $(".couple-gallery-carousel").owlCarousel({
      autoPlay : 3000,
      items : 9,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
    /*stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    transitionStyle:"fade",
     itemsMobile:[320,1]*/
  });
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
   $('#home-nav-link').click( function(){

       $('#cover-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
   });
       $('#gallery-nav-link').click( function(){

       $('#gallery-main-1').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});});
           
       $('#couple-nav-link').click( function(){

       $('#about-couple-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:50});});
           
    $('.location-info-link').click( function(){

       $('#location-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:50});});
        
        $('#bridal-party-nav-link').click( function(){

       $('#bridesmaids-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:50});
});
            
        $('#rsvp-nav-link').click( function(){

       $('#rsvp-main').animatescroll({scrollSpeed:2000,easing:'easeInOutBack',padding:50});

           
});
    

    
    /* INITIALIZE TOOLTIP FOR COPY BUTTON */
    $('.copy-btn').click(function(event){
            $(this).tooltip('show');
            var targetField = event.target.getAttribute('data-copytarget');
            console.log('tool: ', targetField);
        $(targetField).addClass('success-field');
            
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