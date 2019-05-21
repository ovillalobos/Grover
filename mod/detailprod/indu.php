<?php
$prodNo = $_GET["pn"];
$showPa = "no";

switch($prodNo){
	case "7000a":
	case "7000b":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){
	$titleNo = $prodNo;
	if( $prodNo == "7000a" ){ $titleNo = "7000A"; }
	if( $prodNo == "7000b" ){ $titleNo = "7000B"; }
?>
<input id="idProd" value="pdfindu" type="hidden" >
<div class="col-sm-12 titleProdDetail">Industrial Air Horns</div>
<div class="col-sm-12 subTitleProdDetail">Grover Part Number <?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "indu";
					$cantidad = 4;
					$inicioEn = 1;
					$cantMax  = $cantidad + $inicioEn;
					
					for( $i=$inicioEn ; $i<$cantMax ; $i++ ){
						echo '<img src="images/prod/'.$nomFile.'/sm/'.$i.'.png" data-medium-img="images/prod/'.$nomFile.'/md/'.$i.'.png" data-big-img="images/prod/'.$nomFile.'/bg/'.$i.'.png" alt="">';
					}
				?>
			</div>
		</div>
		<div style="margin-top: 15px; margin-bottom: 15px;" >
			<input type="hidden" value="showDesc" id="aux" >
			<!--img src="images/icon/bo_pdf.png" id="downPDF" class="boProdDetail"-->	
			<!--img src="images/icon/bo_compare.png" id="compProd" class="boProdDetail compProd" -->
			<a href="images/prod/stut/pdf/manual.pdf" target="_blank" ><img src="images/icon/bo_pdf.png" class="boProdDetail"></a>
			<img src="images/icon/bo_marks.png" class="boProdDetail marksAuth">
		</div>
	</div>
	<div class="col-sm-12" id="techProd" style="border: 0px solid #000; overflow-x:auto; max-height: 550px;">
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>		</td>   <td>	GROVER PN	</td>   <td>			LENGTH               END TO END	</td>   <td>	FLARE SIZE	</td>   <td>	REPLACEMENT BELLS	</td>   <td>	SOUND UNIT	</td>   <td>	SOUND UNIT REPAIR KIT	</td>   <td>	WEIGHT	</td>   <td>	FINISH	</td></tr>
			<tr align="center" style="font-size: 12px;"><td>		</td>   <td>	1675	</td>   <td>			15 1/2"	</td>   <td>	4"	</td>   <td>	1606	</td>   <td>	1703	</td>   <td>	1681	</td>   <td>	3 LBS	</td>   <td>	all chrome	</td></tr>
			<tr align="center" style="font-size: 12px;"><td>		</td>   <td>	1676	</td>   <td>			15 1/2"	</td>   <td>	4"	</td>   <td>	1606	</td>   <td>	1704	</td>   <td>	1681	</td>   <td>	3 LBS	</td>   <td>	chrome/black su	</td></tr>
			<tr align="center" style="font-size: 12px;"><td>		</td>   <td>	1677	</td>   <td>			15 1/2"	</td>   <td>	4"	</td>   <td>	1682	</td>   <td>	1704	</td>   <td>	1681	</td>   <td>	3 LBS	</td>   <td>	all black	</td></tr>
			<tr align="center" style="font-size: 12px;"><td>		</td>   <td>	1678	</td>   <td>			13 1/2"	</td>   <td>	4"	</td>   <td>	1615	</td>   <td>	1703	</td>   <td>	1681	</td>   <td>	3 LBS	</td>   <td>	all chrome	</td></tr>
			<tr align="center" style="font-size: 12px;"><td>		</td>   <td>	1679	</td>   <td>			13 1/2"	</td>   <td>	4"	</td>   <td>	1615	</td>   <td>	1704	</td>   <td>	1681	</td>   <td>	3 LBS	</td>   <td>	chrome/black su	</td></tr>
			<tr align="center" style="font-size: 12px;"><td>		</td>   <td>	1680	</td>   <td>			13 1/2"	</td>   <td>	4"	</td>   <td>	1683	</td>   <td>	1704	</td>   <td>	1681	</td>   <td>	3 LBS	</td>   <td>	all black	</td></tr>
		</table>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail compProd" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 550px;">
		<table border="0" width="100%" >			
			<tr>
				<td>
					<div class="col-sm-12">
						<p style="text-align: justify; font-size: 16px; margin-left:10px;">
							<br/>Our industrial horn is built to be far reaching, powerful and loud. Designed for long wear under the most adverse conditions, Grover Industrial Air Horns provide a positive signal, dependable and effective. For military and disaster preparedness.
						</p>
					</div>
					<div class="col-sm-12">
						<p style="text-align: justify; font-size: 16px; margin-left:10px;">
							<br/>Ideal for fire stations, city garages, public works buildings and most municipal buildings. Also ideal disaster, distress, fire, flood signal.  
							Grover warning and disaster signals have been used by Army, Navy, Air Force and Civil Defense as well as airports, ranger stations, industrial plants, factories and warehouses.  
						</p>
					</div>
					<div class="col-sm-12">
						<table class="tableProd" width="100%" >
							<?php
								$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>LENGTH</td><td>FLARE SIZE</td><td>FINISH</td><td>LINE</td></tr>';
								
								switch($prodNo){
									case "7000a":
										echo $title_1.'<tr align="center" style="font-size: 12px;" ><td>7000A</td><td>7<span class="smallFont" >1/2"</span></td><td>3<span class="smallFont" >1/2"</span></td><td>Brass Baked Enamel<br/>Die Cast Sound Unit</td><td>1/4" Pipe</td></tr>';
									break;
									case "7000b":
										echo $title_1.'<tr align="center" style="font-size: 12px;" ><td>7000B</td><td>7<span class="smallFont" >1/2"</span></td><td>3<span class="smallFont" >1/2"</span></td><td>Brass Baked Enamel<br/>Brass Sound Unit</td><td>1/4" Pipe</td></tr>';
									break;								
									default:
										echo $title_1.'<tr align="center" style="font-size: 12px;" ><td>7<span class="smallFont" >1/2"</span></td><td>3<span class="smallFont" >1/2"</span></td><td>Brass Baked Enamel</td><td>1/4" Pipe</td></tr>';
									break;
								}
							?>
						</table>
					</div>
					<?php
						switch($prodNo){
							case "7000a":
								echo '<div class="col-sm-12"><br/><a href="prod_detail.php?mod=indu&pn=7000b" ><div class="bottonSendSin" >7000B</div></a></div>';
							break;
							case "7000b":
								echo '<div class="col-sm-12"><br/><a href="prod_detail.php?mod=indu&pn=7000a" ><div class="bottonSendSin" >7000A</div></a></div>';
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
					<img src="images/prod/indu/icon/authenticity.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >			
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