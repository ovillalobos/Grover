$(window).load(function(){
	var contador = 1;

	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		slideshowSpeed: 1000,
		slideshow: false,
		itemWidth: 210,
		itemMargin: 5,
		pausePlay: false,
		controlNav: false,
		start: function(slider){          
		}
	});

	$("#slidePo").animate({opacity: 0,height:"0"},0);
	$(".poShowDo").fadeOut(0);
	
	$(".poShow").click(function() {
		if(contador == 1){
			$(".poShowUp").fadeOut(0);
			$(".poShowDo").fadeIn(0);
			$("#slidePo").animate({opacity: 1,height:"110"},1000);
			contador = 0;
		} else {
			contador = 1;
			$(".poShowUp").fadeIn(0);
			$(".poShowDo").fadeOut(0);
			$("#slidePo").animate({opacity: 0,height:"0"},1000);
		}
	});
	
	$(".iconHome").mouseenter(function() {
		$(this).attr("src", "images/icon/homeb.png")
	}).mouseleave(function() {
		$(this).attr("src", "images/icon/home.png")
	});
	
	/*****************************************************
	menu general function {begin}
	******************************************************/
	$(".divimages img").hide(0);
	$(".grover").show(0);
	
	$(".mainimages").mouseleave( function () {
		$(".divimages img").fadeOut(0);
		$(".grover").show(0);
	});
	
	$(".movimages").mouseover( function (){
		var idItem = $(this).attr("id");
		ocultaImages(idItem);
	});
	
	function ocultaImages(idItem){ $(".divimages img").fadeOut(0); $("."+idItem).fadeIn(0); }
	/*****************************************************
	menu general function {end}
	******************************************************/

	/*****************************************************
	slideAuto images {begin}
	******************************************************/
	$("#picture2, #picture3, #picture4").hide(0);
	
	var contadorImages 	= 2;
	
	setInterval(function(){
		showPicture();
	},4000)
	

	function showPicture(){
		ocultarPicture();
		$("#picture"+contadorImages).delay(1500).fadeIn(1000);
		contadorImages++;
		if( contadorImages > 4 ){ contadorImages = 1; }
	}
	
	function ocultarPicture(){
		$("#picture1, #picture2, #picture3, #picture4").fadeOut(1000);
	}
	/*****************************************************
	slideAuto images {end}
	******************************************************/
	
	/*****************************************************
	send email {begin}
	******************************************************/
	$("#messageinfo").html("").slideUp(0);
	$("#cont_please, #txtPlease").hide(0);
	
	$("#cont_clean").click( function () {
		cleanForm();
	});
	
	$("#cont_send").click( function () {
		var urlphp	= "mod/sendemail.php"
		
		//var con_salu 	= $("#con_salu").val();
		var con_name 	= $("#con_name").val();
		//var con_last 	= $("#con_last").val();
		var con_comp 	= $("#con_comp").val();
		var con_phon 	= $("#con_phon").val();
		//var con_addr 	= $("#con_addr").val();
		var con_emai 	= $("#con_emai").val();
		//var con_city 	= $("#con_city").val();
		//var con_zipc 	= $("#con_zipc").val();
		//var con_subj 	= $("#con_subj").val();
		var con_mess 	= $("#con_mess").val();
		var falta		= "no";
		
		pleaseWait();		
		
		if( $("#policy").is(":checked") ) {		
			//if( con_salu == "" )	{ $("#con_salu").addClass("errorInput"); falta = "si"; }
			if( con_name == "" )	{ $("#con_name").addClass("errorInput"); falta = "si"; }
			//if( con_last == "" )	{ $("#con_last").addClass("errorInput"); falta = "si"; }
			//if( con_comp == "" )	{ $("#con_comp").addClass("errorInput"); falta = "si"; }
			if( con_phon == "" )	{ $("#con_phon").addClass("errorInput"); falta = "si"; }
			//if( con_addr == "" )	{ $("#con_addr").addClass("errorInput"); falta = "si"; }
			if( con_emai == "" )	{ $("#con_emai").addClass("errorInput"); falta = "si"; }
			//if( con_city == "" )	{ $("#con_city").addClass("errorInput"); falta = "si"; }
			//if( con_zipc == "" )	{ $("#con_zipc").addClass("errorInput"); falta = "si"; }
			//if( con_subj == "" )	{ $("#con_subj").addClass("errorInput"); falta = "si"; }
			if( con_mess == "" )	{ $("#con_mess").addClass("errorInput"); falta = "si"; }
			
			if( falta == "si" ){
				$("#messageinfo").html('<div class="errormsg" >Enter the complete information.</div>').slideDown(1000).delay(1500).slideUp(1000);
				ready();
			} else {
				$.ajax({
					url: 	urlphp,
					type: 	"POST",
					data: 	//"con_salu="+con_salu+
							"con_name="+con_name+
							//"&con_last="+con_last+
							"&con_comp="+con_comp+
							"&con_phon="+con_phon+
							//"&con_addr="+con_addr+
							"&con_emai="+con_emai+
							//"&con_city="+con_city+
							//"&con_zipc="+con_zipc+
							//"&con_subj="+con_subj+
							"&con_mess="+con_mess,
					success:function(request) {	
						alert(request);
						if ( request == "OK" )
						{
							$("#messageinfo").html('<div class="okmsg" >Message Sent Correctly.</div>').slideDown(1000).delay(1500).slideUp(1000);
							$("#con_email").val("");
							$("#con_subject").val("");
							$("#con_message").val("");
							cleanForm();
							ready();
						} 
						else 
						{ 
							$("#messageinfo").html('<div class="errormsg" >Error to send E-Mail.</div>').slideDown(1000).delay(1500).slideUp(1000);
							ready();
						}
					},
					error:function() { 
						$("#messageinfo").html('<div class="errormsg" >Error to load PHPMail.</div>').slideDown(1000).delay(1500).slideUp(1000);
						ready();
					}	
				});
			}
		} else {
			$("#messageinfo").html('<div class="errormsg" >To send email it\'s necessary to accept the terms of privacy policy / legal policy for this site</div>').slideDown(1000).delay(1500).slideUp(1000);
			$(".policy").css( "color","red" );
			ready();
		}
	});
	
	function pleaseWait(){
		$("#cont_send").hide(0);
		$("#cont_please").show(0);
		$("#txtSubmit").fadeOut(0);
		$("#txtPlease").fadeIn(500);
		$(".policy").css( "color","#000" );
		$("#con_salu, #con_name, #con_last, #con_comp, #con_phon, #con_addr, #con_emai, #con_city, #con_zipc, #con_subj, #con_mess").removeClass("errorInput");
	}
	function ready(){
		$("#cont_send").show(0);
		$("#cont_please").hide(0);
		$("#txtSubmit").fadeIn(0);
		$("#txtPlease").fadeOut(500);
	}
	function cleanForm(){
		$("#con_salu").val("mr");
		$("#con_salu, #con_name, #con_last, #con_comp, #con_phon, #con_addr, #con_emai, #con_city, #con_zipc, #con_subj, #con_mess").removeClass("errorInput");
		$("#con_name, #con_last, #con_comp, #con_phon, #con_addr, #con_emai, #con_city, #con_zipc, #con_subj, #con_mess").val("");
	}
	/*****************************************************
	send email {end}
	******************************************************/
});