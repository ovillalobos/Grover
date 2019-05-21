<!DOCTYPE html>
<html lang="en">

<head>
	<title>Grover - Company</title>
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
				case "aboutus": 		include( "mod/company_aboutus.php" ); 		break;
				case "employment": 		include( "mod/company_employment.php" ); 	break;
				case "certified": 		include( "mod/company_certified.php" ); 	break;
				case "video": 			include( "mod/company_video.php" ); 		break;
				case "history": 		include( "mod/company_history.php" ); 		break;
				case "brand": 			include( "mod/company_brand.php" ); 		break;
				case "team": 			include( "mod/company_team.php" ); 			break;
				case "world": 			include( "mod/company_worldwide.php" ); 		break;
				case "brand": 			include( "mod/company_brand.php" ); 		break;
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
