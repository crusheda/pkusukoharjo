//Hook up the tweet display

$(document).ready(function() {
						   
	$(".countdown").countdown({
				date: "31 jul 2022 23:59:00",
				format: "on"
			},
			
			function() {
				// callback function
			});

});	