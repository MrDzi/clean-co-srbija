$(document).ready(function(){

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

	// Displaying scheduling form
	$(document).on("click", "#cleanco-scheduling-btn", function(e){
		e.preventDefault();

		if ($(".cleanco-cta-form").is(":hidden")) {
			$(".cleanco-cta-form").slideDown();
			$(this).addClass("form-opened");
			$("#cleanco-scheduling-btn i").css({"transform" : "rotate(180deg)", "top" : "21px"});
		}
		else {
			$(".cleanco-cta-form").slideUp();
			$(this).removeClass("form-opened");
			$("#cleanco-scheduling-btn i").css({
				"transform" : "rotate(0deg)",
				"top" : "18px"
			});
		}
		
	});

	$(".cleanco-scheduling-location").on("change", function(){
		if ($(this).val() === "2") {
			$("#customLocation").removeAttr("disabled").focus().css("opacity", "1");
		}
		else {
			$("#customLocation").css("opacity", "0").attr("disabled", true);
		}
	});

	// jQuery Validate
	$("#cleanco-scheduling-submit").on("click", function(){
		$("#cleanco-scheduling").validate({
			 rules: {

			    name: {
			      minlength: 5,
			      text: true
			    }

			  },

			  messages: {

			  	name: {
			      minlength: "Neophodno je uneti vise od 5 karaktera",
			      text: "Iskljucivo slova"
			    }

			  }
		});
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
		if ($window.scrollTop() > 200) {
			$(".cleanco-services-single-inner").css({
				"opacity" : "1",
				"top" : "0"
			});
		}
	});

	// Datepicker
	$('.datepicker').datepicker();

});
