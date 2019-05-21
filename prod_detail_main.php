<!DOCTYPE html>
<html lang="en">

<head>
	<title>Grover - Detail</title>
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
			<input id="idProd" value="Indu" type="hidden" >
			<div class="col-sm-12" style="text-align:center; font-size: 40px; margin-bottom: 10px;" >
				<img src="images/banner/prod_marine.png" width="100%" >
				<img src="images/banner/prod_marineMov.png" width="100%" >
			</div>
			<div class="col-sm-12" style="border: 0px solid #000; overflow-y:scroll; height: 100%; max-height: 500px;" >
				<div class="col-sm-12" style="margin-bottom: 20px;" >
					<div class="col-sm-3"><a href="prod_detail.php" ><img src="images/prod/marine/main_1.png" width="100%" ></a></div>
					<div class="col-sm-3"><a href="prod_detail.php" ><img src="images/prod/marine/main_2.png" width="100%" ></a></div>
					<div class="col-sm-3"><a href="prod_detail.php" ><img src="images/prod/marine/main_1.png" width="100%" ></a></div>
					<div class="col-sm-3"><a href="prod_detail.php" ><img src="images/prod/marine/main_2.png" width="100%" ></a></div>
				</div>
				<div class="col-sm-12" style="margin-bottom: 20px;" >
					<div class="col-sm-3"><a href="prod_detail.php" ><img src="images/prod/marine/main_1.png" width="100%" ></a></div>
					<div class="col-sm-3"><a href="prod_detail.php" ><img src="images/prod/marine/main_2.png" width="100%" ></a></div>
					<div class="col-sm-3"><a href="prod_detail.php" ><img src="images/prod/marine/main_1.png" width="100%" ></a></div>
					<div class="col-sm-3"><a href="prod_detail.php" ><img src="images/prod/marine/main_2.png" width="100%" ></a></div>
				</div>
			</div>
		</div>
   </div>

	<?php 
		include( "mod/prod_menu_general.php" );
		//include( "include/menu_footer.php" );
		include( "include/footer.php" );
		include( "include/conf_foot.php" );		
		
		include( "mod/catalogo_pdf.php" );
	?>
</body>

</html>
