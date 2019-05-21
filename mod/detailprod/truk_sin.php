<?php
$prodNo = $_GET["pn"];
$showPa = "no";

switch($prodNo){
	case "1671":
	case "1675":
	case "1676":
	case "1677":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){
	
	$titleNo = $prodNo;
	switch($prodNo){
		case "1671":	$titleNo = "Grover Part Number 1671";			break;
		case "1675":	$titleNo = "Grover Part Numbers 1675, 1678";	break;
		case "1676":	$titleNo = "Grover Part Numbers 1676, 1679";	break;
		case "1677":	$titleNo = "Grover Part Numbers 1677, 1680";	break;
	}
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12" style="text-align:center; font-size: 40px; margin-bottom: -5px; color: #3F5EAB;" >Single Truktone® Air Horns</div>
<div class="col-sm-12" style="text-align:center; font-size: 25px; margin-bottom: 10px; color: #3F5EAB;" ><?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "truk";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "1671": 	$cantidad = 3;		$inicioEn = 70;		break;
						case "1675": 	$cantidad = 3;		$inicioEn = 70;		break;
						case "1676": 	$cantidad = 4;		$inicioEn = 60; 	break;
						case "1677": 	$cantidad = 5;		$inicioEn = 80; 	break;
						default:		$cantidad = 3;		$inicioEn = 70;		break;
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
			<img src="images/icon/bo_marks.png" class="boProdDetail marksAuth">
		</div>
	</div>
	<div class="col-sm-7" id="techProd" style="border: 0px solid #000; overflow-x:auto; max-height: 500px;">
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>LENGTH</td><td>FLARE</td><td>FINISH</td><td>REPLACEMENT BELLS</td><td>SOUND UNIT</td><td>SOUND UNIT<br/>REPAIR KIT</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_sin&pn=1675" >1675</a></td>   <td>			15 1/2"	</td><td>Chrome</td>   <td>	4"	</td>   <td>	1606	</td>   <td>	1703	</td>   <td>	1681	</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_sin&pn=1676" >1676</a></td>   <td>			15 1/2"	</td><td>Chrome Bell Painted sound unit</td>   <td>	4"	</td>   <td>	1606	</td>   <td>	1704	</td>   <td>	1681	</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_sin&pn=1677" >1677</a></td>   <td>			15 1/2"	</td><td>Painted</td>   <td>	4"	</td>   <td>	1682	</td>   <td>	1704	</td>   <td>	1681	</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_sin&pn=1675" >1678</a></td>   <td>			13 1/2"	</td><td>Chrome</td>   <td>	4"	</td>   <td>	1615	</td>   <td>	1703	</td>   <td>	1681	</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_sin&pn=1676" >1679</a></td>   <td>			13 1/2"	</td><td>Chrome Bell Painted sound unit</td>   <td>	4"	</td>   <td>	1615	</td>   <td>	1704	</td>   <td>	1681	</td></tr>
			<tr align="center" style="font-size: 12px;"><td><a href="prod_detail.php?mod=truk_sin&pn=1677" >1680</a></td>   <td>			13 1/2"	</td><td>Painted</td>   <td>	4"	</td>   <td>	1683	</td>   <td>	1704	</td>   <td>	1681	</td></tr>
		</table>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 500px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<p style="text-align: justify; font-size: 16px; margin-left:10px;">
						<br/>Single Truktone® air horns are ideal for many situations where a powerful blast is needed and a small space is available. Meant to equip vehicles in order to get immediate, maximum attention.
						<br/><br/>Deluxe, hand crafted air horn, single or dual variety; for power, volume and dependability, Grover Truktone® air horns. Deep, powerful, loud, solid blasts. Signature quality combined with true Grover tone and performance.
					</p>
					<table class="tableProd" width="100%" >
						<?php
							$title_1 = '<tr align="center" style="font-size: 12px; color: #3F5EAB;"> <td>	GROVER PN  	</td>      <td>	LENGTH  	</td>  <td>	FLARE SIZE	</td>  <td>	FINISH	</td></tr>';
							
							switch($prodNo){
								case "1671":
									echo $title_1.'	<tr align="center" style="font-size: 12px;"><td>1671</td>      <td>	15 1/2"	</td>    <td>	4"	</td> <td>	All Chrome	</td></tr>';
								break;
								case "1675":
									echo $title_1.'	<tr align="center" style="font-size: 12px;"><td>1675</td>      <td>	15 1/2"	</td>   <td>	4"	</td>  <td>	All Chrome	</td></tr>';
									echo '			<tr align="center" style="font-size: 12px;"><td>1678</td>      <td>	13 1/2"	</td>   <td>	4"	</td>  <td>	All Chrome	</td></tr>';
								break;
								case "1676":
									echo $title_1.'	<tr align="center" style="font-size: 12px;"><td>1676</td>      <td>	15 1/2"	</td>   <td>	4"	</td>  <td>Chrome Bell Painted sound unit</td> </tr>';
									echo '			<tr align="center" style="font-size: 12px;"><td>1679</td>      <td>	13 1/2"	</td>   <td>	4"	</td>  <td>Chrome Bell Painted sound unit</td></tr>';
								break;
								case "1677":
									echo $title_1.'	<tr align="center" style="font-size: 12px;"><td>1677</td>      <td>	15 1/2"	</td>   <td>	4"	</td>  <td>	Painted All Black	</td> </tr>';
									echo '			<tr align="center" style="font-size: 12px;"><td>1680</td>      <td>	13 1/2"	</td>   <td>	4"	</td>  <td>Painted All Black</td></tr>';
								break;
							}
						?>
					</table>
					<br/>
					<?php						
						switch($prodNo){
							case "1671":
								echo '
								<a href="prod_detail.php?mod=truk_sin&pn=1677" ><div class="bottonSendSin" >BLACK</div></a>
								<a href="prod_detail.php?mod=truk_sin&pn=1676" ><div class="bottonSendSin" >CHROME BLACK</div></a>								
								<a href="prod_detail.php?mod=truk_sin&pn=1675" ><div class="bottonSendSin" >CHROME 1675</div></a>
								';
							break;
							case "1675":
								echo '
								<a href="prod_detail.php?mod=truk_sin&pn=1677" ><div class="bottonSendSin" >BLACK</div></a>
								<a href="prod_detail.php?mod=truk_sin&pn=1676" ><div class="bottonSendSin" >CHROME BLACK</div></a>
								<a href="prod_detail.php?mod=truk_sin&pn=1671" ><div class="bottonSendSin" >CHROME 1671</div></a>
								';
							break;
							case "1676":
								echo '
								<a href="prod_detail.php?mod=truk_sin&pn=1677" ><div class="bottonSendSin" >BLACK</div></a>
								<a href="prod_detail.php?mod=truk_sin&pn=1675" ><div class="bottonSendSin" >CHROME 1675</div></a>
								<a href="prod_detail.php?mod=truk_sin&pn=1671" ><div class="bottonSendSin" >CHROME 1671</div></a>
								';
							break;
							case "1677":
								echo '
								<a href="prod_detail.php?mod=truk_sin&pn=1676" ><div class="bottonSendSin" >CHROME BLACK</div></a>
								<a href="prod_detail.php?mod=truk_sin&pn=1675" ><div class="bottonSendSin" >CHROME 1675</div></a>
								<a href="prod_detail.php?mod=truk_sin&pn=1671" ><div class="bottonSendSin" >CHROME 1671</div></a>
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
						case "1671":
						case "1675":
							echo '<img src="images/prod/truk/icon/authenticity_4.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						case "1676":
						case "1677":
							echo '<img src="images/prod/truk/icon/authenticity_6.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
						break;
						default:
							echo '<img src="images/prod/truk/icon/authenticity_4.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >';
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