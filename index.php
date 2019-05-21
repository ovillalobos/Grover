<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Grover</title>
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

		<header id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active"><div class="fill slideA">
					<div class="slideDetail" >Experience the <a href="#" class="openModal" id="Stut" >Stuttertone&#174; Emergency</a> Air Horn</div>
				</div></div>
				<div class="item"><div class="fill slideB">
					<div class="slideDetail" >Experience the <a href="#" class="openModal" id="Orga" >Organtone&#174;</a> Air Horn</div><!-- 8482 -->
				</div></div>
				<div class="item"><div class="fill slideC">
					<div class="slideDetail" >Experience the <a href="#" class="openModal" id="Truk" >Truktone&#174;</a> Air Horn</div>
				</div></div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev" ><img class="rowSlide_left" src="img/icon/row_left.png" ></a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next"><img class="rowSlide_right" src="img/icon/row_right.png" ></a>
		</header>
		
		<?php 
			include( "mod/prod_menu_general.php" );
			//include( "include/menu_footer.php" );
			include( "include/footer.php" );
			include( "include/conf_foot.php" );
		?>
	</body>
</html>
