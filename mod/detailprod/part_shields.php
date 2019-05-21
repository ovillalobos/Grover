<?php
$prodNo = $_GET["pn"];
switch($prodNo){
	case "1652":
	case "1654":
	case "2010":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){	
	$titleNo = $prodNo;
	if( $prodNo == "2010" ){
		$titleNo = "Rectangular 2010";
	}
	if( $prodNo == "1652" ){
		$titleNo = "Round 1652";
	}
	if( $prodNo == "1654" ){
		$titleNo = "Round 1654, 1656, 1697";
	}
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12 titleProdDetail" >Shields</div>
<div class="col-sm-12 subTitleProdDetail" ><?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "parts/shields";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "1652": 	$cantidad = 1;		$inicioEn = 20;		break;
						case "1654": 	$cantidad = 1;		$inicioEn = 10; 	break;
						case "2010": 	$cantidad = 4;		$inicioEn = 1; 	break;
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
			<img src="images/icon/bo_compare.png" id="compProd" class="boProdDetail compProd">
			<!--img src="images/icon/bo_marks.png" class="boProdDetail marksAuth" -->
		</div>
	</div> 
	<div class="col-sm-7" id="techProd" style="border: 0px solid #000; overflow-x:auto; max-height: 550px;">
		<table class="tableProd" width="100%" >			
			<tr align="CENTER" style="font-size: 12px; color: #3F5EAB;"><td colspan="3" >ROUND SHIELDS</td></tr>
			<tr align="LEFT" style="font-size: 12px; color: #3F5EAB;"><td width="90px" >GROVER PN</td><td width="90px" >SIZE</td><td>AIR HORNS SHIELD IS FOR</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>1652</td><td>4" (PAIR)</td><td>DUAL CONNECTED TRUKTONE® 1600, 1601</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>1652B</td><td>4" (PAIR) BLACK</td><td>DUAL CONNECTED TRUKTONE® 1609</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>1654</td><td>6"</td><td>SINGLE ORGANTONE® 1024, 1027<br/>DUAL CONNECTED ORGANTONE® (2 NEEDED) 1030<br/>STUTTERTONE®  1506, 1510, 1512, 1519, 1528<br/>TROMBONE: 1700, 1701, 1748</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>1654B</td><td>6" BLACK</td><td>TROMBONE: 1702</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>1656</td><td>7 1/4"</td><td>SINGLE ORGANTONE®  1042, 1045, 1054, 1055<br/>DUAL CONNECTED ORGANTONE®  (2 REQUIRED)  1048, 1056</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>1697</td><td>4"</td><td>SINGLE TRUKTONE® 1675, 1676,  1678, 1679</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>1697B</td><td>4" BLACK</td><td>SINGLE TRUKTONE® 1677, 1680</td></tr>			
		</table>		
		<table class="tableProd" width="100%" >			
			<tr align="CENTER" style="font-size: 12px; color: #3F5EAB;"><td colspan="3" >RECTANGULAR SHIELDS</td></tr>
			<tr align="LEFT" style="font-size: 12px; color: #3F5EAB;"><td width="90px" >GROVER PN</td><td width="90px" >SIZE</td><td>AIR HORNS SHIELD IS FOR</td></tr>			
			<tr align="LEFT" style="font-size: 12px;"><td>2010</td><td>4 1/4" x 6 3/4"</td><td>RECTANGULAR AIR HORNS 2000, 2001<br/>RECTANGULAR STUTTERTONE® AIR HORNS: 2040, 2043, 2075</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>2010K</td><td>4 1/4" x 6 3/4"</td><td>2010 SHIELD WITH K</td></tr>
			<tr align="LEFT" style="font-size: 12px;"><td>2010W</td><td>4 1/4" x 6 3/4"</td><td>2010 SHIELD WITH W</td></tr>
		</table>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 550px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<div class="col-sm-12">
						<?php
						$str = '<p style="text-align: justify; font-size: 16px; margin-left:10px;">																				
									<br/>Grover weather shields are designed to accompany air horns  reducing incoming sand, water, foliage, insects and other items.    Each weather shield is built specifically for the accompanying air horn.
									<br/><br/>Stainless steel construction 
								</p>';
						
						switch($prodNo){
							case "1652":
								$str .= '
								<table class="tableProd" width="100%" >			
									<tr align="CENTER" style="font-size: 12px; color: #3F5EAB;"><td colspan="3" >ROUND SHIELDS</td></tr>
									<tr align="LEFT" style="font-size: 12px; color: #3F5EAB;"><td width="90px" >GROVER PN</td><td width="90px" >SIZE</td><td>AIR HORNS SHIELD IS FOR</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>1652</td><td>4" (PAIR)</td><td>DUAL CONNECTED TRUKTONE® 1600, 1601</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>1652B</td><td>4" (PAIR) BLACK</td><td>DUAL CONNECTED TRUKTONE® 1609</td></tr>
								</table><br/>
								<a href="prod_detail.php?mod=part_shields&pn=2010" ><div class="bottonSendSin" >RECTANGULAR 2010</div></a>
								<a href="prod_detail.php?mod=part_shields&pn=1654" ><div class="bottonSendSin" >ROUND 1654</div></a>								
								';
							break;
							case "1654":
								$str .= '
								<table class="tableProd" width="100%" >			
									<tr align="CENTER" style="font-size: 12px; color: #3F5EAB;"><td colspan="3" >ROUND SHIELDS</td></tr>
									<tr align="LEFT" style="font-size: 12px; color: #3F5EAB;"><td width="90px" >GROVER PN</td><td width="90px" >SIZE</td><td>AIR HORNS SHIELD IS FOR</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>1654</td><td>6"</td><td>TROMBONE: 1700, 1701, 1748<br/>SINGLE ORGANTONE® 1024, 1027<br/>DUAL CONNECTED ORGANTONE® (2 NEEDED) 1030<br/>STUTTERTONE®  1506, 1510, 1512, 1519, 1528</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>1654B</td><td>6" BLACK</td><td>TROMBONE: 1702</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>1656</td><td>7 1/4"</td><td>SINGLE ORGANTONE®  1042, 1045, 1054, 1055<br/>DUAL CONNECTED ORGANTONE®  (2 REQUIRED)  1048, 1056</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>1697</td><td>4"</td><td>SINGLE TRUKTONE® 1675, 1676,  1678, 1679</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>1697B</td><td>4" BLACK</td><td>SINGLE TRUKTONE® 1677, 1680</td></tr>			
								</table><br/>
								<a href="prod_detail.php?mod=part_shields&pn=2010" ><div class="bottonSendSin" >RECTANGULAR 2010</div></a>
								<a href="prod_detail.php?mod=part_shields&pn=1652" ><div class="bottonSendSin" >ROUND 1652</div></a>								
								';
							break;
							case "2010":
								$str .= '
								<table class="tableProd" width="100%" >			
									<tr align="CENTER" style="font-size: 12px; color: #3F5EAB;"><td colspan="3" >RECTANGULAR SHIELDS</td></tr>
									<tr align="LEFT" style="font-size: 12px; color: #3F5EAB;"><td width="90px" >GROVER PN</td><td width="90px" >SIZE</td><td>AIR HORNS SHIELD IS FOR</td></tr>			
									<tr align="LEFT" style="font-size: 12px;"><td>2010</td><td>4 1/4" x 6 3/4"</td><td>RECTANGULAR AIR HORNS 2000, 2001<br/>RECTANGULAR STUTTERTONE® AIR HORNS: 2040, 2043, 2075</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>2010K</td><td>4 1/4" x 6 3/4"</td><td>2010 SHIELD WITH K</td></tr>
									<tr align="LEFT" style="font-size: 12px;"><td>2010W</td><td>4 1/4" x 6 3/4"</td><td>2010 SHIELD WITH W</td></tr>
								</table><br/>								
								<a href="prod_detail.php?mod=part_shields&pn=1654" ><div class="bottonSendSin" >ROUND 1654</div></a>								
								<a href="prod_detail.php?mod=part_shields&pn=1652" ><div class="bottonSendSin" >ROUND 1652</div></a>
								';
							break;
						}		

						echo $str;
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