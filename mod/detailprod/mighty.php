<?php
$prodNo = $_GET["pn"];
switch($prodNo){
	case "1325":
	case "1330":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){	
	$titleNo = $prodNo;
	if( $prodNo == "1325" ){
		$titleNo = "Grover Part Numbers 1325, 1346";
	}
	if( $prodNo == "1330" ){
		$titleNo = "Grover Part Number 1330 With Kit";
	}
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12 titleProdDetail" >Mighty Midget</div>
<div class="col-sm-12 subTitleProdDetail" ><?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "migh";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "1325": 	$cantidad = 1;		$inicioEn = 1;		break;
						case "1330": 	$cantidad = 3;		$inicioEn = 10; 	break;
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
			<!--img src="images/icon/bo_pdf.png" id="downPDF" class="boProdDetail"-->
			<!--a href="images/prod/stut/pdf/manual.pdf" target="_blank" ><img src="images/icon/bo_pdf.png" class="boProdDetail"></a-->
			<img src="images/icon/bo_compare.png" id="compProd" class="boProdDetail compProd" >
			<!--img src="images/icon/bo_marks.png" class="boProdDetail marksAuth" -->
		</div>
	</div> 
	<div class="col-sm-7" id="techProd" style="border: 0px solid #000; overflow-x:auto; max-height: 550px;">
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>LENGTH<br/>END TO END</td><td>	FLARE SIZE	</td>   <td>FINISH</td></tr>
			<tr align="center" style="font-size: 12px;"><td>	1325 (w/valve)	</td>   <td>	4 1/2"	</td>   <td>	1 7/8"	</td>   <td>	CHROME	</td></tr>			
			<tr align="center" style="font-size: 12px;"><td>	1346 (without valve)	</td>   <td>	4 1/2"	</td>   <td>	1 7/8"	</td>   <td>	CHROME	</td></tr>						
		</table>
		<br/>
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>DESCRIPTION</td></tr>
			<tr align="center" style="font-size: 12px;"><td>	1330	</td>   <td>	(1) 1325 HORN & (1) 1311 POWER CARTRIDGE	</td></tr>
		</table>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 550px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<div class="col-sm-12">
						
						<?php
						switch($prodNo){
							case "1325":
								echo '
									<p style="text-align: justify; font-size: 16px; margin-left:10px;">						
										<br/>GIANT VOLUME  IN A SMALL PACKAGE
										<br/>You will find unexpected power in this tiny horn.
										<br/><br/>Sleek chrome finish brightens the graceful contour of these attractive horns.  A device simply and easily manipulated for maximum volume and tone. Use as a stationary or portable air horn.
									</p>
									<p style="text-align: justify; font-size: 16px; margin-left:10px;">
										<br/>Astounding volume coming from such a tiny, lightweight, self-contained package.  
									</p>
									<table class="tableProd" width="100%" >
										<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>LENGTH END TO END</td><td>	FLARE SIZE	</td>   <td>FINISH</td></tr>
										<tr align="center" style="font-size: 12px;"><td>	1325 (w/valve)	</td>   <td>	4 1/2"	</td>   <td>	1 7/8"	</td>   <td>	CHROME	</td></tr>			
										<tr align="center" style="font-size: 12px;"><td>	1346 (without valve)	</td>   <td>	4 1/2"	</td>   <td>	1 7/8"	</td>   <td>	CHROME	</td></tr>						
									</table>
									
									<a href="prod_detail.php?mod=mighty&pn=1330" ><div class="bottonSendSin" >1330</div></a>';
							break;
							case "1330":
								echo'
									<p style="text-align: justify; font-size: 15px; margin-left:10px;">						
										<br/>GIANT VOLUME  IN A SMALL PACKAGE
										<br/>You will find unexpected power in this tiny horn.
										<br/><br/>Sleek chrome finish brightens the graceful contour of these attractive horns.  A device simply and easily manipulated for maximum volume of tone.  Easy to operate.  Use as a stationary or portable air horn, this completely self-contained unit gives a dependable and powerful performance. Ideal for:
									</p>
									<ul style="text-align: justify; font-size: 15px; margin-left:10px;" >
										<li>• Small boat or car owners</li>
										<li>• Cyclists</li>
										<li>• Hikers</li>
										<li>• Signaling of all kinds (alarm)</li>
										<li>• Many more uses</li>
									</ul>
									<p style="text-align: justify; font-size: 15px; margin-left:10px;">
										The Mighty Midget is just one of many of the fine air horns in the Grover line.   Astounding volume coming from such a tiny, lightweight, self-contained package.  
									</p>
									<table class="tableProd" width="100%" >
										<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>DESCRIPTION</td></tr>
										<tr align="center" style="font-size: 12px;"><td>	1330</td>   <td>	(1) 1324 HORN & (1) 1311 POWER CARTRIDGE	</td></tr>
									</table>
									
									<a href="prod_detail.php?mod=mighty&pn=1325" ><div class="bottonSendSin" >1325, 1346</div></a>';
							break;	
						}
						?>
					</div>
				</td>
			</tr>			
		</table>
		<?php include("include/slogan.php"); ?>
	</div>	
</div>
<?php
}
?>
<br/><br/><br/>