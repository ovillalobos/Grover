<?php
$prodNo = $_GET["pn"];
$showPa = "no";

switch($prodNo){
	case "dualSep":
	case "dualCon":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){
	
	$titleNo = $prodNo;
	switch($prodNo){
		case "dualSep":	$title = "Dual Separated Organtone&#174; Air Horns"; $titleNo = "Grover Part Numbers 1024/1027, 1042/1045, 1054/1055";	break;
		case "dualCon":	$title = "Dual Connected Organtone&#174; Air Horns"; $titleNo = "Grover Part Numbers 1030, 1048, 1056";	break;
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
					$nomFile  = "orga";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "dualSep": 	$cantidad = 4;		$inicioEn = 10;		break;
						case "dualCon": 	$cantidad = 4;		$inicioEn = 1; 		break;
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
	<div class="col-sm-7" id="techProd" style="border: 0px solid #000; overflow-x:auto; max-height: 500px;">
			<?php
			switch($prodNo){
				case "dualSep":
					echo '
					<table class="tableProd" width="100%" >
						<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN	</td>   <td>	LENGTH<br/>END TO END	</td>   <td>	FLARE	</td>   <td>	REPLACEMENT<br/>BELL & BUSHING	</td>   <td>	STANCHION	</td>   <td>	SOUND UNIT	</td>   <td>	SOUND UNIT REPAIR KIT	</td>   <td><a href="prod_detail.php?mod=part_pedestal">PEDESTAL</a>	</td> <td>	OPTIONAL SHIELD	</td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1022	</td>   <td>	24 1/2"	</td>   <td>	6"	</td>   <td>	1076	</td>   <td>	1086	</td>   <td>	1092	</td>   <td>	1094	</td>   <td>	1721	</td><td>	<a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a>	</td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1024	</td>   <td>	24 1/2"	</td>   <td>	6"	</td>   <td>	1077	</td>   <td>	1087	</td>   <td>	1093	</td>   <td>	1094	</td>   <td>	1720	</td><td>	<a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a>	</td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1027	</td>   <td>	21 1/2"	</td>   <td>	6"	</td>   <td>	1079	</td>   <td>	1087	</td>   <td>	1093	</td>   <td>	1094	</td>   <td>	1720	</td><td>	<a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a>	</td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1042	</td>   <td>	30"	</td>   <td>	7 1/4"	</td>   <td>	1081	</td>   <td>	1087	</td>   <td>	1093	</td>   <td>	1094	</td>   <td>	1735	</td><td>	1656	</td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1045	</td>   <td>	25"	</td>   <td>	7 1/4"	</td>   <td>	1083	</td>   <td>	1087	</td>   <td>	1093	</td>   <td>	1094	</td>   <td>	1735	</td><td>	1656	</td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1054	</td>   <td>	37 1/2"	</td>   <td>	7 1/4"	</td>   <td>	1084	</td>   <td>	1087	</td>   <td>	1093	</td>   <td>	1094	</td>   <td>	1735	</td><td>	1656	</td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1055	</td>   <td>	34"	</td>   <td>	7 1/4"	</td>   <td>	1085	</td>   <td>	1087	</td>   <td>	1093	</td>   <td>	1094	</td>   <td>	1735	</td><td>	1656	</td></tr>	
					</table><br/>
					<p style="text-align: center; font-size: 15px; margin-left: 10px; color: #1E5799;">
						DUAL SEPARATED ORGANTONE® AIR HORN
					</p>
					<table class="tableProd" width="100%" >
						<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td colspan="3" >HORN MOUNTED ON EACH SIDE OF CAB</td></tr>
						<tr align="center" style="font-size: 12px;"><td>1-1024</td><td>1-1042</td><td>1-1054</td></tr>
						<tr align="center" style="font-size: 12px;"><td>1-1027</td><td>1-1045</td><td>1-1055</td></tr>
					</table><br/>
					<p style="text-align: center; font-size: 15px; margin-left: 10px; color: #1E5799;">
						THE LONGER THE HORN THE DEEPER THE SOUND<br/>ORGANTONE® AIR HORN WITH KIT
					</p>
					<table class="tableProd" width="100%" >
						<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>AIR HORN INCLUDED</td><td>DESCRIPTION</td></tr>
						<tr align="center" style="font-size: 12px;"><td>	1018	</td><td>	1024	</td>   <td>	1732 Installation Kit	</td></tr>
					</table><br/>
					';
				break;
				case "dualCon": 
					echo '
					<table class="tableProd" width="100%" >
						<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN	</td>   <td>	LENGTH	</td>   <td>	FLARE	</td>   <td>	FINISH	</td>   <td>	REPLACEMENT<br/>BELL & BUSHING	</td><td><a href="prod_detail.php?mod=part_pedestal">PEDESTAL</a>	</td> <td>	OPTIONAL SHIELD	</td></tr>
						<tr align="center" style="font-size: 12px;"><td>	1030	</td>   <td>Long 24 1/2" - Short 21 1/2"</td>   <td>	6"	</td>   <td>	Chrome	</td>   <td>	Long 1077 - Short 1079	</td>   <td>	1720	</td> <td><a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a></td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1048	</td>   <td>Long 30" - Short 25"</td>   <td>	7 1/4"	</td>   <td>	Chrome	</td>   <td>	Long 1081 - Short 1083	</td>   <td>	1735	</td>   <td>	1656	</td></tr>	
						<tr align="center" style="font-size: 12px;"><td>	1056	</td>   <td>Long 37 1/2" - Short 34"</td>   <td>	7 1/4"	</td>   <td>	Chrome	</td>   <td>	Long 1084 - Short 1085	</td>   <td>	1735	</td>   <td>	1656	</td></tr>
					</table><br/>
					<p style="text-align: center; font-size: 15px; margin-left: 10px; color: #1E5799;">
						DUAL SEPARATED ORGANTONE® AIR HORN PARTS
					</p>
					<table class="tableProd" width="100%" >
						<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=part_repakit">1-1094</a></td><td>Repari kit (2 required)</td></tr>
						<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=part_repakit">1-1093</a></td><td>Replacement sount unit (2 required)</td></tr>
						<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=part_repakit">1-1089</a></td><td>Replacement stanchion</td></tr>
					</table><br/>
					<p style="text-align: center; font-size: 15px; margin-left: 10px; color: #1E5799;">
						THE LONGER THE HORN THE DEEPER THE SOUND<br/>ORGANTONE® AIR HORN WITH KIT
					</p>
					<table class="tableProd" width="100%" >
						<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>AIR HORN INCLUDED</td><td>DESCRIPTION</td></tr>
						<tr align="center" style="font-size: 12px;"><td>	1021	</td><td>	<a href="prod_detail.php?mod=orga_sin&pn=1024" >1024</a>	</td>   <td>	<a href="prod_detail.php?mod=part_insta&pn=1734" >1734</a> Installation kit for vehicles equipped with air brakes	</td></tr>
					</table><br/>
					';
				break;
			}
			?>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 500px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<?php
					switch($prodNo){
						case "dualSep":
							echo '
							<p style="text-align: justify; font-size: 15px;">
								Designed and perfected by Grover, the original, deluxe, deep, rich, powerful tone.  For a sleek look and a deep, strong sound, these horns are built tough for quality and performance.  The  authentic Grover sound and the solid Grover look.
								Grover Organtone ® deluxe air horns combine expert engineering, traditional Grover quality, powerful sound and dependability.    Demanded by the best.
								<br/><br/>Mount one on your truck for an amazing look and great sound.   Mount two (a pair) on your truck for that super rugged, extra loud effect.    Make your truck the King of the Road with genuine Grover Air Horns.
							</p>						
							<table width="100%" >
								<tr>
									<td colspan="5" align="center">
										<p style="text-align: center; font-size: 15px; margin-left: 10px; color: #1E5799;">
											SINGLE ORGANTONE® AIR HORN
										</p>
										FRONT PEDESTAL INCLUDED ADJUSTABLE HORNS
									</td>
								</tr>
								<tr>
									<td>
										<table class="tableProd" width="100%" >	
											<tr align="center" class="titleTable"><td>GROVER PN</td><td>LENGTH</td><td>FLARE</td></tr>
											<tr align="center" ><td>1024</td><td>24 1/2"</td><td>6"</td></tr>					
											<tr align="center" ><td>1027</td><td>21 1/2"</td><td>6"</td></tr>
										</table>
									</td>
									<td>&nbsp;</td>
									<td>
										<table class="tableProd" width="100%" >	
											<tr align="center" class="titleTable"><td>GROVER PN</td><td>LENGTH</td><td>FLARE</td></tr>
											<tr align="center" ><td>1042</td><td>30"</td><td>7 1/4"</td></tr>					
											<tr align="center" ><td>1045</td><td>25"</td><td>7 1/4"</td></tr>
										</table>
									</td>
									<td>&nbsp;</td>
									<td>
										<table class="tableProd" width="100%" >	
											<tr align="center" class="titleTable"><td>GROVER PN</td><td>LENGTH</td><td>FLARE</td></tr>
											<tr align="center" ><td>1054</td><td>37 1/2"</td><td>7 1/4"</td></tr>					
											<tr align="center" ><td>1055</td><td>34"</td><td>7 1/4"</td></tr>
										</table>
									</td>
								</tr>
							</table>
							<p style="text-align: justify; font-size: 15px;">
								The longer the horn the deeper the tone. Two Organtone® air horn (grouped together here) create dual separated Organtone® air horns set.
							</p>					
							<a href="prod_detail.php?mod=orga_dua&pn=dualCon" ><div class="bottonSendSin" >DUAL CONNECTED</div></a>
							<a href="prod_detail.php?mod=orga_sin&pn=1024" ><div class="bottonSendSin" >SINGLE ORGANTONE</div></a>
							<a href="prod_detail.php?mod=orga_sin&pn=1022p" ><div class="bottonSendSin" >ORGANTONE BLACK</div></a>
							';
						break;
						case "dualCon":
							echo '
							<p style="text-align: justify; font-size: 15px;">
								Designed and perfected by Grover, the original, deluxe, deep, rich, powerful tone.  For a sleek look and a deep, strong sound, these horns are built tough for quality and performance.  The  authentic Grover sound and the solid Grover look.
								Grover Organtone ® deluxe air horns combine expert engineering, traditional Grover quality, powerful sound and dependability.    Demanded by the best.
								<br/><br/>Mount one on your truck for an amazing look and great sound.   Mount two (a pair) on your truck for that super rugged, extra loud effect.    Make your truck the King of the Road with genuine Grover Air Horns.
							</p>						
							<table class="tableProd" width="100%" >	
								<tr align="center" class="titleTable"><td>GROVER PN</td><td>LENGTH</td><td>FLARE</td></tr>
								<tr align="center" ><td>1030</td><td>Long 24 1/2" - Short 21 1/2"</td><td>6"</td></tr>
								<tr align="center" ><td>1048</td><td>Long 30" - Short 25"</td><td>7 1/4"</td></tr>
								<tr align="center" ><td>1056</td><td>Long 37 1/2" - Short 34"</td><td>7 1/4"</td></tr>
							</table>							
							<p style="text-align: justify; font-size: 15px;">
								The longer the horn the deeper the tone. Two Organtone® air horns (grouped together here) create dual separated Organtone® air horns set.
							</p>					
							<a href="prod_detail.php?mod=orga_dua&pn=dualSep" ><div class="bottonSendSin" >DUAL SEPARATED</div></a>
							<a href="prod_detail.php?mod=orga_sin&pn=1024" ><div class="bottonSendSin" >SINGLE ORGANTONE</div></a>
							<a href="prod_detail.php?mod=orga_sin&pn=1022p" ><div class="bottonSendSin" >ORGANTONE BLACK</div></a>
							';
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
							echo '<img src="images/prod/orga/icon/authenticity_1022.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						case "dualCon":
							echo '<img src="images/prod/orga/icon/authenticity.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
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