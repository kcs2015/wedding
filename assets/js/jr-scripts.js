$(document).ready(function() {
 
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
    stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    transitionStyle:"fade"
  });
    
    $('#clock').countdown('2017/11/04', function(event) {
  var $this = $(this).html(event.strftime(''
    + '<div id="timer-weeks" class="timer-block"> %w <br><span>Weeks</span> </div> '
    + '<div id="timer-days" class="timer-block"> %d <br><span>Days</span> </div> '
    + '<div id="timer-hours" class="timer-block"> %H <br><span>Hours</span> </div> '
    + '<div id="timer-min" class="timer-block"> %M <br><span>Minutes</span> </div> '
    + '<div id="timer-sec" class="timer-block"> %S <br><span>Seconds</span> </div>'));
           
});
 
});