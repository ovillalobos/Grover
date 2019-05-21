<?php
$prodNo = $_GET["pn"];
$showPa = "no";

switch($prodNo){
	case "1600":
	case "1650":
	case "1601":
	case "1651":
	case "1609":
	case "1659":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){
	
	$titleNo = $prodNo;
	if( $prodNo == "1651" ){
		$titleNo = "1618 - 1621 - 1651";
	}
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12" style="text-align:center; font-size: 40px; margin-bottom: -5px; color: #3F5EAB;" >Dual Truktone® Air Horns</div>
<div class="col-sm-12" style="text-align:center; font-size: 25px; margin-bottom: 10px; color: #3F5EAB;" >Grover Part Number <?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "truk";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "1600": 	$cantidad = 5;		$inicioEn = 1; 		break;
						case "1650": 	$cantidad = 7;		$inicioEn = 10; 	break;
						case "1601": 	$cantidad = 4;		$inicioEn = 22; 	break;
						case "1651": 	$cantidad = 6;		$inicioEn = 20; 	break;
						case "1609": 	$cantidad = 3;		$inicioEn = 31; 	break;
						case "1659": 	$cantidad = 4;		$inicioEn = 30;		break;
						default:		$cantidad = 5;		$inicioEn = 1; 		break;
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
			<img src="images/icon/bo_marks.png" class="boProdDetail marksAuth" >
		</div>
	</div> 
	<div class="col-sm-7" id="techProd" style="border: 0px solid #000; overflow-x:auto; max-height: 550px;">
			<?php				
			switch($prodNo){
				case "1600":
				case "1601":
				case "1609":
					echo '
					<table class="tableProd" width="100%" >
					<tr align="center" style="font-size: 12px; color: #3F5EAB;">
						<td>GROVER PN</td>
						<td><table class="tableProdInside" width="100%" > <tr align="center" ><td colspan="2" ><span style="color:#3F5EAB;">LENGTH<br/>HORN</span></td></tr> <tr align="center" ><td><span style="color:#3F5EAB;">LONG</span></td><td><span style="color:#3F5EAB;">SHORT</span></td></tr></table></td>
						<td>FLARE</td>
						<td width="150px" >FINISH</td>
						<td><table class="tableProdInside" width="100%" > <tr align="center" ><td colspan="2" ><span style="color:#3F5EAB;">REPLACEMENT<br/>BELLS</span></td></tr> <tr align="center" ><td><span style="color:#3F5EAB;">LONG</span></td><td><span style="color:#3F5EAB;">SHORT</span></td></tr></table></td>
						<td>DUAL<br/>CONECTED<br/>SOUND UNIT</td>
						<td>SOUND UNIT<br/>REPAIR KIT</td>
					</tr>
					<tr align="center" style="font-size: 12px;">
						<td>1600</td>   
						<td><table class="tableProdInside" width="100%" > <tr align="center" ><td>15 1/4"</td><td>13 1/4"</td></tr> </table></td>
						<td>4"</td>
						<td>Chrome Bells<br/>Painted Sound Unit</td>
						<td><table class="tableProdInside" width="100%" > <tr align="center" ><td>1606</td><td>1615</td></tr> </table> </td>
						<td>1602</td>
						<td>1607</td>
					</tr>
					<tr align="center" style="font-size: 12px;">
						<td>1601</td>   
						<td><table class="tableProdInside" width="100%" > <tr align="center" ><td>15 1/4"</td><td>13 1/4"</td></tr> </table></td>
						<td>4"</td>
						<td>Chrome</td>
						<td><table class="tableProdInside" width="100%" > <tr align="center" ><td>1606</td><td>1615</td></tr> </table> </td>
						<td>1612</td>
						<td>1607</td>
					</tr>
					<tr align="center" style="font-size: 12px;">
						<td>1609</td>   
						<td><table class="tableProdInside" width="100%" > <tr align="center" ><td>15 1/4"</td><td>13 1/4"</td></tr> </table></td>
						<td>4"</td>
						<td>Painted</td>
						<td><table class="tableProdInside" width="100%" > <tr align="center" ><td>1682</td><td>1683</td></tr> </table> </td>
						<td>1602</td>
						<td>1607</td>
					</tr>
					</table><br/>
					';
				break;
				case "1650":
					echo '
					<p style="text-align: center; font-size: 16px; margin-left:10px; color: #445EAB;">DUAL TRUKTONE® AIR HORNS ARE AVAILABLE WITH<BR/>INSTALLATION KITS FOR VARIOUS NEEDS.</p>
					<table class="tableProd" width="100%" >
					<tr align="center" style="font-size: 12px; color: #3F5EAB;">
						<td>KIT NUMBER</td>
						<td>AIR HORN INCLUDED</td>
						<td>KIT COMPONENTS</td>
					</tr>
					<tr  style="font-size: 12px;">
						<td align="center" >1650</td>   
						<td align="center" ><a href="prod_detail.php?mod=truk_dua&pn=1600">1600</a></td>
						<td align="left" >
						<p class="justify" >
						1734 Kit for vehicles equipment with air brakes for single, includes:<br/>
						Pull chain * Close Nipple 1/8" NPT * STD Conector 5/16" Tube x 1/8" NPT * STD Screw RD HD 1/4"-20x3/4" * STD Hex Nut 1/4"-20 * 1/4" Nylon Tubing * 1630 Valve * 1095 Tube Supports and STD Tube x 1/4" NPT Connector.
						</p>
						</td>
					</tr>
					</table><br/>
					';
				break;
				case "1651":
					echo '
					<p style="text-align: center; font-size: 16px; margin-left:10px; color: #445EAB;">DUAL TRUKTONE® AIR HORNS ARE AVAILABLE WITH<BR/>INSTALLATION KITS FOR VARIOUS NEEDS.</p>
					<table class="tableProd" width="100%" >
					<tr align="center" style="font-size: 12px; color: #3F5EAB;">
						<td>KIT NUMBER</td>
						<td>AIR HORN INCLUDED</td>
						<td>KIT COMPONENTS</td>
					</tr>
					<tr  style="font-size: 12px;">
						<td align="center" >1651</td>   
						<td align="center" >1601</td>
						<td align="left" >
						<p class="justify" >
						1734 Kit for vehicles equipment with air brakes for single, includes:<br/>
						Pull chain * Close Nipple 1/8" NPT * STD Conector 5/16" Tube x 1/8" NPT * STD Screw RD HD 1/4"-20x3/4" * STD Hex Nut 1/4"-20 * 1/4" Nylon Tubing * 1630 Valve * 1095 Tube Supports and STD Tube x 1/4" NPT Connector.
						</p>
						</td>
					</tr>
					</table><br/>
					';
				break;
				case "1659":
					echo '
					<p style="text-align: center; font-size: 16px; margin-left:10px; color: #445EAB;">DUAL TRUKTONE® AIR HORNS ARE AVAILABLE WITH<BR/>INSTALLATION KITS FOR VARIOUS NEEDS.</p>
					<table class="tableProd" width="100%" >
					<tr align="center" style="font-size: 12px; color: #3F5EAB;">
						<td>KIT NUMBER</td>
						<td>AIR HORN INCLUDED</td>
						<td>KIT COMPONENTS</td>
					</tr>
					<tr  style="font-size: 12px;">
						<td align="center" >1699</td>   
						<td align="center" >1609</td>
						<td align="left" >
						<p class="justify" >
						1734 Kit for vehicles equipment with air brakes for single, includes:<br/>
						Pull chain * Close Nipple 1/8" NPT * STD Conector 5/16" Tube x 1/8" NPT * STD Screw RD HD 1/4"-20x3/4" * STD Hex Nut 1/4"-20 * 1/4" Nylon Tubing * 1630 Valve * 1095 Tube Supports and STD Tube x 1/4" NPT Connector.
						</p>
						</td>
					</tr>
					</table><br/>
					';
				break;
			}
			?>
		<p style="text-align: center; font-size: 16px; margin-left:10px; color: #445EAB;">
			DUAL TRUKTONE® AIR HORNS WITH KIT
		</p>
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>AIR HORN INCLUDED</td><td>INSTALLATION KIT INCLUDED</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_dua&pn=1651" >	1618	</a></td><td>	1601	</td>   <td>	Installation Kit	</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_dua&pn=1651" >	1621	</a></td><td>	1601	</td>   <td>	Installation Kit	</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_dua&pn=1650" >	1650	</a></td><td>	1600	</a></td>   <td><a href="prod_detail.php?mod=part_insta&pn=1734" >1734 Installation Kit</a></td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_dua&pn=1651" >	1651	</a></td><td>	1601	</td>   <td><a href="prod_detail.php?mod=part_insta&pn=1734" >1734 Installation Kit</a></td></tr>
		</table>
		<br/><img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 550px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<p style="text-align: justify; font-size: 16px; margin-left:10px;">
						<br/>Dual Truktone® air horns are ideal for many situations where a powerful blast is needed and a small space is available.
						<br/><br/>Deluxe, hand crafted air horns. Single and dual variety, Truktone® air horns are built for power, to provide deep, loud, solid blasts. Grover Truktone® air horns combine expert engineering, traditional Grover quality dependability.      
					</p>
					<table class="tableProd" width="100%" >
						<?php														
							switch($prodNo){
								case "1600":
									$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN 	</td><td>	LENGTH 	</td><td>	FLARE </td> <td>	FINISH	</td>  <td>	OPTIONAL<br/>WEATHER SHIELD	</td></tr>';
									echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1600</td><td>15 1/4" - 13 1/4"	</td>      <td>	4"	</td>  <td>	 Black Sound Unit Chrome Bells  	</td>  <td><a href="prod_detail.php?mod=part_shields&pn=1652" >1652</a></td></tr>';
								break;
								case "1601":
									$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN 	</td><td>	LENGTH 	</td><td>	FLARE </td> <td>	FINISH	</td>  <td>	OPTIONAL<br/>WEATHER SHIELD	</td></tr>';
									echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1601</td><td>15 1/4" - 13 1/4"	</td>      <td>	4"	</td>  <td>	 Chrome 	</td>  <td>	<a href="prod_detail.php?mod=part_shields&pn=1652" >1652</a> 	</td></tr>';
								break;
								case "1609":
									$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN 	</td><td>	LENGTH 	</td><td>	FLARE </td> <td>	FINISH	</td></tr>';
									echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1609</td><td>15 1/4"	- 13 1/4"</td>      <td>	4"	</td> <td>	 Black 	</td></tr>';
								break;
								case "1650":
									$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN 	</td><td>	LENGTH 	</td><td>	FLARE </td> <td>	FINISH	</td>  <td>	OPTIONAL<br/>WEATHER SHIELD	</td></tr>';
									echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1650</td><td>15 1/4"	- 13 1/4"  	</td>      <td>	4"	</td>  <td>	 Black Sound Unit Chrome Bells	</td> <td>	<a href="prod_detail.php?mod=part_shields&pn=1652" >1652</a> 	</td></tr>';
								break;
								case "1651":
									$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN 	</td><td>	LENGTH 	</td><td>	FLARE </td> <td>	FINISH	</td>  <td>	OPTIONAL<br/>WEATHER SHIELD	</td></tr>';
									echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1618-1621-1651</td><td>15 1/4" - 13 1/4"	</td>      <td>	4"	</td>  <td>	 Chrome 	</td> <td>	<a href="prod_detail.php?mod=part_shields&pn=1652" >1652</a>	</td></tr>';
								break;
								case "1659":
									$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN 	</td><td>	LENGTH 	</td><td>	FLARE </td> <td>	FINISH	</td></tr>';
									echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1659</td><td>15 1/4"	- 13 1/4"</td>      <td>	4"	</td>  <td>	 Black 	</td></tr>';
								break;
							}
						?>
					</table>
					<p style="text-align: justify; font-size: 16px; margin-left:10px;">
						<br/>Each Grover Truktone® air horn is heavy duty manufactured, featuring triple spun brass and expertly plated to automotive specifications.  All Grover air horns are individually built, tuned and tested.						
					</p><br/>
					<?php						
						switch($prodNo){
							case "1600":
								echo '
								<a href="prod_detail.php?mod=truk_dua&pn=1609" ><div class="bottonSendSin" >1609</div></a>
								<a href="prod_detail.php?mod=truk_dua&pn=1601" ><div class="bottonSendSin" >1601</div></a>								
								';
							break;
							case "1601":
								echo '
								<a href="prod_detail.php?mod=truk_dua&pn=1609" ><div class="bottonSendSin" >1609</div></a>
								<a href="prod_detail.php?mod=truk_dua&pn=1600" ><div class="bottonSendSin" >1600</div></a>
								';
							break;
							case "1609":
								echo '
								<a href="prod_detail.php?mod=truk_dua&pn=1601" ><div class="bottonSendSin" >1601</div></a>
								<a href="prod_detail.php?mod=truk_dua&pn=1600" ><div class="bottonSendSin" >1600</div></a>
								';
							break;
							case "1650":
								echo '
								<a href="prod_detail.php?mod=truk_dua&pn=1609" ><div class="bottonSendSin" >1609</div></a>
								<a href="prod_detail.php?mod=truk_dua&pn=1601" ><div class="bottonSendSin" >1601</div></a>
								';
							break;
							case "1651":
								echo '
								<a href="prod_detail.php?mod=truk_dua&pn=1609" ><div class="bottonSendSin" >1609</div></a>
								<a href="prod_detail.php?mod=truk_dua&pn=1601" ><div class="bottonSendSin" >1601</div></a>
								';
							break;
							case "1659":
								echo '
								<a href="prod_detail.php?mod=truk_dua&pn=1609" ><div class="bottonSendSin" >1609</div></a>
								<a href="prod_detail.php?mod=truk_dua&pn=1601" ><div class="bottonSendSin" >1601</div></a>
								';
							break;
						}
					?>
				</td>
			</tr>			
		</table>
		<?php include("include/slogan.php"); ?>
	</div>
	<div class="col-sm-7" id="marksAuth" style="border: 0px solid #000; overflow-y:auto; max-height: 550px;">
		<table border="0" width="100%" >
			<tr>
				<td align="center" >
					<?php
					switch($prodNo){
						case "1600":
						case "1650":
							echo '<img src="images/prod/truk/icon/authenticity_1.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						case "1601":
						case "1651":
							echo '<img src="images/prod/truk/icon/authenticity_2.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						case "1609":
						case "1659":
							echo '<img src="images/prod/truk/icon/authenticity_3.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						default:
							echo '<img src="images/prod/truk/icon/authenticity_1.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
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