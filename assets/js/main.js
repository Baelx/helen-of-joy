$(function() {
    
    //Cache window object
    var $window = $(window);
    
    //Parallax background effect
    $('section[data-type="background"]').each(function() {
        
        var $bgobj = $(this); // assigning the object
        
        $(window).scroll(function() {
            
            // scroll background at var speed
            // the yPos is a negative value b/c it's scrolling up
            
            var yPos = ($window.scrollTop() / $bgobj.data('speed'));
            
            // Put together final background position
            var coords = '50%' + yPos + 'px';
            
            // Move background
            $bgobj.css({ backgroundPosition: coords});
            
        }); //end window scroll
    });
});

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});