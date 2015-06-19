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
			$("#customLocation").siblings(".error").remove();
		}
	});

	// jQuery Validate
	$("#cleanco-scheduling-submit").on("click", function(){
		$("#date").attr("readonly", false);
		$("#cleanco-scheduling").validate({
			 rules: {

			    name: {
			        required: true,
			        minlength: 5
			    },

			    email: {
			    	required: true,
			    	email: true
			    },

			    phoneNumber: {
			    	required: true,
			    	number: true
			    },

			    location: {
			    	required: true
			    },

			    date: {
			    	required: true
			    },

			    time: {
			    	required: true
			    },

			    customLocation: {
			    	required: true
			    }


			  },

			  messages: {

			  	name: {
			  	  	required: "Ovo polje je obavezno",
			      	minlength: "Neophodno je uneti vise od 5 karaktera",
			      	text: "Koristite skljucivo slova"
			    },

			    email: {
			    	required: "Ovo polje je obavezno",
			    	email: "Unesite validnu e-mail adresu"
			    },

			    phoneNumber: {
			    	required: "Ovo polje je obavezno",
			    	number: "Unesite broj telefona"
			    },

			    location: {
			    	required: "Ovo polje je obavezno"
			    },

			    date: {
			    	required: "Ovo polje je obavezno"
			    },

			    time: {
			    	required: "Ovo polje je obavezno"
			    },

			    customLocation: {
			    	required: "Ovo polje je obavezno"
			    }

			  }
		});
	});

	// Google Maps API
	var map;
	var marker;
	var secondMarker;
	var thirdMarker;

	function initialize() {
	  var cleanco = new google.maps.LatLng(44.8095765, 20.4298791);
	  var windowWidth = $(window).width();
	  var isDraggable = windowWidth > 732 ? true : false;
	  var mapOptions = {
	    zoom: 14,
	    center: new google.maps.LatLng(44.8129141,20.4246971),
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
      '<p>Milentija Popovića 5a</p>' +
      '<p>+381 69 55 44 33 2</p>' +
      '</div>'+
      '</div>';

      var secondContentString = '<div id="cleanco-map-info-content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">CleanCo</h3>'+
      '<div id="bodyContent">'+
      '<p>Đorđa Stanojevića 12-14</p>' +
      '<p>+381 69 55 44 33 2</p>' +
      '</div>'+
      '</div>';

	  var infowindow = new google.maps.InfoWindow({
	      content: contentString
	  });

	  var secondInfowindow = new google.maps.InfoWindow({
	      content: secondContentString
	  });

	  marker = new google.maps.Marker({
	    map:map,
	    position: cleanco,
	    animation: google.maps.Animation.DROP,
	    title: 'Cleanco'
	  });

	  secondMarker = new google.maps.Marker({
        position: new google.maps.LatLng(44.8152453,20.4203223),
        map: map
      });

	  google.maps.event.addListener(marker, 'click', toggleBounce);

	  google.maps.event.addListener(secondMarker, 'click', secondToggleBounce);

	  google.maps.event.addListener(marker, 'click', function() {
	    infowindow.open(map,marker);
	  });

	  google.maps.event.addListener(secondMarker, 'click', function() {
	    secondInfowindow.open(map,secondMarker);
	  });

	};

	function toggleBounce() {

	if (marker.getAnimation() != null) {
	    marker.setAnimation(null);
	  } else {
	    marker.setAnimation(google.maps.Animation.BOUNCE);
	  }
	}

	function secondToggleBounce() {

	if (secondMarker.getAnimation() != null) {
	    secondMarker.setAnimation(null);
	  } else {
	    secondMarker.setAnimation(google.maps.Animation.BOUNCE);
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
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy'
	})
		.on("changeDate", function(){
			$(this).datepicker("hide");
	});

	// Carousel
	$('.carousel').carousel({
        interval: 5000
    }).on('slide.bs.carousel', function (e)
    {
        var nextH = $(e.relatedTarget).height();
        $(this).find('.active.item').parent().animate({ height: nextH }, 500);
    });

	// Enabling carousel swipe for mobile 
	$("#cleanco-testimonials-carousel").swiperight(function() {  
		$(this).carousel('prev');  
    		});  
	$("#cleanco-testimonials-carousel").swipeleft(function() {  
	    $(this).carousel('next');  
    });

});