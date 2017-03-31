// API and functions is at setup.php

(function($) {

$( document ).ajaxStop(function() {

  console.log("me be loaded here");
  $("#acf-field-latitude").prop('disabled', true);
  $("#acf-field-longitude").prop('disabled', true);
  if ( $('.goButton').length == 1 ) { } else {
  var $input = $('<input type="button" value="Enter" class="button button-primary button-large goButton"/>');
 	$input.appendTo($("#acf-address_of_the_location"));
 	};
 	$('.goButton').on('click', function(){ 
		GMaps.geocode({
	  	address: $('#acf-field-address_of_the_location').val(),
	  	callback: function(results, status) {
	    if (status == 'OK') {
	    	// console.log(results[0].geometry.location);
	      var latlng = results[0].geometry.location;
	      var $latitude = latlng.lat();
	      var $longitude = latlng.lng();
	      console.log($latitude); console.log($longitude);
	     
	     	$("#acf-field-latitude").val($latitude);
  			$("#acf-field-longitude").val($longitude);
  			$("#acf-field-latitude").prop('disabled', false);
 			$("#acf-field-longitude").prop('disabled', false);
	    
	    }
	  }
	}) 
}); // ends click button


}); //ends AJAX, this function is running after ajax loaded by ACF plugin


$(document).ready(function(){





$("#acf-field-latitude").prop('disabled', true);
$("#acf-field-longitude").prop('disabled', true);
 var $input = $('<input type="button" value="Enter" class="button button-primary button-large goButton"/>');
 $input.appendTo($("#acf-address_of_the_location"));
 

 

$('.goButton').on('click', function(){ 
	GMaps.geocode({
	  address: $('#acf-field-address_of_the_location').val(),
	  callback: function(results, status) {
	    if (status == 'OK') {
	    	console.log(results[0].geometry.location);
	      var latlng = results[0].geometry.location;
	      var $latitude = latlng.lat();
	      var $longitude = latlng.lng();
	      console.log($latitude); console.log($longitude);
	     
	     	$("#acf-field-latitude").val($latitude);
  			$("#acf-field-longitude").val($longitude);
  			$("#acf-field-latitude").prop('disabled', false);
 			$("#acf-field-longitude").prop('disabled', false);
	    
	    }
	  }
	}) 
}); // ends click button

if ($("#googleMaps").length == 1) {
	var maps = new GMaps({
  div: '#googleMaps',
  lat: venue.Mainlatittude,
  lng: venue.Mainlongitude,
  zoom: parseInt(venue.Mainzoom),
});


for (i=0; i<markersvenue.length; i++) {
	// console.log(markersvenue);
	var latitude = markersvenue[i].markerlatittude;
	var longitude = markersvenue[i].markerlongitude;
	// console.log(latitude);
	maps.addMarker({
  		lat: markersvenue[i].markerlatittude,
		lng: markersvenue[i].markerlongitude,
		title: markersvenue[i].title,
		infoWindow: {
          content: "<h5 class='markerTitle'>"+markersvenue[i].title+"</h5><p>"+markersvenue[i].content+"</p>"+'<a href="https://www.google.com/maps/place/'+markersvenue[i].address+'">Get Directions</a>'
        },
        click: function(e) {
       	// maps.setCenter(latlng.lat(), latlng.lng());
    	maps.setZoom(14);
  		}		
	});
} // for markervalue.length

 function googleMapsSearch() {return false;}

	
	$('#geocoding_form').submit(function(e){
		if ($("#addressInput").val() == '' ) { return  false } else {
		// console.log($("#addressInput").val());
		
        e.preventDefault();
		GMaps.geocode({
	  	address: $('#addressInput').val(),

	  	callback: function(results, status) {
	    if (status == 'OK') {
	      var latlng = results[0].geometry.location;
	      maps.setCenter(latlng.lat(), latlng.lng());
	      maps.setZoom(14);
      		$("#addressInput").val("") ;
      		$("#addressInput").val("") ;
    	}
  		}

	});
		}
  });
 // } //if statement ends


} //googleMaps.length 


$(".accordion-box").click(function() {

 	if ( $(this).find(".down-chevron").hasClass('arrow-clicked') ) {
 		$(this).find(".down-chevron").removeClass('arrow-clicked')
 	}
 	else {
 		$(this).find(".down-chevron").addClass('arrow-clicked');
 		}
});



}); // ends document ready

})(jQuery); // Fully reference jQuery after this point.



(function($){
        $(window).on("load",function(){
        	console.log('i am here');
            $(".customScroll").mCustomScrollbar({
 	axis:"y",
      theme:"dark",
        //   scrollButtons:{ enable: true },
        //   live:"on",
        //   advanced:{ updateOnContentResize: true,      updateOnSelectorChange:true },
        //   documentTouchScroll: false
        });
        });



    })(jQuery);



