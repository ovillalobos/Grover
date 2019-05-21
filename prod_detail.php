<!DOCTYPE html>
<html lang="en">

<head>
	<title>Grover - Detail</title>
    <?php include( "include/conf_head.php" );?>
	<?php 
		if( !isset($_GET["mod"]) ){
			header("Location: index.php");
			exit();
		} 
	?>
	<script language="javascript">
    document.onmousedown=disableclick;
    function disableclick(event) { if(event.button==2) { return false; } }
    </script>
</head>

<body oncontextmenu="return false" >
	<div id="overlay"></div>
	
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-top: 10px solid #1E5799;" >
		<div class="logo" >
			<?php include( "include/menu_general_logo.php" ); ?>
		</div>
		<div class="container">			
			<?php include( "include/menu_general.php" ); ?>
		</div>
	</nav>

   <div class="bodyProduct" >
		<div class="container">
			<?php
			@include( "mod/detailprod/".$_GET["mod"].".php" ); 	
			/*
			switch($_GET["mod"]){
				case "indu_7000a": case "indu_7000b":
				case "stut_recta": case "stut_round":
				case "train_horn": 
				case "truk_dua": case "truk_sin":
				case "part_pedestal": case "part_repakit": 
				case "part_elec_valves": case "part_man_brass": case "part_man_nylon":
					include( "mod/detailprod/".$_GET["mod"].".php" ); 	
					
				break;
			}
			*/
			?>
		</div>
   </div>

	<?php 
		include( "mod/prod_menu_general.php" );
		//include( "include/menu_footer.php" );
		include( "include/footer.php" );
		include( "include/conf_foot.php" );				
		//include( "mod/catalogo_pdf.php" );
	?>
</body>

</html>
