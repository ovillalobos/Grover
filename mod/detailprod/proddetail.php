<?php

$request = "";
$content = "";
$idProd  = strtolower($_POST["idModal"]);

switch( $idProd ){
	//*******************************************************************************************************//
	// >>>>>>> INDUSTRIAL [BEGIN]
	case "indu":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px;" >
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=indu&pn=7000a"><img class="productos" src="images/prod/menu/indu_7000a.png" ><br/><span style="font-size: 15px; font-weight: bold;">Industrial</span><br/>7000A</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=indu&pn=7000b"><img class="productos" src="images/prod/menu/indu_7000a.png" ><br/><span style="font-size: 15px; font-weight: bold;">Industrial</span><br/>7000B</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> STUTTERTONE [BEGIN]
	case "stut":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 500px;" >
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=stut_round"><img class="productos" src="images/prod/stut/icon/stut_round.png" ><br/><span style="font-size: 15px; font-weight: bold;">Stuttertone&#174;</span><br/>Round Flare<br/>1506,1510,1512,1519,1528</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=stut_recta"><img class="productos" src="images/prod/stut/icon/stut_recta.png" ><br/><span style="font-size: 15px; font-weight: bold;">Stuttertone&#174;</span><br/>Rectangular Flare<br/> 2040,2043,2075</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=stut_round_kit"><img class="productos" src="images/prod/stut/icon/stut_round_kit.png" ><br/><span style="font-size: 15px; font-weight: bold;">Stuttertone&#174;</span><br/>Round Flare With Kit<br/> 1501</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=stut_recta_kit"><img class="productos" src="images/prod/stut/icon/stut_recta_kit.png" ><br/><span style="font-size: 15px; font-weight: bold;">Stuttertone&#174;</span><br/>Rectangular Flare With Kit <br/>2041</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> TRUKTONE [BEGIN]
	case "truk":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px;" >
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_dua&pn=1600"><img class="productos" src="images/prod/truk/icon/truk_dub_1600.png" ><br/><span style="font-size: 15px; font-weight: bold;">Dual Truktone&#174;</span><br/>Air Horn<br/>1600</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_dua&pn=1601"><img class="productos" src="images/prod/truk/icon/truk_dub_1601.png" ><br/><span style="font-size: 15px; font-weight: bold;">Dual Truktone&#174;</span><br/>Air Horn<br/>1601</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_dua&pn=1609"><img class="productos" src="images/prod/truk/icon/truk_dub_1609.png" ><br/><span style="font-size: 15px; font-weight: bold;">Dual Truktone&#174;</span><br/>Air Horn<br/>1609</a></div>
											
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_dua&pn=1650"><img class="productos" src="images/prod/truk/icon/truk_dub_1600_kit.png" ><br/><span style="font-size: 15px; font-weight: bold;">Dual Truktone&#174; 1600 Kit</span><br/>Air Horn With Kit<br/>1650</a></div>											
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_dua&pn=1651"><img class="productos" src="images/prod/truk/icon/truk_dub_1601_kit.png" ><br/><span style="font-size: 15px; font-weight: bold;">Dual Truktone&#174; 1601 Kit</span><br/>Air Horn With Kit<br/>1618-1621-1651</a></div>											
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_dua&pn=1659"><img class="productos" src="images/prod/truk/icon/truk_dub_1609_kit.png" ><br/><span style="font-size: 15px; font-weight: bold;">Dual Truktone&#174; 1609 Kit</span><br/>Air Horn With Kit<br/>1659</a></div>
											
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_sin&pn=1671"><img class="productos" src="images/prod/truk/icon/truk_sin_1671.png" ><br/><span style="font-size: 15px; font-weight: bold;">Single Truktone&#174; Special</span><br/>Air Horn 1671</a></div>											
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_sin&pn=1675"><img class="productos" src="images/prod/truk/icon/truk_sin_1675.png" ><br/><span style="font-size: 15px; font-weight: bold;">Single Truktone&#174;</span><br/>Air Horn 1675 & 1678</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_sin&pn=1676"><img class="productos" src="images/prod/truk/icon/truk_sin_1676.png" ><br/><span style="font-size: 15px; font-weight: bold;">Single Truktone&#174;</span><br/>Air Horn 1676 & 1679</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=truk_sin&pn=1677"><img class="productos" src="images/prod/truk/icon/truk_sin_1677.png" ><br/><span style="font-size: 15px; font-weight: bold;">Single Truktone&#174;</span><br/>Air Horn 1677 & 1680</a></div>											
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> ORGANTONE [BEGIN]
	case "orga":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 600px;" >
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=orga_dua&pn=dualCon"><img class="productos" src="images/prod/orga/icon/orga_con.png" ><br/><span style="font-size: 15px; font-weight: bold;">Dual Connected Organtone&#174;</span><br/>Air Horns<br/>1030, 1048, 1056</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=orga_dua&pn=dualSep"><img class="productos" src="images/prod/orga/icon/orga_sep.png" ><br/><span style="font-size: 15px; font-weight: bold;">Dual Separated Organtone&#174;</span><br/>Air Horns<br/>1024/1027, 1042/1045, 1054/1055</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=orga_sin&pn=1024"><img class="productos" src="images/prod/orga/icon/orga_1022.png" ><br/><span style="font-size: 15px; font-weight: bold;">Single Organtone&#174;</span><br/>Air Horns<br/>1024, 1027, 1042, 1045, 1054, 1055</a></div>											
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=orga_sin&pn=1022p"><img class="productos" src="images/prod/orga/icon/orga_1022p.png" ><br/><span style="font-size: 15px; font-weight: bold;">Single Organtone&#174;</span><br/>Painted Air Horn<br/>1022</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> TROMBON [BEGIN]
	case "trom":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px;" >
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=trom&pn=1700"><img class="productos" src="images/prod/trom/icon/trom_1700.png" ><br/><span style="font-size: 15px; font-weight: bold;">Trombone</span><br/>Air Horn<br/>1700, 1748</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=trom&pn=1701"><img class="productos" src="images/prod/trom/icon/trom_1701.png" ><br/><span style="font-size: 15px; font-weight: bold;">Trombone</span><br/>Air Horn 1701</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=trom&pn=1702"><img class="productos" src="images/prod/trom/icon/trom_1702.png" ><br/><span style="font-size: 15px; font-weight: bold;">Trombone</span><br/>Air Horn 1702</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> RECTANGULAR [BEGIN]
	case "rect":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px;" >
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=trom&pn=1700"><img class="productos" src="images/prod/trom/icon/trom_1700.png" ><br/><span style="font-size: 15px; font-weight: bold;">Trombone</span><br/>Air Horn 1700</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=trom&pn=1701"><img class="productos" src="images/prod/trom/icon/trom_1701.png" ><br/><span style="font-size: 15px; font-weight: bold;">Trombone</span><br/>Air Horn 1701</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=trom&pn=1702"><img class="productos" src="images/prod/trom/icon/trom_1702.png" ><br/><span style="font-size: 15px; font-weight: bold;">Trombone</span><br/>Air Horn 1702</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> MIGHTY MIDGET [BEGIN]
	case "migh":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px;" >
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=mighty&pn=1325"><img class="productos" src="images/prod/migh/icon/migh_1325.png" ><br/><span style="font-size: 15px; font-weight: bold;">Mighty Midget</span><br/>Air Horn <br/>1325, 1346</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=mighty&pn=1330"><img class="productos" src="images/prod/migh/icon/migh_1330.png" ><br/><span style="font-size: 15px; font-weight: bold;">Mighty Midget</span><br/>Air Horn With Kit<br/>1330</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> NEW AIR HORNS [BEGIN]
	case "new":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px;" >
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=new&pn=1671"><img class="productos" src="images/prod/new/icon/new_oldsmall.png" ><br/><span style="font-size: 15px; font-weight: bold;">Truktone&#174 Special</span><br/>New Air Horn 1671</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=new&pn=1688R"><img class="productos" src="images/prod/new/icon/new_red.png" ><br/><span style="font-size: 15px; font-weight: bold;">Grover Red</span><br/>New Air Horn 1688R</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> TRAIN [BEGIN]
	case "trai":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px; text-align: center;" >
											<div class="col-sm-12" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=train_horn"><img class="productos" src="images/prod/train/icon/train_horn.png" ><br/><span style="font-size: 15px; font-weight: bold;">Train</span><br/>Air Horn</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	//*******************************************************************************************************//
	// >>>>>>> VALVES [BEGIN]
	case "valv":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px; text-align: center;" >
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" >
												<a href="prod_detail.php?mod=part_elec_valves">
													<img class="productos" src="images/prod/parts/valves/icon/valve_electric.png" ><br/>
													<span style="font-size: 15px; font-weight: bold;">Electric</span><br/>
													Valves
												</a>
											</div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" >
												<a href="prod_detail.php?mod=part_man_brass">
													<img class="productos" src="images/prod/parts/valves/icon/valve_man_brass.png" ><br/>
													<span style="font-size: 15px; font-weight: bold;">Manual Brass</span><br/>
													Valves
												</a>
											</div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" >
												<a href="prod_detail.php?mod=part_man_nylon">
													<img class="productos" src="images/prod/parts/valves/icon/valve_man_nylon.png" ><br/>
													<span style="font-size: 15px; font-weight: bold;">Manual Nylon</span><br/>
													Valves
												</a>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	// >>>>>>> SHIELDS [BEGIN]
	case "shie":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px; text-align: center;" >
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" >
												<a href="prod_detail.php?mod=part_shields&pn=1652">
													<img class="productos" src="images/prod/parts/shields/icon/shield_1652.png" ><br/>
													<span style="font-size: 15px; font-weight: bold;">Shield</span><br/>
													Part Number 1652
												</a>
											</div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" >
												<a href="prod_detail.php?mod=part_shields&pn=1654">
													<img class="productos" src="images/prod/parts/shields/icon/shield_1654.png" ><br/>
													<span style="font-size: 15px; font-weight: bold;">Shield</span><br/>
													Part Number 1654
												</a>
											</div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" >
												<a href="prod_detail.php?mod=part_shields&pn=2010">
													<img class="productos" src="images/prod/parts/shields/icon/shield_2010.png" ><br/>
													<span style="font-size: 15px; font-weight: bold;">Shield</span><br/>
													Part Number 2010
												</a>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	case "pedest":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px; text-align: center;" >
											<div class="col-sm-12" style="text-align: center; border:0px solid #000;" >
												<a href="prod_detail.php?mod=part_pedestal">
													<img class="productos" src="images/prod/parts/pedes/icon/pedestal.png" ><br/>
													<span style="font-size: 15px; font-weight: bold;">Pedestals</span><br/>
												</a>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	case "repkit":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<div class="col-sm-12" style="max-width: 800px; text-align: center;" >
											<div class="col-sm-12" style="text-align: center; border:0px solid #000;" >
												<a href="prod_detail.php?mod=part_repakit">
													<img class="productos" src="images/prod/parts/kitrep/icon/repair_kit.png" ><br/>
													<span style="font-size: 15px; font-weight: bold;">Repair Kits</span><br/>
												</a>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	case "inst":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center" >
										<div class="col-sm-12" style="max-width: 600px;" >																						
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1107"><img class="productos" src="images/prod/parts/instal/icon/1107.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1107</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1218"><img class="productos" src="images/prod/parts/instal/icon/1218.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1218</a></div>
											<!--div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1290"><img class="productos" src="images/prod/parts/instal/icon/1290.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1290</a></div-->
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1291"><img class="productos" src="images/prod/parts/instal/icon/1291.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1291</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1730"><img class="productos" src="images/prod/parts/instal/icon/1730.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1730</a></div>
											<div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1734"><img class="productos" src="images/prod/parts/instal/icon/1734.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1734</a></div>
											<!--div class="col-sm-4" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1501"><img class="productos" src="images/prod/parts/instal/icon/1501.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1501</a></div-->
											<!--div class="col-sm-3" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1018"><img class="productos" src="images/prod/parts/instal/icon/1018.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1018</a></div-->
											<!--div class="col-sm-3" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1650"><img class="productos" src="images/prod/parts/instal/icon/1650.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1650</a></div-->
											<!--div class="col-sm-3" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=1651"><img class="productos" src="images/prod/parts/instal/icon/1651.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>1651</a></div-->
											<!--div class="col-sm-3" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_insta&pn=2041"><img class="productos" src="images/prod/parts/instal/icon/2041.png" ><br/><span style="font-size: 15px; font-weight: bold;">Installation Kit</span><br/>Grover PN<br/>2041</a></div-->
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	case "comp":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center" >
										<div class="col-sm-12" style="max-width: 600px;" >																						
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_compre&pn=1167"><img class="productos" src="images/prod/parts/comp/icon/1167.png" ><br/><span style="font-size: 15px; font-weight: bold;">Compressors</span><br/>Grover PN<br/>1167, 1174, 1556</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_compre&pn=1218"><img class="productos" src="images/prod/parts/comp/icon/1218.png" ><br/><span style="font-size: 15px; font-weight: bold;">Compressors</span><br/>Grover PN<br/>1218</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	case "tank":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center" >
										<div class="col-sm-12" style="max-width: 600px;" >																						
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_tank&pn=1143"><img class="productos" src="images/prod/parts/tank/icon/1143.png" ><br/><span style="font-size: 15px; font-weight: bold;">Tanks</span><br/>Grover PN<br/>1143</a></div>
											<div class="col-sm-6" style="text-align: center; border:0px solid #000;" ><a href="prod_detail.php?mod=part_tank&pn=1176"><img class="productos" src="images/prod/parts/tank/icon/1176.png" ><br/><span style="font-size: 15px; font-weight: bold;">Tanks</span><br/>Grover PN<br/>1176, 1189</a></div>
										</div>
									</td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	//*******************************************************************************************************//
	// >>>>>>> PDF [BEGIN]
	case "pdfindu":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center">
										<img class="docPDF" src="images/prod/indu/pdf_icon.png" >
									</td>
								</tr>
							</table>
						</td></tr>
						<tr><td align="center" ><a href="images/prod/indu/catalog.pdf" target="_Blanck" ><img class="boDownload" src="images/icon/bo_download.png" ></a></td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	//*******************************************************************************************************//
	// >>>>>>> BACKUP [BEGIN]
	case "back":	
		$content = '<table border="0" align="center" >
						<tr><td align="center" ><p><span class="titleProd" >Signal Tone Industrial Air Horns</span></p></td></tr>
						<tr><td align="center" >
							<table align="center" >
								<tr>
									<td align="center"><a href="prod_detail.php"><img class="productos" src="images/prod/indu/menu_1.png" ></a></td>
									<td align="center"><a href="prod_detail.php"><img class="productos" src="images/prod/indu/menu_1.png" ></a></td>
								</tr>
							</table>
						</td></tr>
					</table><br/><br/>';
		$request = "OK";
	break;
	//*******************************************************************************************************//
	default:
		$content = "";
		$request = "ERROR";
	break;
}

echo $request."|".$content;
?>