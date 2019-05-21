$(window).load(function(){
	var contador = 1;
	
	$(".boMenuMovil").click(function() {	
		if(contador == 1){
			contador = 0;
			$('#cssmenu').animate({ left: '0' },500);			
		} else {
			contador = 1;
			$('#cssmenu').animate({ left: '-100%' },500);
		}
	});
});