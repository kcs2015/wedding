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
    
    $('#clock').countdown('2017/11/03', function(event) {
  var $this = $(this).html(event.strftime(''
    + '<div id="timer-weeks" class="timer-block"><span class="time-value"> %w</span><span class="time-name">Weeks</span> </div> '
    + '<div id="timer-days" class="timer-block"><span class="time-value"> %d</span><span class="time-name">Days</span> </div> '
    + '<div id="timer-hours" class="timer-block"><span class="time-value"> %H</span><span class="time-name">Hours</span> </div> '
    + '<div id="timer-min" class="timer-block"><span class="time-value"> %M</span><span class="time-name">Min\'s</span> </div> '
    + '<div id="timer-sec" class="timer-block"><span class="time-value"> %S</span><span class="time-name">Sec\'s</span> </div>'));
           
});
 
});