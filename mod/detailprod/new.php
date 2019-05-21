<?php
$prodNo = $_GET["pn"];
switch($prodNo){
	case "1671":
	case "1688R":
		$showPa = "yes";
	break;
	default:
		$showPa = "no";
	break;
}

if( $showPa == "yes" ){	
	$titleNo = $prodNo;
	if( $prodNo == "1671" ){
		$titleNo = "Truktone&#174 Special 1671";
	}
	if( $prodNo == "1688R" ){
		$titleNo = "Air Horn Red 1688R";
	}
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12 titleProdDetail" >New From Grover</div>
<div class="col-sm-12 subTitleProdDetail" >Grover Part Number <?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "new";
					$cantidad = 0;
					$inicioEn = 0;
					
					switch($prodNo){
						case "1688R": 	$cantidad = 2;		$inicioEn = 1;		break;
						case "1671": 	$cantidad = 3;		$inicioEn = 10; 	break;
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
			<!--img src="images/icon/bo_compare.png" id="compProd" class="boProdDetail compProd" -->
			<!--img src="images/icon/bo_marks.png" class="boProdDetail marksAuth" -->
		</div>
	</div> 
	<div class="col-sm-7" id="techProd" style="border: 0px solid #000; overflow-x:auto; max-height: 550px;">
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>LENGTH END TO END</td><td>	FLARE SIZE	</td>   <td>FINISH</td></tr>
			<tr align="center" style="font-size: 12px;"><td>	1325 (w/valve)	</td>   <td>	4 1/2"	</td>   <td>	1 7/8"	</td>   <td>	CHROME	</td></tr>			
			<tr align="center" style="font-size: 12px;"><td>	1346 (w/valve)	</td>   <td>	4 1/2"	</td>   <td>	1 7/8"	</td>   <td>	CHROME	</td></tr>						
		</table>
		<br/>
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;"><td>GROVER PN</td><td>DESCRIPTION</td></tr>
			<tr align="center" style="font-size: 12px;"><td>	1330 (KIT INCLUDED)	</td>   <td>	(1) 1324 HORN & (1) 1311 POWER CARTRIDGE	</td></tr>
		</table>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 550px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<div class="col-sm-12">
						<p style="text-align: justify; font-size: 16px; margin-left:10px;">													
							<br/>Introducing a small and powerful air horns;  distinctive Grover quality, dynamic sound:
							<br/><br/><span class="titleBody">The 1671 Truktone® special and the  1688R.</span>
							<br/><br/>Both of these air horns are ideal where a heavy duty, powerful air horn is needed in a small space.  Sleek and powerful, built to perform, these air horns provide everything you have come to depend on in a Grover air horn, traditional quality and  powerful Grover sound and sleek, new look.
						</p><br/>
						<a href="prod_detail.php?mod=truk_sin&pn=1671" ><div class="bottonSendSin" >1671</div></a>
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