<p>Disclaimer: Please use this calculator as a guideline. For more information on specific rate approvals, please visit the <a href="/water/rates/rates">Water & Sewer Bill/Rates web page</a>. To view wastewater rate adjustments, see <a href="/sites/default/files/legacy/mwwd/pdf/projectedbills.pdf">Examples of Projected Wastewater Bills</a> (PDF).</p>

<p>Instructions: Provide the information requested below, then press 'Calculate'. Your Meter Size and Water Usage can be found on your <a href="/water/rates/billing/howtoreadyourbill">water bill</a>. Some accounts have more than one meter. For those accounts with multiple meters, you will need to run the calculator for each meter.</p>

<form action="" id="wbc" method="GET">
  <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 5px;" width="100%">
    <tbody>
      <tr>
        <td style="color: #c00;">All fields are required</td>
      </tr>
    </tbody>
  </table>
  <table border="0" cellpadding="10" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td><label for="customertype">Customer Type</label>:</td>
        <td colspan="2"><select id="customertype" name="customertype"><option value="">--select one--</option><option value="1">Single Family Dwelling</option><option value="2">Multi-family Dwelling</option><option value="3">Commercial</option><option value="4">Industrial</option><option value="5">Temporary Construction</option><option value="6">Irrigation</option></select></td>
      </tr>
      <tr>
        <td><label for="metersize">Meter Size</label>:</td>
        <td colspan="2"><select id="metersize" name="metersize"><option value="">--select one--</option><option class="metersize" value="1">5/8 inch</option><option class="metersize" value="2">3/4 inch</option><option class="metersize" value="3">1 inch</option><option class="metersize" value="4">1 1/2 inch</option><option class="metersize" value="5">2 inch</option><option class="metersize" value="6">3 inch</option><option class="metersize" value="7">4 inch</option><option class="metersize" value="8">6 inch</option><option class="metersize" value="9">8 inch</option><option class="metersize" value="10">10 inch</option><option class="metersize" value="11">12 inch</option><option class="metersize" value="12">16 inch</option></select></td>
      </tr>
      <tr>
        <td><label for="usage">Water Usage</label>:</td>
        <td><input id="usage" maxlength="9" name="usage" size="6" type="Text"> HCF <input id="hiddenfield" style="width:0; border:none;" type="hidden"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="submit" type="Submit" value="Calculate"></td>
      </tr>
    </tbody>
  </table>
</form>
<p><strong>This calculator provides monthly estimates. Most single-family customers receive a bill every other month so these customers should double the estimate provided by the calculator to reflect an actual bill.</strong></p>
<p><strong>Notes:</strong> This calculator only provides estimates. Your actual bill will vary depending on the length of the billing cycle and whether there are rate changes during the billing cycle. Rate changes are pro-rated depending on when they fall in the billing cycle. Monthly estimates by the calculator are based on a 30-day month. Actual billing cycles may slightly vary.</p>
<p>This calculator is only for the water portion of your City of San Diego utility bill. It does not include the sewer or storm water portions.</p>

<?php

 $waterfees_2016 = array(201507,22.26,22.26,29.50,46.04,66.72,115.32,184.59,356.23,563.03,804.98,1493.60,2596.85,4.240,4.754,6.791,9.550,5.125,5.020,6.023,5.666);

// resultype:  0 = null ; 1 = SingleFamily ; 2 = Other
$resultType = 0;
$customertype = 0;
$basefee = 0;

if ( isset($_GET["customertype"])) {
$customertype = $_GET["customertype"] ;
}

if ( isset($_GET["metersize"])) {
$metersize = $_GET["metersize"];
$basefee = $waterfees_2016[$metersize];
}  

if ( isset($_GET["usage"])) {
$usage= $_GET["usage"];
}  

if( $customertype == 1)
{
     $resultType = 1;
     $customertype = $customertype + 12;
     
     // SingleFamily = (Basefee, Tier1, Tier2, Tier3, Tier4, TotalCost, #of Tiers) 
     $singleFamily = array( $waterfees_2016[$metersize], 0, 0 ,0, 0, 0, 1);
    if ( $usage > 18)
    {
        $singleFamily[1] = $waterfees_2016[$customertype ] *4;
        $singleFamily[2] = $waterfees_2016[$customertype + 1 ] *8;
        $singleFamily[3] = $waterfees_2016[$customertype + 2 ] *6;
        $singleFamily[4] = $waterfees_2016[$customertype + 3 ] * ($usage-18);
        $singleFamily[5] = $singleFamily[0]+ $singleFamily[1] + $singleFamily[2] + $singleFamily[3] + $singleFamily[4];
        $singleFamily[6] = 4;
    } elseif ( $usage > 12) {
        $singleFamily[1] = $waterfees_2016[$customertype ] *4;
        $singleFamily[2] = $waterfees_2016[$customertype + 1 ] *8;
        $singleFamily[3] = $waterfees_2016[$customertype + 2 ] * ($usage - 12);
        $singleFamily[5] = $singleFamily[0]+ $singleFamily[1] + $singleFamily[2] + $singleFamily[3] + $singleFamily[4];
        $singleFamily[6] = 3;
    } elseif ( $usage > 4) {
        $singleFamily[1] = $waterfees_2016[$customertype ] *4;
        $singleFamily[2] = $waterfees_2016[$customertype + 1 ] * ($usage - 4);
        $singleFamily[5] = $singleFamily[0]+ $singleFamily[1] + $singleFamily[2] + $singleFamily[3] + $singleFamily[4];
        $singleFamily[6] = 2;

    } else {
        $singleFamily[1] = $waterfees_2016[$customertype ] * $usage;
        $singleFamily[5] = $singleFamily[0]+ $singleFamily[1] + $singleFamily[2] + $singleFamily[3] + $singleFamily[4];
        $singleFamily[6] = 1;
    }
} elseif ($customertype > 1){
     $resultType = 2;

  if ($customertype >3) {
      $customertype = $customertype -1;
   } 
 
   $customertype =   $customertype + 15;

   // otherType = ( Base Fee, rate, usage, total )
   $otherType = array ( $waterfees_2016[$metersize], 0, $usage, 0);

   $otherType[1] = $waterfees_2016[$customertype];
   $otherType[3] = $otherType[0] + ($otherType[1] * $otherType[2]);
}

