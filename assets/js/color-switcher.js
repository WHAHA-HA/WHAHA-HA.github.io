$(document).ready(function($) {

	  $("#kingma-blue" ).click(function(){
		  $("#kingma-colors" ).attr("href", "assets/css/colors/blue.css");
		  return false;
	  });
	  
	  $("#kingma-green" ).click(function(){
		  $("#kingma-colors" ).attr("href", "assets/css/colors/green.css");
		  return false;
	  });
	  
	  $("#kingma-red" ).click(function(){
		  $("#kingma-colors" ).attr("href", "assets/css/colors/red.css");
		  return false;
	  });
	  
	  $("#kingma-yellow" ).click(function(){
		  $("#kingma-colors" ).attr("href", "assets/css/colors/yellow.css");
		  return false;
	  });
	  
	  $("#kingma-brown" ).click(function(){
		  $("#kingma-colors" ).attr("href", "assets/css/colors/brown.css");
		  return false;
	  });
	  
	  $("#kingma-cyan" ).click(function(){
		  $("#kingma-colors" ).attr("href", "assets/css/colors/cyan.css");
		  return false;
	  });
	  
	  $("#kingma-purple" ).click(function(){
		  $("#kingma-colors" ).attr("href", "assets/css/colors/purple.css");
		  return false;
	  });
	  
	  $("#kingma-sky-blue" ).click(function(){
		  $("#kingma-colors" ).attr("href", "assets/css/colors/sky-blue.css");
		  return false;
	  });
	  
	  
	  // picker buttton
	  $("#picker-toggle").click(function(e){

	  	$("#color-switcher").toggleClass("active");
	  	e.preventDefault();

	  });

});