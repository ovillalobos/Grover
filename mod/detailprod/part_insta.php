<?php
$prodNo = $_GET["pn"];
$showPa = "no";

switch($prodNo){
	case "1107":
	case "1218":
	case "1290":
	case "1291":
	case "1730":
	case "1734":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){
	$title 		= "Installation Kit";
	$titleNo 	= "Grover Part Number ".$prodNo;
	
	/*switch($prodNo){
		case "1018":	$title = "Installation Kit"; $titleNo = "Grover Part Number 1018";	break;
	}*/
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12" style="text-align:center; font-size: 40px; margin-bottom: -5px; color: #3F5EAB;" ><?php echo $title;?></div>
<div class="col-sm-12" style="text-align:center; font-size: 25px; margin-bottom: 10px; color: #3F5EAB;" ><?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "parts/instal";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "1018": 	$cantidad = 1;		$inicioEn = 1;		break;						
						case "1107": 	$cantidad = 2;		$inicioEn = 6;		break;
						case "1218": 	$cantidad = 1;		$inicioEn = 11;		break;
						case "1290": 	$cantidad = 2;		$inicioEn = 16;		break;
						case "1291": 	$cantidad = 2;		$inicioEn = 21;		break;
						case "1501": 	$cantidad = 2;		$inicioEn = 26;		break;
						case "1650": 	$cantidad = 2;		$inicioEn = 31;		break;
						case "1651": 	$cantidad = 2;		$inicioEn = 36;		break;
						case "1730": 	$cantidad = 3;		$inicioEn = 41;		break;
						case "1734": 	$cantidad = 2;		$inicioEn = 46;		break;
						case "2041": 	$cantidad = 2;		$inicioEn = 51;		break;
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
				case "1107":
				case "1218":
				case "1290":
				case "1291":
				case "1730":
				break;
				case "1734":
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
			<?php
			echo '
			<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
				There are a variety of air horns offered with kits for various applications including for vehicle with air brakes and vehicles without.
			</p>
			';
			switch($prodNo){
				case "1107":
				case "1218":
				case "1290":
				case "1291":				
				case "1730":
				case "1734":
					echo '
					<table class="tableProd" width="100%" >
						<tr align="center" style="font-size: 12px; color: #3F5EAB;">
							<td align="center" >GROVER PN</td><td align="left" >AIR HORN INCLUDED</td>
						</tr>
						<tr align="center" style="font-size: 12px;">
							<td align="center" >1734</td><td align="left" >Dual Truktone® Air Horns Grover Part Number <a href="prod_detail.php?mod=truk_dua&pn=1600" >1600</a></td>
						</tr>
						<tr align="center" style="font-size: 12px;">
							<td align="center" >1734</td><td align="left" >Dual Truktone® Air Horns Grover Part Number <a href="prod_detail.php?mod=truk_dua&pn=1601" >1601</a></td>
						</tr>
						<tr align="center" style="font-size: 12px;">
							<td align="center" >1734</td><td align="left" >Dual Truktone® Air Horns Grover Part Number <a href="prod_detail.php?mod=truk_dua&pn=1650" >1650</a></td>
						</tr>
						<tr align="center" style="font-size: 12px;">
							<td align="center" >1734</td><td align="left" >Dual Truktone® Air Horns Grover Part Number <a href="prod_detail.php?mod=truk_dua&pn=1651" >1651-1618-1621</a></td>
						</tr>
					</table>
					';
				break;				
			}
			?>
		<br/>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 500px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<?php
					$str = '<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
								Grover Products offers various installation kits for different needs including for vehicles with air brakes and vehicles without air brakes.   Various installation kits are offered for  your air horn installation needs.
							</p>';
							
					switch($prodNo){						
						case "1107":
							$str .= '
							<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
								Dual horn conversion installation kit for dual (separated) horns.
							</p>
							<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
								This kit must used with any of our other kits 1730, 1734, 1288, 1291; contains T fitting, 4 feet of additional tubing and fittings.
							</p><br/>
							<a href="prod_detail.php?mod=part_insta&pn=1734" ><div class="bottonSendSin" >1734</div></a>
							<a href="prod_detail.php?mod=part_insta&pn=1730" ><div class="bottonSendSin" >1730</div></a>
							';
						break;
						case "1218":
							$str .= '
							<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
								Kit number 1218 is a complete compressor unit - tank mounted. The complete assembly features 1167 12v compressor, 1136 12v electric valve mounted on the 1174 air tank. Comes ready to attach to the power source.
							</p>
							<br/>
							<table class="tableProd" width="100%" >
								<tr align="center" class="titleTable">
									<td>Length</td><td>15"</td>
									<td>Height</td><td>13 1/2"</td>
									<td>Width</td><td>6 1/2"</td>
									<td>Weight</td><td>18 3/4 Lbs.</td>
								</tr>
							</table>
							<br/>
							<a href="prod_detail.php?mod=part_insta&pn=1291" ><div class="bottonSendSin" >1291</div></a>
							';
						break;
						case "1290":
							$str .= '
							';
						break;
						case "1291":
							$str .= '
							<br/>							
							<a href="prod_detail.php?mod=part_insta&pn=1734" ><div class="bottonSendSin" >1734</div></a>
							';
						break;
						case "1730":
							$str .= '
							<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
								For vehicles without air brakes.
							</p>
							<table class="tableProd" width="100%" >
								<tr align="center" style="font-size: 12px; color: #3F5EAB;">
									<td align="center" width="100px" >GROVER PN</td><td align="left" >KIT COMPONENTS</td>
								</tr>
								<tr align="center" style="font-size: 12px;">
									<td align="center" >1730</td>
									<td align="left" >Installation Kit Includes: <a href="prod_detail.php?mod=part_elec_valves">1136</a> 12v. control valve, horn button, wiring, pull chain, close nipple 1/8" NPT, STD connector 5/16" tube x 1/8" NPT, STD screq RD HD 1/4" 20 x 3/4", STD HEX NUT 1/4" 20, 1095 Tube supports and STD Tube x 1/4" NPT connector.</td>
								</tr>
							</table><br>
							<a href="prod_detail.php?mod=part_insta&pn=1734" ><div class="bottonSendSin" >1734</div></a>
							<a href="prod_detail.php?mod=part_insta&pn=1107" ><div class="bottonSendSin" >1107</div></a>
							';
						break;
						case "1734":
							$str .= '
							<p style="text-align: justify; font-size: 15px; margin-left: 10px;">
								Installation Kit for single horns equipped with air brakes.
							</p>
							<table class="tableProd" width="100%" >
								<tr align="center" style="font-size: 12px; color: #3F5EAB;">
									<td align="center" width="100px" >GROVER PN</td><td align="left" >KIT COMPONENTS</td>
								</tr>
								<tr align="center" style="font-size: 12px;">
									<td align="center" >1734</td>
									<td align="left" >
										<strong>FOR SIGLE HORNS INCLUDES:</strong><br/>
										<p style="text-align: justify;">
										Pull chain * Close Nipple 1/8" NPT * STD Conector 5/16" Tube x 1/8" NPT * STD Screw RD HD 1/4"-20 3/4" * STD Hex Nut 1/4" - 20 * 1/4" Nylon Tubing * 1630 Valve * 1095 Tube Supports and STD Tube x 1/4" NPT Connector.
										</p>
									</td>
								</tr>
							</table><br>
							<a href="prod_detail.php?mod=part_insta&pn=1730" ><div class="bottonSendSin" >1730</div></a>
							<a href="prod_detail.php?mod=part_insta&pn=1291" ><div class="bottonSendSin" >1291</div></a>
							';
						break;
					}
					echo $str;
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