$(document).ready(function(){

	// Display fixed header on scroll
	var $window = $(window);

	$window.on("scroll", function(){
		if ($window.scrollTop() > 600) {
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
	var marker;
	function initialize() {
	  var cleanco = new google.maps.LatLng(44.8345862, 20.4148105);
	  var windowWidth = $(window).width();
	  console.log(windowWidth);
	  var isDraggable = windowWidth > 732 ? true : false;
	  console.log(isDraggable);
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

	google.maps.event.addDomListener(window, 'load', initialize);

	// Animating services section
	if ($window.width() > 974) {
		$window.on("scroll", function(){
			if ($window.scrollTop() > 200) {
				$(".cleanco-services-single-inner-left").css({
					"opacity" : "1",
					"top" : "0"
				});
				setTimeout(function(){
					$(".cleanco-services-single-inner-middle").css({
					"opacity" : "1",
					"top" : "0"
				});
				}, 200);
				setTimeout(function(){
					$(".cleanco-services-single-inner-right").css({
					"opacity" : "1",
					"top" : "0"
				});
				}, 400);
			}
		});
	}

	// Datepicker
	$('.datepicker').datepicker();

	$("#cleanco-testimonials-carousel").swiperight(function() {  
    		  $(this).carousel('prev');  
	    		});  
		   $("#cleanco-testimonials-carousel").swipeleft(function() {  
		      $(this).carousel('next');  
	   });  

});
