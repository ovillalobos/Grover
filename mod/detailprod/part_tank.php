<?php
$prodNo = $_GET["pn"];
$showPa = "no";

switch($prodNo){
	case "1143":
	case "1176":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){
	$title 		= "Installation Kit";
	$titleNo 	= "Grover Part Number ".$prodNo;
	
	switch($prodNo){
		case "1143":	$title = "Tank"; $titleNo = "Grover Part Number 1143";		break;
		case "1176":	$title = "Tank"; $titleNo = "Grover Part Numbers 1176, 1189";	break;
	}
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12" style="text-align:center; font-size: 40px; margin-bottom: -5px; color: #3F5EAB;" ><?php echo $title;?></div>
<div class="col-sm-12" style="text-align:center; font-size: 25px; margin-bottom: 10px; color: #3F5EAB;" ><?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "parts/tank";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "1143": 	$cantidad = 1;		$inicioEn = 1;		break;
						case "1176": 	$cantidad = 1;		$inicioEn = 10;		break;
					}

					$cantMax  = $cantidad + $inicioEn;
					
					for( $i=$inicioEn ; $i<$cantMax ; $i++ ){
						echo '<img src="images/prod/'.$nomFile.'/sm/'.$i.'.png" data-medium-img="images/prod/'.$nomFile.'/md/'.$i.'.png" data-big-img="images/prod/'.$nomFile.'/bg/'.$i.'.png" alt="">';
					}
				?>
			</div>
		</div>
		<div style="margin-top: 15px; margin-bottom: 15px;" >
			<input type="hidden" value="showDesc" id="aux" />
			<?php
			switch($prodNo){
				case "1143":
				case "1176":
					echo '<img src="images/icon/bo_compare.png" id="compProd" class="boProdDetail compProd" >';
				break;
			}
			/*
			<!--img src="images/icon/bo_pdf.png" id="downPDF" class="boProdDetail"-->
			<!--a href="images/prod/stut/pdf/manual.pdf" target="_blank" ><img src="images/icon/bo_pdf.png" class="boProdDetail"></a-->
			<!--img src="images/icon/bo_marks.png" class="boProdDetail marksAuth" -->
			*/
			?>
		</div>
	</div> 
	<div class="col-sm-7" id="techProd" style="border: 0px solid #000; overflow-x:auto; max-height: 500px;">
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;">
				<td align="center" >GROVER PN</td><td align="left" >SIZE</td><td align="left" >WEIGHT</td><td align="left" >CAPACITY</td>
			</tr>
			<tr align="center" style="font-size: 12px;">
				<td align="center" >1143</td><td align="left" >5"x9 1/2"</td><td align="left" >5.5 LBS</td><td align="left" >300 cu in</td>
			</tr>
			<tr align="center" style="font-size: 12px;">
				<td align="center" >1176</td><td align="left" >6"x12"</td><td align="left" >6 LBS</td><td align="left" >300 cu in</td>
			</tr>
			<tr align="center" style="font-size: 12px;">
				<td align="center" >1189</td><td align="left" >6"x12"</td><td align="left" >5.8 LBS</td><td align="left" >300 cu in</td>
			</tr>
		</table>
		<br/>
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;">
				<td align="center" >GROVER PN</td><td align="left" >DESCRIPTION</td>
			</tr>
			<tr align="center" style="font-size: 12px;">
				<td align="center" >1218</td><td align="left" ><a href="prod_detail.php?mod=part_compre&pn=1167" >1167</a> Compressor with <a href="prod_detail.php?mod=part_tank&pn=1176" >1176</a> tank</td>
			</tr>			
		</table>
		<br/>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 500px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<?php
					switch($prodNo){
						case "1176":
							$str = '<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
										Small and powerful the Grover air compressor provides a constant, economical and reliable source of air pressure for the operation of Grover Air Horns.   Designed for automotive, industrial, emergency and marine use where a small amount of air is required, this ruggedly built compressor is adaptable  for air horn installation.
									</p>
									<table class="tableProd" width="100%" >
										<tr align="center" style="font-size: 12px; color: #3F5EAB;">
											<td align="center" >GROVER PN</td><td align="left" >SIZE</td><td align="left" >WEIGHT</td><td align="left" >CAPACITY</td>
										</tr>
										<tr align="center" style="font-size: 12px;">
											<td align="center" >1176 <span style="color: red;">*</span></td><td align="left" >6"x12"</td><td align="left" >6 LBS</td><td align="left" >300 cu in</td>
										</tr>
										<tr align="center" style="font-size: 12px;">
											<td align="center" >1189</td><td align="left" >6"x12"</td><td align="left" >5.8 LBS</td><td align="left" >300 cu in</td>
										</tr>
									</table><br/>
									<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
									<span style="color: red;">*</span> 1176 comes with brackets to mount compressor.
									</p><br/>
									<a href="prod_detail.php?mod=part_tank&pn=1143" ><div class="bottonSendSin" >1143</div></a>									
									';
							echo $str;
						break;
						case "1143":
							$str = '<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
										Small and powerful the Grover air compressor provides a constant, economical and reliable source of air pressure for the operation of Grover air horns.   Designed for automotive, industrial, emergency and marine use where a small amount of air is required. This ruggedly built compressor is adaptable  for air horn installation.
									</p>
									<table class="tableProd" width="100%" >
										<tr align="center" style="font-size: 12px; color: #3F5EAB;">
											<td align="center" >GROVER PN</td><td align="left" >SIZE</td><td align="left" >WEIGHT</td><td align="left" >CAPACITY</td>
										</tr>
										<tr align="center" style="font-size: 12px;">
											<td align="center" >1143</td><td align="left" >5"x9 1/2"</td><td align="left" >5.5 LBS</td><td align="left" >300 cu in</td>
										</tr>
									</table><br/>
									<a href="prod_detail.php?mod=part_tank&pn=1176" ><div class="bottonSendSin" >1176</div></a>
									';
							echo $str;
						break;
					}
					?>
				</td>
			</tr>			
		</table>
		<?php include("include/slogan.php"); ?>
	</div>
	<div class="col-sm-7" id="marksAuth" style="border: 0px solid #000; overflow-y:auto; max-height: 500px;">
		<table border="0" width="100%" >
			<tr>
				<td align="center" >
					<?php
					switch($prodNo){
						case "dualSep":
							echo '<img src="images/prod/trom/icon/authenticity_1022.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						case "dualCon":
							echo '<img src="images/prod/trom/icon/authenticity.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
					}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<p style="text-align: justify; font-size: 16px; margin-left:10px;">
						<br/>Grover air horns are desired on emergency vehicles, trucks, locomotives, big equipment, RVs, buses and marine craft. 
						<br/><br/>Each Grover air horn and part comes with a promise of quality and performance. Each Grover air horn is marked with the GROVER PRODUCTS COMPANY name, individually hand-crafted, tested and seal certified. 
					</p>
				</td>
			</tr>	
			<tr>
				<td>
					<img src="images/icon/bo_back.png" style="margin-left: 10px; margin-top: 10px;" class="boProdDetail backInfo" >			
				</td>
			</tr>	
		</table>
	</div>
</div>
<?php
}
?>
<br/><br/><br/>