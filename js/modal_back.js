$(window).load(function(){
	$(".modal1, #closeModal, #closeIndu, #overlay").slideUp(0);	
	
	
	$(".openModal").click( function () {  
		var idModal = $(this).attr("id");  
		var modal = "modal"+idModal;  
		var boClo = "close"+idModal;  
		
		confirmShow(modal, boClo); 
	});
	$(".closeModal").click( function () {  
		var idModal = $(this).attr("id");
		idModal = idModal.replace("close", ""); 
		var modal = "modal"+idModal;  
		var boClo = "close"+idModal;  
		
		closeModal(modal, boClo); 
	});
	
	$("#downPDF").click( function () {
		var idModal = $("#idProd").val();
		
		var modal = "modalPDF"+idModal;  
		var boClo = "closePDF"+idModal;  
		
		confirmShow(modal, boClo); 
	});
	
	$(".closeModalProd, .closeModalProd2").click( function () {  
		var idModal = $("#idProd").val();
		idModal = idModal.replace("closePDF", ""); 
		var modal = "modalPDF"+idModal;  
		var boClo = "closePDF"+idModal;  

		closeModal(modal, boClo); 
	});
});

/*********************************************************************************************************************
FUNCTION
**********************************************************************************************************************/
function closeModal(modal, boClo){
	$("#"+boClo).fadeOut(500);
	$("#"+modal).delay(500).fadeOut(500);
	$("#overlay").delay(1200).fadeOut(500);
}
function confirmShow(modal, boClo){
	var top, left;
	$modal = $("#"+modal);
	
	top = Math.max($(window).height() - $modal.outerHeight(), 0) / 2;
	left = Math.max($(window).width() - $modal.outerWidth(), 0) / 2;	
	$modal.css({ top:top + $(window).scrollTop(), left:left + $(window).scrollLeft() }).delay(800).fadeIn(500);		
	
	//$modal.delay(800).fadeIn(500);		
	$("#"+boClo).delay(1500).fadeIn(500);
	$("#overlay").fadeIn(500);
}
function closeModalNew(modal, boClo){
	$("#"+boClo).fadeOut(500);
	$("#"+modal).delay(500).fadeOut(500);
	$("#overlay").delay(1200).fadeOut(500);
}
function confirmShowNew(modal, boClo){
	var top, left;
	$modal = $("#"+modal);
	
	top = Math.max($(window).height() - $modal.outerHeight(), 0) / 2;
	left = Math.max($(window).width() - $modal.outerWidth(), 0) / 2;	
	$modal.css({ top:top + $(window).scrollTop(), left:left + $(window).scrollLeft() }).delay(800).fadeIn(500);		
	
	//$modal.delay(800).fadeIn(500);		
	$("#"+boClo).delay(1500).fadeIn(500);
	$("#overlay").fadeIn(500);
}
