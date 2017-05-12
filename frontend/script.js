function getDummyParameter() {
	$.ajax({
	   dataType: 'json',
	   url: '../modules/dummy/assets/getDummyParameter.php',
	   success: function(data) {
		  $('#dummyText').html(data);
		  
	   }
	});
/*
	// alle 5 Sekunden aktualiseren
	window.setTimeout(function() {
		getDummyParameter();
	}, 5000);
*/	
}



$(document).ready(function () {
	getDummyParameter();
});