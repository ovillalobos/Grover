$(window).load(function(){
	$(".modal1, #closeModal, #closeIndu, #overlay").slideUp(0);		
	$("#techProd, #marksAuth").fadeOut(0);		

	$(".openModal").click( function () { 
		var idModal = $(this).attr("id"); 
		confirmShow(idModal); 
	});
	$(".compProd").click( function () {
		/*
		var aux = $("#aux").val();
		if( aux == "showDesc" ){
			showTechProd();
		} else {
			hideTechProd();
		}
		*/
		$("#descProd, #marksAuth").fadeOut(500);	$("#techProd").delay(1000).fadeIn(1000);
	});
	$(".marksAuth").click( function () { 		
		$("#descProd, #techProd").fadeOut(500);		$("#marksAuth").delay(1000).fadeIn(1000);
	});
	$(".backInfo").click( function () { 		
		$("#marksAuth, #techProd").fadeOut(500);	$("#descProd").delay(1000).fadeIn(1000);
	});
	$("#downPDF").click( function () { 
		var idModal = $("#idProd").val(); 
		confirmShow(idModal); 
	});
	$(".closeModal").click( function () { closeModal(); });
});

/*********************************************************************************************************************
FUNCTION
**********************************************************************************************************************/
function closeModal(){
	$(".closeModal").fadeOut(500);
	$("#modal").delay(500).fadeOut(500);
	$("#overlay").delay(1200).fadeOut(500);
}
function confirmShow(idModal){
	var top, left;
	var urlproddetail = "mod/detailprod/proddetail.php";
	$modal = $("#modal");
	$content = $(".contModal");
	$content.html("");
	
	$.ajax({
		url: 	urlproddetail,
		type: 	"POST",
		data: 	"idModal="+idModal,
		success:function(request) {
			var arrayResp = request.split('|');
			if ( arrayResp[0] == "OK" ){
				$content.html(arrayResp[1]);
				setTimeout( function () {
					$modal.css({ position:'absolute', left: ($(window).width() - $modal.outerWidth())/2, top: ($(window).height() - $modal.outerHeight())/2 }).delay(800).fadeIn(500)
				}, 500);				
			} else {
				$content.html("Error to find product detail.");
				setTimeout( function () {
					$modal.css({ position:'absolute', left: ($(window).width() - $modal.outerWidth())/2, top: ($(window).height() - $modal.outerHeight())/2 }).delay(800).fadeIn(500)
				}, 500);
			}
		},
		error:function() {
			$content.html("Error to load the page.");
			/*
			top = Math.max($(window).height() - $modal.outerHeight(), 0) / 2;
			left = Math.max($(window).width() - $modal.outerWidth(), 0) / 2;	
			$modal.css({ top:top + $(window).scrollTop(), left:left + $(window).scrollLeft() }).delay(800).fadeIn(500);
			*/
			setTimeout( function () {
				$modal.css({ position:'absolute', left: ($(window).width() - $modal.outerWidth())/2, top: ($(window).height() - $modal.outerHeight())/2 }).delay(800).fadeIn(500)
			}, 500);
		}
	});
	
	$(".closeModal").delay(1500).fadeIn(500);
	$("#overlay").fadeIn(500);
}
function showTechProd(){
	$("#aux").val("showProd");
	$("#descProd, #pictProd, #marksAuth").fadeOut(500);	
	$("#techProd").delay(1800).fadeIn(1000);
}
function hideTechProd(){
	$("#aux").val("showDesc");
	$("#techProd").fadeOut(500);	
	$("#descProd, #pictProd").delay(1800).fadeIn(1000);
}
