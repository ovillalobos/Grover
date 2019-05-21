<!DOCTYPE html>
<html lang="en">

<head>
	<title>Grover - Support</title>
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
			switch($_GET["mod"]){
				case "support": 		include( "mod/resorces_support.php" ); 			break;
				case "installation": 	include( "mod/resorces_installation.php" ); 	break;
				case "catalogs": 		include( "mod/resorces_catalog.php" ); 			break;
				case "marks": 			include( "mod/resorces_marks.php" ); 			break;
				case "team": 			include( "mod/resorces_team.php" ); 			break;
				case "assistant": 		include( "mod/resorces_assistant.php" ); 		break;
			}
			?>
		</div>
	</div>

	<?php 
		include( "mod/prod_menu_general.php" );
		//include( "include/menu_footer.php" );
		include( "include/footer.php" );
		include( "include/conf_foot.php" );
	?>
</body>

</html>
