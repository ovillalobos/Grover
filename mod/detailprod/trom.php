<?php
$prodNo = $_GET["pn"];
$showPa = "no";

switch($prodNo){
	case "1700":
	case "1701":
	case "1702":
	case "1748":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){
	
	$titleNo = $prodNo;
	if( $prodNo == "1700" ){
		$titleNo = "Grover Part Numbers 1700 - 1748";
	} else {
		$titleNo = "Grover Part Number ".$prodNo;
	}
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12 titleProdDetail" >Trombone Air Horns</div>
<div class="col-sm-12 subTitleProdDetail" ><?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "trom";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "1700": 	$cantidad = 4;		$inicioEn = 1;		break;
						case "1701": 	$cantidad = 5;		$inicioEn = 10; 	break;
						case "1702": 	$cantidad = 2;		$inicioEn = 20; 	break;
						default:		$cantidad = 5;		$inicioEn = 10;		break;
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
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN	</td>   <td>	FINISH	</td>   <td width="80" >	LENGTH<br/>END TO END	</td>   <td>	FLARE SIZE	</td>   <td>	REPLACEMENT PEDESTAL	</td>   <td>	SOUND UNIT REPAIR KIT	</td>   <td>	REPLACEMENT SOUND UNIT	</td><td>	OPTIONAL SHIELD	</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=trom&pn=1700" >	1700	</a></td>   <td>	CHROME	</td>   <td>	24 1/2"	</td>   <td>	6"	</td>   <td><a href="prod_detail.php?mod=part_pedestal">	1720	</a></td>   <td><a href="prod_detail.php?mod=part_repakit">	1681	</a></td>   <td>	1703	</td>     <td><a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a></td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=trom&pn=1701" >	1701	</a></td>   <td>	CHROME BELL BLACK SOUND UNIT	</td>   <td>	24 1/2"	</td>   <td>	6"	</td>   <td><a href="prod_detail.php?mod=part_pedestal">	1720	</a></td>   <td>	<a href="prod_detail.php?mod=part_repakit">	1681	</a>	</td>   <td>	1704	</td>     <td><a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a></td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=trom&pn=1702" >	1702	</a></td>   <td>	PAINTED	</td>   <td>	24 1/2"	</td>   <td>	6"	</td>   <td><a href="prod_detail.php?mod=part_pedestal">	1720	</a></td>   <td>	<a href="prod_detail.php?mod=part_repakit">	1681	</a>	</td>   <td>	1704	</td>     <td><a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a></td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=trom&pn=1700" >	1748	</a></td>   <td>	CHROME	</td>   <td>	21 1/8"	</td>   <td>	6"	</td>   <td><a href="prod_detail.php?mod=part_pedestal">	1720	</a></td>   <td>	<a href="prod_detail.php?mod=part_repakit">	1681	</a>	</td>   <td>	1703	</td>     <td><a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a></td></tr>
		</table>
		<br/><p style="text-align: justify; font-size: 16px; margin-left:10px; color: #445EAB;">
			TROMBONE AIR HORNS WITH KIT
		</p><br/>
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;">
				<td>	GROVER PN	</td>   
				<td>	AIR HORN INCLUDED	</td>   
				<td>	KIT COMPONENTS </td>
			</tr>
			<tr align="center" class="contentTable"><td>	1160	</td>   <td>	1700</td>   <td align="left" >12v compressor <a href="#">1143</a> air tank, <a href="prod_detail.php?mod=part_elec_valves">12v electric valve</a>, tubing and fittings, pedestal.</td></tr>
		</table>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 500px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<div class="col-sm-12">
						<p style="text-align: justify; font-size: 16px; margin-left:10px;">
							<br/>Grover Trombone air horns have a distinctively loud and semi-deep tone. (<a href="#" class="openModal" id="Orga" >Organtone®</a> is deepest) Available in  chrome, all black enamel and chrome and black.
							<br/><br/>The sleek, streamlined, modern design of the 1700 Series Horn delivers power and revolutionizes simplicity of installation and bell replacement.  Factory-tuned horn – no readjusting, no re-tuning.  Easily interchanged and simple installation. Light weight.  						
						</p>
						<table class="tableProd" width="100%" >
							<?php
								$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>	GROVER PN 	</td><td>	LENGTH 	</td>  <td>	FLARE SIZE	</td> <td>	FINISH	</td>  <td>	OPTIONAL WEATHER SHIELD	</td></tr>';
								
								switch($prodNo){
									case "1700":
										echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1700</td><td>	24 1/2"	</td>      <td>	6"	</td>   <td>	CHROME	</td>   <td><a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a></td></tr>
													   <tr align="center" style="font-size: 12px;"><td>1748</td><td>	21 1/8"	</td>      <td>	6"	</td>   <td>	CHROME	</td>   <td><a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a></td></tr>';
									break;
									case "1701":
										echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1701</td><td>	24 1/2"	</td>      <td>	6"	</td>   <td>	CHROME BELL BLACK SOUND UNIT	</td>   <td>	<a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a>	</td></tr>';
									break;
									case "1702":
										echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1702</td><td>	24 1/2"	</td>      <td>	6"	</td>   <td>	PAINTED	</td>   <td>	<a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a>	</td></tr>';
									break;
									case "1748":
										echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1700</td><td>	21 1/8"	</td>      <td>	6"	</td>   <td>	CHROME	</td>   <td>	<a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a>	</td></tr>';
									break;
									default:
										echo $title_1.'<tr align="center" style="font-size: 12px;"><td>1700</td><td>	24 1/2"	</td>      <td>	6"	</td>   <td>	CHROME	</td>   <td>	<a href="prod_detail.php?mod=part_shields&pn=1654">	1654	</a>	</td></tr>';
									break;
								}
							?>
						</table>
						<p style="text-align: justify; font-size: 16px; margin-left:10px;">
							<br/>Grover air horns are heavy duty. All parts precision constructed and all horns built, tuned and tested at our factory.
						</p>	
						<?php
							switch($prodNo){
								case "1700":
									echo '
										<a href="prod_detail.php?mod=trom&pn=1702" ><div class="bottonSendSin" >1702</div></a>
										<a href="prod_detail.php?mod=trom&pn=1701" ><div class="bottonSendSin" >1701</div></a>
										';
								break;
								case "1701":
									echo '
										<a href="prod_detail.php?mod=trom&pn=1702" ><div class="bottonSendSin" >1702</div></a>
										<a href="prod_detail.php?mod=trom&pn=1700" ><div class="bottonSendSin" >1700</div></a>
										';
								break;
								case "1702":
									echo '
										<a href="prod_detail.php?mod=trom&pn=1701" ><div class="bottonSendSin" >1701</div></a>
										<a href="prod_detail.php?mod=trom&pn=1700" ><div class="bottonSendSin" >1700</div></a>
										';
								break;
							}
						?>						
						
					</div>
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
						case "1700":
						case "1748":
							echo '<img src="images/prod/trom/icon/authenticity.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						case "1701":
							echo '<img src="images/prod/trom/icon/authenticity.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						case "1702":
							echo '<img src="images/prod/trom/icon/authenticity.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						default:
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