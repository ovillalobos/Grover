<?php
$prodNo = $_GET["pn"];
$showPa = "yes";

if( $showPa == "yes" ){
	$titleNo = '2000, 2001';
?>
<input id="idProd" value="pdfindu" type="hidden" />
<div class="col-sm-12 titleProdDetail" >Rectangular Air Horns</div>
<div class="col-sm-12 subTitleProdDetail" >Grover Part Numbers <?php echo $titleNo;?></div>
<div class="col-sm-12" style="border: 0px solid #000;" >
	<div class="col-sm-5" id="pictProd" style="border: 0px solid #000;">
		<div id="gallery" class="eagle-gallery gallery500" style="margin: 0px auto;">
			<div class="owl-carousel">
				<?php
					$nomFile  = "rect";
					$cantidad = 5;
					$inicioEn = 1;

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
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;">
				<td>	GROVER PN	</td>   
				<td>	LENGTH	</td>   
				<td>	FLARE </td>
				<td>	REPLACEMENT BELL </td>
				<td>	REPLACEMENT SOUND UNIT	</td>
				<td>	SOUND UNIT REPAIR KIT	</td> 
				<td>	PEDESTAL	</td> 
				<td>	OPTIONAL WEATHER SHIELD	</td>
			</tr>
			<tr align="center" class="contentTable"><td>	2000	</td>   <td>	25 1/4"	</td>   <td>	4 1/4" X 6 3/4"	</td>   <td>	2005	</td>   <td>	1703	</td>   <td>	1681	</td>   <td>	1720	</td>     <td><a href="prod_detail.php?mod=part_shields&pn=2010">	2010	</a></td></tr>
			<tr align="center" class="contentTable"><td>	2001	</td>   <td>	21 7/8"	</td>   <td>	4 1/4" X 6 3/4"	</td>   <td>	2006	</td>   <td>	1703	</td>   <td>	1681	</td>   <td>	1720	</td>     <td><a href="prod_detail.php?mod=part_shields&pn=2010">	2010	</a></td></tr>			
		</table>
		<br/><p style="text-align: justify; font-size: 16px; margin-left:10px; color: #445EAB;">
			RECTANGULAR AIR HORNS WITH INSTALLATION KIT
		</p><br/>
		<table class="tableProd" width="100%" >
			<tr align="center" style="font-size: 12px; color: #3F5EAB;">
				<td>	GROVER PN	</td>   
				<td>	AIR HORN INCLUDED	</td>   
				<td>	KIT COMPONENTS </td>
			</tr>
			<tr align="center" class="contentTable"><td>	1230	</td>   <td>	1-2000<br/>1-2001	</td>   <td align="left" >12v air compressor model <a href="#">1167</a>, 12v electric valve model <a href="prod_detail.php?mod=part_elec_valves">1136</a>, air tank, horn button, wire, tubing and fittings </td></tr>
		</table>
		<img src="images/icon/bo_back.png" style="margin-left: 10px;" class="boProdDetail backInfo" >		
	</div>
	<div class="col-sm-7" id="descProd" style="border: 0px solid #000; overflow-y:auto; max-height: 550px;">
		<table border="0" width="100%" >
			<tr>
				<td>
					<div class="col-sm-12">
						<p style="text-align: justify; font-size: 16px; margin-left:10px;">
							<br/>Grover rectangular air horns are sleek and powerful. They are designed to equip vehicles with maximum volume for attention.  Top quality construction includes chromed spun brass bells, durable diaphragm and precision cast body and base.
							<br/><br/>For power, volume and distinction, Grover rectangular air horns get the job done with excellence. Deep, powerful, loud, solid blasts, signature quality combined with true Grover tone and performance.
						</p>					
						<p style="text-align: justify; font-size: 16px; margin-left:10px; color: #445EAB;">
							RECTANGULAR FLARE TRUCK HORNS
						</p>
						<table class="tableProd" width="100%" >
							<tr align="center" class="titleTable" ><td>GROVER PN</td><td>LENGTH</td><td>FLARE SIZE</td></tr>
							<tr align="center" class="contentTable" ><td>2000</td><td>25 1/4”</td><td>4 1/4" X 6 3/4"</td></tr>
							<tr align="center" class="contentTable" ><td>2001</td><td>21 7/8”</td><td>4 1/4" X 6 3/4"</td></tr>							
						</table>
					</div>
				</td>
			</tr>			
		</table>
		<?php include("include/slogan.php"); ?>
	</div>
	<div class="col-sm-7" id="marksAuth" style="border: 0px solid #000; overflow-y:auto; max-height: 550px;">
		<table border="0" width="100%" >
			<tr>
				<td align="center" >					
					<img src="images/prod/rect/icon/authenticity.png" width="100%" style="margin: 10px auto; border: 0px solid #000;" >
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