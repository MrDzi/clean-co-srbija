$(document).ready(function(){

	// Displaying scheduling form
	$(document).on("click", "#cleanco-scheduling-btn", function(e){
		e.preventDefault();

		if ($(".cleanco-cta-form").is(":hidden")) {
			$(".cleanco-cta-form").slideDown();
			$(this).addClass("form-opened");
			$("#cleanco-scheduling-btn i").css({"transform" : "rotate(180deg)", "top" : "22px"});
		}
		else {
			$(".cleanco-cta-form").slideUp();
			$(this).removeClass("form-opened");
			$("#cleanco-scheduling-btn i").css({
				"transform" : "rotate(0deg)",
				"top" : "20px"
			});
		}
		
	});

	// Display fixed header on scroll
	var $window = $(window);

	$window.on("scroll", function(){
		if ($window.scrollTop() > 20) {
			$(".cleanco-header-fixed").fadeIn(400);
		}
		else {
			$(".cleanco-header-fixed").fadeOut(300);
		}
	});

	// Google Maps API
	var map;
	function initialize() {
	  var mapOptions = {
	    zoom: 15,
	    center: new google.maps.LatLng(44.8345862, 20.4148105),
	    scrollwheel: false
	  };
	  map = new google.maps.Map(document.getElementById('cleanco-map'),
	      mapOptions);
	}

	google.maps.event.addDomListener(window, 'load', initialize);

	// Animating services section
	$window.on("scroll", function(){
		if ($window.scrollTop() > 150) {
			$(".cleanco-services-single-inner").css({
				"opacity" : "1",
				"top" : "0"
			});
		}
	});

	// Datepicker
	$('.datepicker').datepicker();
	
});