if ($resultType == 0) {
 // Do Nothing
} elseif ($resultType == 1) {

     // SingleFamily = (Basefee, Tier1, Tier2, Tier3, Tier4, TotalCost, #of Tiers) 

echo"<table border='1' cellpadding='1' cellspacing='1' style='width:100%;' >\n<tbody>\n";
echo" <tr>\n<th colspan='2'>Period</td>\n<th class='commrow'>Rates Effective Jan.1, 2016</td>\n</tr>\n";
echo" <tr>\n<td colspan='2'><strong>Base Fees</strong></td>\n<td class='commrow'>$" .  round($singleFamily[0], 2) . "</td></tr>\n";
echo" <tr><td><strong>Commodity Charge</strong></td>\n";
echo"             <td><strong>Usage</strong></td>\n  <td class ='commrow'>&nbsp;</td> \n</tr>\n";

   if( $singleFamily[6] == 1) {
    echo"<tr>\n<td>Tier 1 (0-4 HCF)</td>\n<td>" . $usage . "HCF</td>\n<td class='commrow'>$". round($singleFamily[1], 2) . "</td></tr>\n";
   } elseif ($singleFamily[6] == 2) {
    echo"<tr>\n<td>Tier 1 (0-4 HCF)</td>\n<td> 4 HCF</td>\n<td class='commrow'>$". round($singleFamily[1], 2) . "</td></tr>\n";
    echo"<tr>\n<td>Tier 2 (5-12 HCF)</td>\n<td>" . ($usage-4) . " HCF</td>\n<td class='commrow'>$". round($singleFamily[2], 2) . "</td></tr>\n";
   } elseif ($singleFamily[6] == 3) {
    echo"<tr>\n<td>Tier 1 (0-4 HCF)</td>\n<td> 4 HCF</td>\n<td class='commrow'>$". round($singleFamily[1], 2) . "</td></tr>\n";
    echo"<tr>\n<td>Tier 2 (5-12 HCF)</td>\n<td> 8 HCF</td>\n<td class='commrow'>$". round($singleFamily[2], 2) . "</td></tr>\n";
    echo"<tr>\n<td>Tier 3 (13-18 HCF)</td>\n<td>" . ($usage-6). " HCF</td>\n<td class='commrow'>$". round($singleFamily[3], 2) . "</td></tr>\n";
    
   } elseif ($singleFamily[6] == 4) {
    echo"<tr>\n<td>Tier 1 (0-4 HCF)</td>\n<td> 4 HCF</td>\n<td class='commrow'>$". round($singleFamily[1], 2) . "</td></tr>\n";
    echo"<tr>\n<td>Tier 2 (5-12 HCF)</td>\n<td> 8 HCF</td>\n<td class='commrow'>$". round($singleFamily[2], 2) . "</td></tr>\n";
    echo"<tr>\n<td>Tier 3 (13-18 HCF)</td>\n<td> 6 HCF</td>\n<td class='commrow'>$". round($singleFamily[3], 2) . "</td></tr>\n";
    echo"<tr>\n<td>Tier 4 (19+ HCF)</td>\n<td>". ($usage - 18) ." HCF</td>\n<td class='commrow'>$". round($singleFamily[4], 2) . "</td></tr>\n";  
   }
echo"   <tr><td colspan='2'><strong>Monthly Charges</strong></td>\n<td class='commrow'>$". round($singleFamily[5], 2) ."</td></tr>\n";
echo" </tbody>\n</table>\n";
echo"  <ol type='a'><li>Calculations are rounded up to one cent.</li><li>View the <a href='/water/rates/rates'>Water Rates</a>.</ol>\n";
} else {
echo"<table border='1' cellpadding='1' cellspacing='1' style='width:100%;''>\n<tbody>\n";
echo"    <tr>\n<th colspan='2'>Period</th>\n<th class='commrow'>Rates Effective Jan.1, 2016</th>\n</tr>\n";
echo"    <tr>\n<td colspan='2'><strong>Base Fees</strong></td>\n<td class='commrow'>$" . round($otherType[0], 2) . "</td></tr>\n";
echo"   <tr>\n<td colspan='2'><strong>Usage</strong></td>\n  <td class ='commrow'>&nbsp;</td> \n</tr>\n";
echo"   <tr>\n<td colspan='2'>" . $usage . " HCF</td>\n<td class='commrow'>$". round( ($otherType[1] *$otherType[2] ), 2 ) . "</td></tr>\n";
echo"   <tr><td colspan='2'><strong>Monthly Charges</strong></td>\n<td class='commrow'>$". round($otherType[3], 2) ."</td></tr>\n";
echo" </tbody>\n</table>\n";
echo"  <ol type='a'><li>Calculations are rounded up to one cent.</li><li>View the <a href='/water/rates/rates'>Water Rates</a>.</ol>\n";
}

?>

<p>If you have any questions or comments, please e-mail us at <a href="mailto:water@sandiego.gov">water@sandiego.gov</a>.</p>