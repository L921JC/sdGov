<?php
if (isset($_GET["zip"])){
	if (is_numeric($_GET["zip"])){
		//$divisions = (Central, Northern, Easter, Southeastern, Midcity, Southern, Northeastern, Western, Northwestern)
		$divisions = Array
		(

			(0) => Array
				(
					'zips' => Array(92101, 92113, 92102, 92103),
					'neighborhoods' => Array("Balboa Park", "Barrio Logan","Core-Columbia","Cortez","East Village","Gaslamp","Golden Hill","Grant Hill","Harborview","Horton Plaza","Little Italy","Logan Heights","Marina","Park West","Sherman Heights","South Park","Stockton"),
					'link' => "/police/services/divisions/central",
					'divname' => "Central Division"
				),
			(1)	=> Array
				(
					'zips' => Array(92117, 92111, 92014, 92037, 92109, 92122),
					'neighborhoods' => Array("Bay Ho","Bay Park","Clairemont Mesa E","Clairemont Mesa W","Del Mar Heights","La Jolla","La Jolla Village","Mission Bay Park","Mission Beach","North City","North Clairemont","Pacific Beach","Torrey Pines","University City"),
					'link' => "/police/services/divisions/northern",
					'divname' => "Northern Division"
				),
			(2)	=> Array
				(
					'zips' => Array(92120, 92123, 92108, 92111, 92119, 92124),
					'neighborhoods' => Array("Allied Gardens","Birdland","Del Cerro","Grantville","Kearny Mesa","Lake Murray","Mission Valley E","San Carlos","Serra Mesa","Tierrasanta"),
					'link' => "/police/services/divisions/eastern",
					'divname' => "Eastern Division"
				),
			(3)	=> Array
				(
					'zips' => Array(92114, 92102, 92113, 92139),
					'neighborhoods' => Array("Alta Vista","Bay Terraces","Chollas View","Emarald Hills","Encanto","Jamacha/Lomita","Lincoln Park","Mountain View","Mt. Hope","Paradise Hills","Shelltown","Skyline","Southcrest","Valencia Park"),
					'link' => "/police/services/divisions/southeastern",
					'divname' => "Southeastern Division"
				),
			(4)	=> Array
				(
					'zips' => Array(92105, 92104, 92115, 92116),
					'neighborhoods' => Array("Azalea/Hollywood", "Park","Castle","Cherokee Point","Chollas Creek","Colina del Sol","College Area East","College Area West","Corridor","Darnall","El Cerrito","Fairmont Village","Fox Canyon","Gateway","Islenair","Kensington","Normal Heights","Oak Park","Rolando","Swan Canyon","Talmadge","Teralta East","Teralta West","Webster" ),
					'link' => "/police/services/divisions/midcity",
					'divname' => "Midcity Division"
				),
			(5)	=> Array
				(
					'zips' => Array(92173, 92154),
					'neighborhoods' => Array("Border","Egger Highlands","Nestor","Ocean Crest","Otay Mesa","Otay Mesa W","Palm City","San Ysidro","Tijuana River Valley"),
					'link' => "/police/services/divisions/southern",
					'divname' => "Southern Division"
				),
			(6)	=> Array
				(
					'zips' => Array(92127, 92128, 92126, 92145, 92131, 92129, 92025, 92121),
					'neighborhoods' => Array("Black Mountain Ranch","Carmel Mountain","Mira Mesa","Miramar","Miramar Ranch","North","Rancho Bernardo","Rancho Encantada","Rancho Penasquitos","Sabre Springs","San Pasqual","Scripps Ranch","Sorrento Valley","Torrey Highlands","Sorrento Mesa"),
					'link' => "/police/services/divisions/northeastern",
					'divname' => "Northeastern Division"
				),
			(7)	=> Array
				(
					'zips' => Array(92104, 92103, 92106, 92111, 92140, 92108, 92107, 92110),
					'neighborhoods' => Array("Burlingame","Hillcrest","La Playa","Linda Vista","Loma Portal","Midtown","Midway District","Mission Hills","Mission Valley W","Morena","North Park","Ocean Beach","Old Town","Point Loma Heights","Roseville/Fleet Ridge","Sunset Cliffs","University Heights","Wooded Area"),
					'link' => "/police/services/divisions/western",
					'divname' => "Western Division"
				),
			(8)	=> Array
				(
					'zips' => Array(92121, 92014, 92130, 92129, 92127),
					'neighborhoods' => Array("Black Mountain Ranch","Carmel Valley","Del Mar Heights","North City","Sorrento Valley","Torrey Highlands","Torrey Preserve"),
					'link' => "/police/services/divisions/northwestern",
					'divname' => "Northwestern Division"
				)

		);
		
		 $resultsCount = 0;
		 $ans = Array();

		 foreach($divisions as $key => $val) {
		 	if(in_array( $_GET["zip"], $val['zips'])) {
		 		$resultsCount++;
		 		$ans[] = $val;
		 	}
		 }
		
		if ($resultsCount == 0) {
			echo "<p>Zip code " .$_GET["zip"]. " not found. Please enter a zip code within the City of San Diego.</p>\n";
		} elseif ($resultsCount == 1) {
			echo "<p>Zip code " .$_GET["zip"]. " is served by <a href=\"" . $ans[0]['link'] ."\">" . $ans[0]['divname'] .".</a></p>\n";
		} else {
			echo "<p>Zip code " .$_GET["zip"]. " is served by the following </p>\n";
			echo "<ul>\n";

			for($j=0; $j<$resultsCount ;$j++) {
				echo "<li> <a href=\"".	$ans[$j]['link'] . "\">" . $ans[$j]['divname'] ."</a></li>\n";
			}
			echo "</ul>\n";
		}

	}

} else { ?>	
	<p>The San Diego Police Department has divided the neighborhoods of the City of San Diego into nine (9) divisions</p>
	<ul>
		<li>Central</li>
		<li>Northern</li>
		<li>Northeastern</li>
		<li>Northwestern</li>
		<li>Southern</li>
		<li>Southeastern</li>
		<li>Eastern</li>
		<li>Western</li>
		<li>Mid-City</li>
	</ul>
	<ul>
		<li><a href="/sites/default/files/legacy/police/pdf/2013policecitywidemap.pdf">Map of Police Department Divisions and Neighborhoods</a> (PDF)</li>
	</ul>

	<p>To get information on police facilities, services, and events specific to your neighborhood, enter your zip code below.</p>

<?php } ?>
	<form action="/police/services/divisions" id="searchDivisions" name="searchDivisions">
		<fieldset>
		<legend class="hide">Zip Code</legend>
		<label for="zip">Zip Code: </label>
		<input id="zip" name="zip" size="8" type="text">
		<input type="submit" value="Submit">
		</fieldset>
	</form>
	<p>If you have additional questions about San Diego Police Department Recruiting, see the <a href="/police/recruiting/faqs">Frequently Asked Questions</a>, call 619-531-COPS (2677) or email <a href="mailto:sdpdrecruiting@pd.sandiego.gov">sdpdrecruiting@pd.sandiego.gov</a>.</p>
	<p><strong>If you have an emergency, dial 9-1-1.</strong></p>
	<p><strong>To access 9-1-1 from a cell phone or outside San Diego, dial 619-531-2065.</strong></p>
	<p>For 24-hour non-emergencies, dial 619-531-2000 or 858-484-3154.</p>
