$(document).ready(function(){

	// Display fixed header on scroll
	var $window = $(window);

	$window.on("scroll", function(){
		if ($window.scrollTop() > 50) {
			$(".cleanco-header-fixed").css("top", "0");
		}
		else {
			$(".cleanco-header-fixed").css("top", "-80px");
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
			      required: true,
			      minlength: 5,
			      text: true
			    }

			  },

			  messages: {

			  	name: {
			  	  required: "Ovo polje je obavezno",
			      minlength: "Neophodno je uneti vise od 5 karaktera",
			      text: "Iskljucivo slova"
			    }

			  }
		});
	});

	// Google Maps API
	var map;
	var marker;
	function initialize() {
	  var cleanco = new google.maps.LatLng(44.8345862, 20.4148105);
	  var windowWidth = $(window).width();
	  var isDraggable = windowWidth > 732 ? true : false;
	  var mapOptions = {
	    zoom: 15,
	    center: cleanco,
	    scrollwheel: false,
	    draggable: isDraggable
	  };

	  map = new google.maps.Map(document.getElementById('cleanco-map'),
	      mapOptions);

	  var contentString = '<div id="cleanco-map-info-content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">CleanCo</h3>'+
      '<div id="bodyContent">'+
      '<p>Klare Cetkin 1e/12</p>' +
      '<p>+381 11 64 93 31</p>' +
      '</div>'+
      '</div>';

	  var infowindow = new google.maps.InfoWindow({
	      content: contentString
	  });

	  marker = new google.maps.Marker({
	    map:map,
	    position: cleanco,
	    animation: google.maps.Animation.DROP,
	    title: 'Cleanco'
	  });
	  google.maps.event.addListener(marker, 'click', toggleBounce);

	  google.maps.event.addListener(marker, 'click', function() {
	    infowindow.open(map,marker);
	  });

	};

	function toggleBounce() {

	if (marker.getAnimation() != null) {
	    marker.setAnimation(null);
	  } else {
	    marker.setAnimation(google.maps.Animation.BOUNCE);
	  }
	}

	google.maps.event.addDomListener(window, 'load', initialize);

	// Animating services section
	if ($window.width() > 974) {
		$window.on("scroll", function(){
			if ($window.scrollTop() > 200) {
				$(".cleanco-services-single-inner-left").addClass("cleanco-services-single-inner-after");
				setTimeout(function(){
					$(".cleanco-services-single-inner-middle").addClass("cleanco-services-single-inner-after");
				}, 200);
				setTimeout(function(){
					$(".cleanco-services-single-inner-right").addClass("cleanco-services-single-inner-after");
				}, 400);
			}
		});
	}
	
	// Services view more dor mobile
	$(".cleanco-services-btn").on("click", function(e){
		e.preventDefault();
		$(this).parent().css("height", "auto");
		$(this).css("display", "none");
	});

	// Datepicker
	$('.datepicker').datepicker()
		.on("changeDate", function(){
			$(this).datepicker("hide");
		});

	// Enabling carousel swipe for mobile 
	$("#cleanco-testimonials-carousel").swiperight(function() {  
		$(this).carousel('prev');  
    		});  
	$("#cleanco-testimonials-carousel").swipeleft(function() {  
	    $(this).carousel('next');  
    });

});