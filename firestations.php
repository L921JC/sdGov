<?php
if (isset($_GET["zip"])){
	if (is_numeric($_GET["zip"])){
		$allStations = Array
		(
				(0) => Array
					(	
						'number' =>  1,
						'address'=>	"1222 First Avenue",
						'zip'	 =>	92101,
						'link'	 =>"/fire/about/firestations/sta1"
					),

				(1) => Array
					(	
						'number' =>  3,
						'address'=>	"725 W.Kalmia Street",
						'zip'	 =>	92101,
						'link'	 =>"/fire/about/firestations/sta3"
					),

				(2) => Array
					(	
						'number' =>  4,
						'address'=>	"404 Eighth Avenue",
						'zip'	=>	92101,
						'link'   =>"/fire/about/firestations/sta4"
					),

				(3) => Array
					(	
						'number' =>  5,
						'address'=>	"3902 Ninth Avenue",
						'zip'	=>	92103,
						'link'   =>"/fire/about/firestations/sta5"
					),

				(4) => Array
					(	
						'number' =>  6,
						'address'=>	"693 Twining Avenue",
						'zip'	=>	92154,
						'link'   =>"/fire/about/firestations/sta6"
					),

				(5) => Array
					(	
						'number' =>  7,
						'address'=>	"944 Cesar E Chavez Parkway",
						'zip'	=>	92113,
						'link'   =>"/fire/about/firestations/sta7"
					),

				(6) => Array
					(	
						'number' =>  8,
						'address'=>	"3974 Goldfinch Street",
						'zip'	=>	92103,
						'link'   =>"/fire/about/firestations/sta8"
					),

				(7) => Array
					(	
						'number' =>  9,
						'address'=>	"7870 Ardath Lane",
						'zip'	=>	92037,
						'link'   =>"/fire/about/firestations/sta9"
					),

				(8) => Array
					(	
						'number' => 10,
						'address'=>	"4605 62nd Street",	
						'zip'	 =>92115, 
						'link'   =>"/fire/about/firestations/sta10"
					),

				(9) => Array
					(	
						'number' => 11,
						'address'=>	"945 25th Street",	
						'zip'	 =>92102,
						'link'   =>"/fire/about/firestations/sta11"
					),

				(10) => Array
					(	
						'number' => 12,
						'address'=>	"4964 Imperial Avenue",	
						'zip'	 =>92113, 
						'link'   =>"/fire/about/firestations/sta12"
					),

				(11) => Array
					(	
						'number' => 13,
						'address'=>	"809 Nautilus Street",	
						'zip'	 =>92037, 
						'link'   =>"/fire/about/firestations/sta13"
					),

				(12) => Array
					(	
						'number' => 14,
						'address'=>	"4011 32nd Street",	
						'zip'	 =>92104, 
						'link'   =>"/fire/about/firestations/sta14"
					),

				(13) => Array
					(	
						'number' => 15,
						'address'=>	"4711 Voltaire Street",	
						'zip'	 =>92107, 
						'link'   =>"/fire/about/firestations/sta15"
					),

				(14) => Array
					(	
						'number' => 16,
						'address'=>	"2110 Via Casa Alta",	
						'zip'	 =>92037, 
						'link'   =>"/fire/about/firestations/sta16"
					),

				(15) => Array
					(	
						'number' => 17,
						'address'=>	"4206 Chamoune Avenue",	
						'zip'	 =>92115, 
						'link'   =>"/fire/about/firestations/sta17"
					),

				(16) => Array
					(	
						'number' => 18,
						'address'=>	"4676 Felton Street",	
						'zip'	 =>92116, 
						'link'   =>"/fire/about/firestations/sta18"
					),

				(17) => Array
					(	
						'number' => 19,
						'address'=>	"3434 Ocean View Blvd.",	
						'zip'	 =>92113, 
						'link'   =>"/fire/about/firestations/sta19"
					),

				(18) => Array
					(	
						'number' => 20,
						'address'=>	"3305 Kemper Street",	
						'zip'	 =>92110, 
						'link'   =>"/fire/about/firestations/sta20"
					),

				(19) => Array
					(	
						'number' => 21,
						'address'=>	"750 Grand Avenue",	
						'zip'	 =>92109, 
						'link'   =>"/fire/about/firestations/sta21"
					),

				(20) => Array
					(	
						'number' => 22,
						'address'=>	"1055 Catalina Blvd.",	
						'zip'	 =>92106, 
						'link'   =>"/fire/about/firestations/sta22"
					),

				(21) => Array
					(	
						'number' => 23,
						'address'=>	"2190 Comstock Street",	
						'zip'	 =>92111, 
						'link'   =>"/fire/about/firestations/sta23"
					),

				(22) => Array
					(	
						'number' => 24,
						'address'=>	"13077 Hartfield Avenue",	
						'zip'	 =>92130,
						'link'   =>"/fire/about/firestations/sta24"
					),

				(23) => Array
					(	
						'number' => 25,
						'address'=>	"1971 Chicago Street",	
						'zip'	 =>92110,
						'link'   =>"/fire/about/firestations/sta25"
					),

				(24) => Array
					(	
						'number' => 26,
						'address'=>	"2850 54th Street",	
						'zip'	 =>92105, 
						'link'   =>"/fire/about/firestations/sta26"
					),

				(25) => Array
					(	
						'number' => 27,
						'address'=>	"5064 Clairemont Drive",	
						'zip'	 =>92117, 
						'link'   =>"/fire/about/firestations/sta27"
					),

				(26) => Array
					(	
						'number' => 28,
						'address'=>	"3880 Kearny Villa Road",	
						'zip'	 =>92123, 
						'link'   =>"/fire/about/firestations/sta28"
					),

				(27) => Array
					(	
						'number' => 29,
						'address'=>	"179 W. San Ysidro Blvd.",	
						'zip'	 =>92173, 
						'link'   =>"/fire/about/firestations/sta29"
					),

				(28) => Array
					(	
						'number' => 30,
						'address'=>	"2265 Coronado Avenue",	
						'zip'	 =>92154, 
						'link'   =>"/fire/about/firestations/sta30",
					),

				(29) => Array
					(	
						'number' => 31,
						'address'=>	"6002 Camino Rico",	
						'zip'	 =>92120, 
						'link'   =>"/fire/about/firestations/sta31"
					),

				(30) => Array
					(	
						'number' => 32,
						'address'=>	"484 Briarwood Road",	
						'zip'	 =>92114, 
						'link'   =>"/fire/about/firestations/sta32"
					),

				(31) => Array
					(	
						'number' => 33,
						'address'=>	"16966 Bernardo Center Drive",	
						'zip'	 =>92128, 
						'link'   =>"/fire/about/firestations/sta33"
					),

				(32) => Array
					(	
						'number' => 34,
						'address'=>	"6565 Cowles Mtn. Blvd.",	
						'zip'	 =>92119, 
						'link'   =>"/fire/about/firestations/sta34"
					),

				(33) => Array
					(	
						'number' => 35,
						'address'=>	"4285 Eastgate Mall",	
						'zip'	 =>92122, 
						'link'   =>"/fire/about/firestations/sta35"
					),

				(34) => Array
					(	
						'number' => 36,
						'address'=>	"5855 Chateau Drive",	
						'zip'	 =>92117, 
						'link'   =>"/fire/about/firestations/sta36"
					),

				(35) => Array
					(	
						'number' => 37,
						'address'=>	"10750 Scripps Lake Drive",	
						'zip'	 =>92131, 
						'link'   =>"/fire/about/firestations/sta37"
					),

				(36) => Array
					(	
						'number' => 38,
						'address'=>	"8441 New Salem Street",	
						'zip'	 =>92126, 
						'link'   =>"/fire/about/firestations/sta38"
					),

				(37) => Array
					(	
						'number' => 39,
						'address'=>	"4949  La Cuenta Drive",	
						'zip'	 =>92124, 
						'link'   =>"/fire/about/firestations/sta39"
					),

				(38) => Array
					(	
						'number' => 40,
						'address'=>	"13393 Salmon River Road",	
						'zip'	 =>92129, 
						'link'   =>"/fire/about/firestations/sta40"
					),

				(39) => Array
					(	
						'number' => 41,
						'address'=>	"4914 Carroll Canyon Road",	
						'zip'	 =>92121, 
						'link'   =>"/fire/about/firestations/sta41"
					),

				(40) => Array
					(	
						'number' => 42,
						'address'=>	"12110 World Trade Drive",	
						'zip'	 =>92128,
						'link'   =>"/fire/about/firestations/sta42"
					),

				(41) => Array
					(	
						'number' => 43,
						'address'=>	"1590 La Media",	
						'zip'	 =>92154, 
						'link'   =>"/fire/about/firestations/sta43"
					),

				(42) => Array
					(	
						'number' =>"Airport",
						'address'=>"3698 Pacific Highway",	
						'zip'	 =>92101, 
						'link'   =>"/fire/about/firestations/airport"
					),

				(43) => Array
					(	
						'number' => 44,
						'address'=>"10011 Black Mountain Road",	
						'zip'	 =>92126, 
						'link'   =>"/fire/about/firestations/sta44"
					),

				(44) => Array
					(	
						'number' => 45,
						'address'=>"9366 Friars Rd, San Diego",	
						'zip'	 =>92108, 
						'link'   =>"/fire/about/firestations/sta45"
					),

				(45) => Array
					(	
						'number' => 46,
						'address'=>"14556 Lazanja Drive",	
						'zip'	 =>92127, 
						'link'   =>"/fire/about/firestations/sta46"
					),

				(46) => Array
					(	
						'number' => 47,
						'address'=>"6401 Edgewood Bend Court",	
						'zip'	 =>92130, 
						'link'   =>"/fire/about/firestations/sta47"
					),

				(47) => Array
					(	
						'number' => 3,
						'address'=>"725 W.Kalmia Street",
						'zip'	 =>	92103,
						'link'   =>"/fire/about/firestations/sta3"
					),

				(48) => Array
					(	
						'number' => 12,
						'address'=>"4964 Imperial Avenue",	
						'zip'	 =>92102, 
						'link'   =>"/fire/about/firestations/sta12"
					),

				(49) => Array
					(	
						'number' => 19,
						'address'=>"3434 Ocean View Blvd.",	
						'zip'	 =>92102, 
						'link'   =>"/fire/about/firestations/sta19"
					),

				(50) => Array
					(	
						'number' => 5,
						'address'=>"3902 Ninth Avenue",
						'zip'	 =>	92104,
						'link'   =>"/fire/about/firestations/sta5"
					),

				(51) => Array
					(	
						'number' => 17,
						'address'=>"4206 Chamoune Avenue",	
						'zip'	 =>92105, 
						'link'   =>"/fire/about/firestations/sta17"
					),

				(52) => Array
					(	
						'number' => 15,
						'address'=>"4711 Voltaire Street",	
						'zip'	 =>92106, 
						'link'   =>"/fire/about/firestations/sta15"
					),

				(53) => Array
					(	
						'number' => 20,
						'address'=>"3305 Kemper Street",	
						'zip'	 =>92106, 
						'link'   =>"/fire/about/firestations/sta20"
					),

				(54) => Array
					(	
						'number' => 22,
						'address'=>"1055 Catalina Blvd.",	
						'zip'	 =>92107, 
						'link'   =>"/fire/about/firestations/sta22"
					),

				(55) => Array
					(	
						'number' => 5,
						'address'=>"3902 Ninth Avenue",
						'zip'	 =>	92108,
						'link'   =>"/fire/about/firestations/sta5"
					),

				(56) => Array
					(	
						'number' => 8,
						'address'=>"3974 Goldfinch Street",
						'zip'	=>	92110,
						'link'   =>"/fire/about/firestations/sta8"
					),

				(57) => Array
					(	
						'number' => 28,
						'address'=>"3880 Kearny Villa Road",	
						'zip'	 =>92111, 
						'link'   =>"/fire/about/firestations/sta28"
					),

				(58) => Array
					(	
						'number' => 36,
						'address'=>"5855 Chateau Drive",	
						'zip'	 =>92111, 
						'link'   =>"/fire/about/firestations/sta36"
					),

				(59) => Array
					(	
						'number' => 12,
						'address'=>"4964 Imperial Avenue",	
						'zip'	 =>92114, 
						'link'   =>"/fire/about/firestations/sta12"
					),

				(60) => Array
					(	
						'number' => 26,
						'address'=>"2850 54th Street",	
						'zip'	 =>92115, 
						'link'   =>"/fire/about/firestations/sta26"		
					),

				(61) => Array
					(	
						'number' => 45,
						'address'=>"SW Corner Qualcomm Stadium",	
						'zip'	 =>92116, 
						'link'   =>"/fire/about/firestations/sta45"		
					),

				(62) => Array
					(	
						'number' => 25,
						'address'=>"1971 Chicago Street",	
						'zip'	 =>92117, 
						'link'   =>"/fire/about/firestations/sta25"		
					),

				(63) => Array
					(	
						'number' => 35,
						'address'=>"4285 Eastgate Mall"  ,	
						'zip'	 =>92121, 
						'link'   =>"/fire/about/firestations/sta35"
					),

				(64) => Array
					(	
						'number' => 27,
						'address'=>"5064 Clairemont Drive" ,	
						'zip'	 =>92122, 
						'link'   =>"/fire/about/firestations/sta27"
					),

				(65) => Array
					(	
						'number' => 34,
						'address'=>"6565 Cowles Mtn. Blvd.",	
						'zip'	 =>92124, 
						'link'   =>"/fire/about/firestations/sta34"
					),

				(66) => Array
					(	
						'number' => 33,
						'address'=>"16966 Bernardo Center Drive",	
						'zip'	 =>92127, 
						'link'   =>"/fire/about/firestations/sta33"
					),

				(67) => Array
					(	
						'number' => 42,
						'address'=>"12110 World Trade Drive",	
						'zip'	 =>92129, 
						'link'   =>"/fire/about/firestations/sta42"
					),

				(68) => Array
					(	
						'number' => 44,
						'address'=>"10011 Black Mountain Road",	
						'zip'	 =>92131, 
						'link'   =>"/fire/about/firestations/sta44"
					),

				(69) => Array
					(	
						'number' => 19,
						'address'=>"3434 Ocean View Blvd.",	
						'zip'	 =>92136, 
						'link'   =>"/fire/about/firestations/sta19"
					),

				(70) => Array
					(	
						'number' => 32,
						'address'=>"484 Briarwood Road",	
						'zip'	 =>92139, 
						'link'   =>"/fire/about/firestations/sta32"
					),

				(71) => Array
					(	
						'number' => 20,
						'address'=>"3305 Kemper Street",	
						'zip'	 =>92140, 
						'link'   =>"/fire/about/firestations/sta20"
					),

				(72) => Array
					(	
						'number' => 33,
						'address'=>"16966 Bernardo Center Drive",	
						'zip'	 =>92025, 
						'link'   =>"/fire/about/firestations/sta33"
					),

				(73) => Array
					(	
						'number' => 10,
						'address'=>"4605 62nd Street",	
						'zip'	 =>92182, 
						'link'   =>"/fire/about/firestations/sta10",
					),

				(74) => Array
					(	
						'number' => 35,
						'address'=>"4285 Eastgate Mall",	
						'zip'	 =>92093, 
						'link'   =>"/fire/about/firestations/sta35"
					),

				(75) => Array
					(	
						'number' => 35,
						'address'=>"4285 Eastgate Mall",	
						'zip'	 =>92161, 
						'link'   =>"/fire/about/firestations/sta35"
					),

				(76) => Array
					(	
						'number' => 51,
						'address'=>"7180 Skyline Drive",	
						'zip'	 =>92114, 
						'link'   =>"/fire/about/firestations/sta51"
					)
		);

		$resultsCount = 0;
		$ans = Array();

		foreach($allStations as $key => $val) {
		 	if($_GET["zip"] == $val['zip']) {
		 		$resultsCount++;
		 		$ans[] = $val;
		 	}
		}

		if ($resultsCount == 0) {
			echo "<p>No Firestations found for zipcode " .$_GET["zip"]. ". Please enter a zip code within the City of San Diego.</p>\n";
		} else {
			echo "<p>Firestation(s) for zip code " .$_GET["zip"]. ":</p>\n";
			echo "<ul>\n";

			for($j=0; $j<$resultsCount ;$j++) {
				if(is_numeric($ans[$j]['number'])){
					echo "<li> <a href=\"".	$ans[$j]['link'] . "\">" . "Station " . $ans[$j]['number'] ."</a> - " . $ans[$j]['address'] . "</li>\n";	
				} else {
					echo "<li> <a href=\"".	$ans[$j]['link'] . "\">" . $ans[$j]['number'] ."</a> - " . $ans[$j]['address'] . "</li>\n";	
				}			
			}
			echo "</ul>\n";
		}
		echo "<a href=\"/fire/about/firestations\">View all Fire Stations</a>\n";
	} else {
	echo "<p>No Firestations found for zipcode " .$_GET["zip"]. ". Please enter a zip code within the City of San Diego.</p>\n";
	echo "<a href=\"/fire/about/firestations\">View all Fire Stations</a>\n";
	}
} else { ?> 
	<table border="0" cellpadding="0" cellspacing="0" id="stations">
		<tbody>
			<tr>
				<th>Station</th>
				<th>Address</th>
				<th>Apparatus</th>
			</tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta1">Station 1</a></td>
				<td class="addr"><a href="http://g.co/maps/q83h3">1222 First Avenue, 92101</a></td>
				<!--<td><a href="../apparatus/batchiefveh.shtml">Battalion</a>&nbsp;1, <a href="../apparatus/fireengine.shtml">Engine</a>&nbsp;1, Engine 201, <a href="../apparatus/aerialtruck.shtml">Trucks</a>&nbsp;1, <a href="../apparatus/lightair.shtml">Light &amp; Air</a>&nbsp;1, <a href="../apparatus/chem1rig.shtml">Chem</a>&nbsp;1, <a href="../apparatus/medicrescuerig.shtml">Medic</a>&nbsp;1, <a href="../apparatus/mobilecanteen.shtml">Mobile Canteen</a>&nbsp;1, <a href="../apparatus/edt.shtml">X-Ray</a>&nbsp;1, </td>-->
				<td>Battalion 1, Engine 1 and 201, Truck 1, Light &amp; Air 1, Chem Rig 1, Medic 1, Mobile Canteen 1, X-Ray 1</td>
			</tr>
			<tr>
				<td class="station">Station 2</td>
				<td colspan="2">Station 2, at 1171 10th Avenue, was closed in 1971 and combined with Station 1</td>
			</tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta3">Station 3</a></td>
				<td class="addr"><a href="http://g.co/maps/ejsvn">725 West Kalmia Street, 92101</a></td>
				<td>Engine 3</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 3</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta4">Station 4</a></td>
				<td class="addr"><a href="http://g.co/maps/ph9wt">404 8th Avenue, 92101</a></td>
				<td>Engine 4, USAR 4</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 4, <a href="../apparatus/heavyrescue4.shtml">Heavy Rescue</a> 4</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta5">Station 5</a></td>
				<td class="addr"><a href="http://g.co/maps/kf2t6">3902 9th Avenue, 92103</a></td>
				<td>Battalion 2, Engine 5</td>
				<!--<td><a href="../apparatus/batchiefveh.shtml">Battalion</a> 2, <a href="../apparatus/fireengine.shtml">Engine</a> 5</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta6">Station 6</a></td>
				<td class="addr"><a href="http://g.co/maps/t76xj">693 Twining Avenue, 92154</a></td>
				<td>Engine 6</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 6</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta7">Station 7</a></td>
				<td class="addr"><a href="http://g.co/maps/dk5pc">944 Cesar E. Chavez Parkway, 92113</a></td>
				<td>Engine 7</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 7</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta8">Station 8</a></td>
				<td class="addr"><a href="http://g.co/maps/55eh6">3974 Goldfinch Street, 92103</a></td>
				<td>Engine 8</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 8</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta9">Station 9</a></td>
				<td class="addr"><a href="http://g.co/maps/d56ng">7870 Ardath Lane, 92037</a></td>
				<td>Engine 9, Paramedic 9</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 9, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 9</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta10">Station 10</a></td>
				<td class="addr"><a href="http://g.co/maps/qjv67">4605 62nd Street, 92115</a></td>
				<td>Engine 10, Truck 10, Brush 10</td>
				<!--<td><a href="../apparatus/batchiefveh.shtml">Battalion</a> 4, <a href="../apparatus/fireengine.shtml">Engine</a> 10, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 10, <a href="../apparatus/brushrig.shtml">Brush</a> 10</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta11">Station 11</a></td>
				<td class="addr"><a href="http://g.co/maps/fs3hs">945 25th Street, 92102</a></td>
				<td>Engine 11, Truck 11, Paramedic 11</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 11, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 11 <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 11</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta12">Station 12</a></td>
				<td class="addr"><a href="http://g.co/maps/ex4fm">4964 Imperial Avenue, 92113</a></td>
				<td>Battalion 6, Engine 12, Truck 12, Paramedic 12</td>
				<!--<td><a href="../apparatus/batchiefveh.shtml">Battalion</a> 6, <a href="../apparatus/fireengine.shtml">Engine</a> 12, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 12, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 12</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta13">Station 13</a></td>
				<td class="addr"><a href="http://g.co/maps/rrdec">809 Nautilus Street, 92037</a></td>
				<td>Engine 13</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 13</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta14">Station 14</a></td>
				<td class="addr"><a href="http://g.co/maps/u4nkq">4011 32nd Street, 92104</a></td>
				<td>Engine 14, Truck 14, Brush 14</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 14, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 14, <a href="../apparatus/brushrig.shtml">Brush</a> 14</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta15">Station 15</a></td>
				<td class="addr"><a href="http://g.co/maps/5653g">4711 Voltaire Street, 92107</a></td>
				<td>Engine 15</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 15</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta16">Station 16</a></td>
				<td class="addr"><a href="http://g.co/maps/ge6ru">2110 Via Casa Alta, 92037</a></td>
				<td>Engine 16</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 16</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta17">Station 17</a></td>
				<td class="addr"><a href="http://g.co/maps/876n6">4206 Chamoune Avenue 92115</a></td>
				<td>Engine 17</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 17</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta18">Station 18</a></td>
				<td class="addr"><a href="http://g.co/maps/wp6t3">4676 Felton Street, 92116</a></td>
				<td>Engine 18, Paramedic 18, OES 1</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 18, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 18</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta19">Station 19</a></td>
				<td class="addr"><a href="http://g.co/maps/gyvz3">3434 Ocean View Blvd., 92113</a></td>
				<td>Engine 19, Water Tender 19</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 19</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta20">Station 20</a></td>
				<td class="addr"><a href="http://g.co/maps/4ttfw">3305 Kemper Street, 92110</a></td>
				<td>Engine 20, Truck 20, Paramedic 20</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 20, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 20, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 20</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta21">Station 21</a></td>
				<td class="addr"><a href="http://g.co/maps/6rrmp">750 Grand Avenue, 92109</a></td>
				<td>Engine 21, Truck 21, Paramedic 21</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 21, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 21, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 21</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta22">Station 22</a></td>
				<td class="addr"><a href="http://g.co/maps/wbywn">1055 Catalina Blvd., 92107</a></td>
				<td>Engine 22</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 22</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta23">Station 23</a></td>
				<td class="addr"><a href="http://g.co/maps/4g3cg">2190 Comstock Street, 92111</a></td>
				<td>Engine 23</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 23</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta24">Station 24</a></td>
				<td class="addr"><a href="http://g.co/maps/s9taj">13077 Hartfield Avenue, 92130-1505</a></td>
				<td>Engine 24, Brush 24, Paramedic 24</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 24, <a href="../apparatus/brushrig.shtml">Brush</a> 24, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 24</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta25">Station 25</a></td>
				<td class="addr"><a href="http://g.co/maps/fk7xf">1972 Chicago Street, 92110</a></td>
				<td>Battalion 3, Engine 25</td>
				<!--<td><a href="../apparatus/batchiefveh.shtml">Battalion</a> 3, <a href="../apparatus/fireengine.shtml">Engine</a> 25</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta26">Station 26</a></td>
				<td class="addr"><a href="http://g.co/maps/f8rtk">2850 54th Street, 92105</a></td>
				<td>Engine 26, Paramedic 26</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 26, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 26, Paramedic 62</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta27">Station 27</a></td>
				<td class="addr"><a href="http://g.co/maps/kqd6p">5064 Clairemont Drive, 92117</a></td>
				<td>Engine 27</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 27</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta28">Station 28</a></td>
				<td class="addr"><a href="http://g.co/maps/uptyw">3880 Kearny Villa Road, 92123</a></td>
				<td>Engine 28, Truck 28, Crash 28, Foam 28, Water Tender 28</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 28, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 28, <a href="../apparatus/crashrescue.shtml">Crash &amp; Rescue</a> 28, <a href="../apparatus/foam28.shtml">Foam</a> 28, <a href="../apparatus/watertender.shtml">Water Tender</a> 28</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta29">Station 29</a></td>
				<td class="addr"><a href="http://g.co/maps/pdsy7">198 W. San Ysidro Blvd., 92173</a></td>
				<td>Engine 29, Truck 29, Brush 29, Paramedic 29</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 29, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 29, <a href="../apparatus/brushrig.shtml">Brush</a> 29,  <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 29</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta30">Station 30</a></td>
				<td class="addr"><a href="http://g.co/maps/9s74n">2265 Coronado Avenue, 92054</a></td>
				<td>Engine 30, Paramedic 30</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 30, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 30</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta31">Station 31</a></td>
				<td class="addr"><a href="http://g.co/maps/3yhr7">6002 Camino Rico, 92120</a></td>
				<td>Engine 31, Paramedic 31</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 31, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 31</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta32">Station 32</a></td>
				<td class="addr"><a href="http://g.co/maps/wwzx2">484 Briarwood Road, 92114</a></td>
				<td>Engine 32, Paramedic 32</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 32, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 32</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta33">Station 33</a></td>
				<td class="addr"><a href="http://g.co/maps/t9aef">16966 Bernardo Center Drive, 92128</a></td>
				<td>Engine 33, Brush 33, Paramedic 33</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 33, <a href="../apparatus/brushrig.shtml">Brush</a> 33, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 33</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta34">Station 34</a></td>
				<td class="addr"><a href="http://g.co/maps/ykh8d">6565 Cowles Mountain Blvd., 92119</a></td>
				<td>Engine 34, Brush 34</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 34, <a href="../apparatus/brushrig.shtml">Brush</a> 34</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta35">Station 35</a></td>
				<td class="addr"><a href="http://g.co/maps/8ykf4">4285 Eastgate Mall, 92037</a></td>
				<td>Battalion 5, Engine 35, Truck 35, Chem Rig 35, Brush 35</td>
				<!--<td><a href="../apparatus/batchiefveh.shtml">Battalion</a> 5, <a href="../apparatus/fireengine.shtml">Engine</a> 35, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 35, <a href="../apparatus/chem1rig.shtml">Chem Rig</a> 35</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta36">Station 36</a></td>
				<td class="addr"><a href="http://g.co/maps/jkzy9">5855 Chateau Drive, 92117</a></td>
				<td>Engine 36, Paramedic 36</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 36, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 36</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta37">Station 37</a></td>
				<td class="addr"><a href="http://g.co/maps/66d9u">11640 Spring Canyon Road, 92131</a></td>
				<td>Engine 37, Brush 37, Paramedic 37</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 37, <a href="../apparatus/brushrig.shtml">Brush</a> 37, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 37</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta38">Station 38</a></td>
				<td class="addr"><a href="http://g.co/maps/8g83w">8441 New Salem Street, 92126</a></td>
				<td>Engine 38, Brush 38, Paramedic 38</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 38, <a href="../apparatus/brushrig.shtml">Brush</a> 38, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 38</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta39">Station 39</a></td>
				<td class="addr"><a href="http://g.co/maps/mjg35">4949 La Cuenta Drive, 92124</a></td>
				<td>Engine 39, Paramedic 39</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 39, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 39</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta40">Station 40</a></td>
				<td class="addr"><a href="http://g.co/maps/ugjsd">13393 Salmon River Road, 92129</a></td>
				<td>Engine 40, Truck 40, Brush 40, Light &amp; Air 40, Paramedic 40</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 40, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 40, <a href="../apparatus/brushrig.shtml">Brush</a> 40, <a href="../apparatus/lightair.shtml">Light and Air</a> 40, <a href="../apparatus/watertender.shtml">Water Tender</a> 40, <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 40</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta41">Station 41</a></td>
				<td class="addr"><a href="http://g.co/maps/74w65">4914 Carroll Canyon Rd, 92138</a></td>
				<td>Engine 41, Paramedic 41, US&amp;R 41</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 41,  <a href="../apparatus/medicrescuerig.shtml">Paramedic</a> 41, <a href="../apparatus/usarrig.shtml">US&R</a> 41</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta42">Station 42</a></td>
				<td class="addr"><a href="http://g.co/maps/q2pbz">12119 World Trade Drive, 92128</a></td>
				<td>Engine 42</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 42</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta43">Station 43</a></td>
				<td class="addr"><a href="http://g.co/maps/fdmkq">1590 La Media Road, 92154</a></td>
				<td>Engine 43, Brush 43, Crash 43</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 43, <a href="../apparatus/brushrig.shtml">Brush</a> 43, CR43</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta44">Station 44</a></td>
				<td class="addr"><a href="http://g.co/maps/348xd">10011 Black Mountain Road, 92126</a></td>
				<td>Battalion 7, Engine 44, Truck 44</td>
				<!--<td><a href="../apparatus/batchiefveh.shtml">Battalion</a> 7, <a href="../apparatus/fireengine.shtml">Engine</a> 44, <a href="../apparatus/aerialtruck.shtml">Trucks</a> 44, <a href="../apparatus/hazmat.shtml">HAZMAT</a>  1, HAZMAT 2</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta45">Station 45</a></td>
				<td class="addr"><a href="https://goo.gl/maps/s3UsLJH6Jp72">9366 Friars Road, 92108</a></td>
				<td>Battalion 4, Engine 45, Truck 45, HAZMAT 1 and 2</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 45</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta46">Station 46</a></td>
				<td class="addr"><a href="http://g.co/maps/xretp">14556 Lazanja Drive, 92127</a></td>
				<td>Engine 46</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 46</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta47">Station 47</a></td>
				<td class="addr"><a href="http://g.co/maps/yj4hf">6041 Edgewood Bend Court, 92130</a></td>
				<td>Engine 47</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 47</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/sta51">Station 51</a></td>
				<td class="addr"><a href="https://www.google.com/maps/@32.7035153,-117.0434046,17z/data=!3m1!4b1!4m2!6m1!1szBmUWVSYBdns.kUs-dwmrHQ6c?hl=en">7180 Skyline Drive, 92130</a></td>
				<td>Engine 51</td>
				<!--<td><a href="../apparatus/fireengine.shtml">Engine</a> 51</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/airport">Airport Station - San Diego International Airport </a></td>
				<td class="addr"><a href="http://g.co/maps/8upty">3698 Pacific Highway, 92101</a></td>
				<td>Crash 1, 2, 3, and 5</td>
				<!--<td><a href="../apparatus/heavyrescue4.shtml">Crash</a> 1, Crash 2, Crash 3, Crash 5</td>--></tr>
			<tr>
				<td class="station"><a href="/fire/about/firestations/dispatch">Emergency Command and Data Center</a></td>
				<td class="addr"><a href="http://g.co/maps/fdcbh">3750 Kearny Villa Road, 92123</a></td>
				<td>Communications 1</td>
				<!--<td><a href="../apparatus/commvan.shtml">Communications</a> 1</td>--></tr>
			<tr>
				<td class="station">Fire-Rescue Logistics Center</td>
				<td class="addr"><a href="http://g.co/maps/e66hg">3850 Kearny Villa Road, 92123</a></td>
				<td>&nbsp;</td>
			</tr>
		</tbody>
	</table>
<?php } ?>

<!-- Accompanying html form placed in sidebar

<form action="/fire/about/firestations" id="searchStations" name="searchStations">
	<p><label for="zip">ZIP Code: </label><input id="zip" name="zip" size="5" type="TEXT"><input type="SUBMIT" value="Submit"></p>
</form> 

-->