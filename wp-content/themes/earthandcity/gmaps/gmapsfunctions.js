






(function($) {
$("#acf-field-latitude").prop('disabled', true);
 $("#acf-field-longitude").prop('disabled', true);
 

$(document).ready(function(){
var $input = $('<input type="button" value="Enter" class="button button-primary button-large goButton"/>');
 $input.appendTo($("#acf-address_of_the_location"));
 



// new GMaps({
//   div: '#map',
//   lat: -12.043333,
//   lng: -77.028333
// });

 

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




}); // ends document ready
})(jQuery); // Fully reference jQuery after this point.