<!DOCTYPE html>
<html lang="en">

<head>
	<title>Grover - Company</title>
    <?php include( "include/conf_head.php" );?>
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
			<div class="col-sm-12" style="border: 0px solid #000; " >
				<iframe src='//cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1Ml1A0yQljX68vyZKZ_TE4XysBvtUWz0ViOo9bX3kBQc&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' frameborder='0'></iframe>
				<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=14GLL-pcbfuHn0_YisPZ0AtS0TXBvxlZXk-00qQ3Gb9Q&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' frameborder='0'></iframe>
			</div>
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
