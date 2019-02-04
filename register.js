$(document).ready(function(){
	$('.button'.click(function(){
		var btnValue=$(this)val();
		var ajaxurl= 'processunsecure.php',
		data= {'action': btnValue};
		$.post(ajaxurl,data,function(response){
			alert('action performed successfully');
		    });
		  });
		);