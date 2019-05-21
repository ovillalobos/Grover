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
				case "info": 		include( "mod/contact_info.php" ); 		break;
				case "email": 		include( "mod/contact_email.php" ); 	break;
			}
			?>
		</div>
		<br/><br/><br/>
	</div>

	<?php 
		include( "mod/prod_menu_general.php" );
		//include( "include/menu_footer.php" );
		include( "include/footer.php" );
		include( "include/conf_foot.php" );
	?>
</body>

</html>
