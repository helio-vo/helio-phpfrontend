<html>
 <head>
  <title>HELIO DPAS - Test GUI</title>
  <link rel="stylesheet" href="secr.css" type="text/css">
  <meta content="">
  <style></style>
  <link rel="SHORTCUT ICON" href="../../logos/helio_icon.gif">
 </head>
 <body bgcolor="ivory">
  <table  bgcolor="white" border="0" cellpadding="2" cellspacing="0" height="100" width="750">
   <tbody>
    <tr>
     <td valign="middle" align="left" width="170">
      <a href="http://www.helio-vo.eu/"><img src="../../logos/helio_logo4_sm.jpg" border="0"></a>
     </td>
     <td valign="middle" align="left" width="480">
      <font size=+2 color=red><b>
        Data Provider Access Service (DPAS)<br>Test GUI
       </b>
      </font>
     </td>
     <td valign="middle" align="right" width="100">
      <a href="http://ec.europa.eu/research/fp7/index_en.cfm?pg=capacities">
       <img src="../../images/FP7-cap-RGB12.gif" border="0">
      </a>
     </td>
    </tr>
   </tbody>
  </table>

<?php
include("datetime_functions.php");

include("default_interval.php");	// default time interval for GUI
//echo "$from_tint_yr-$from_tint_mo-$from_tini_dy";
//echo "$to_tint_yr-$to_tint_mo-$to_tini_dy";

$url = "helio-dpas_soap.php";		// routine that will process the form

//$from_tint_yr="2003"; $from_tint_mo="10"; $from_tini_dy="28";
//$to_tint_yr="2003"; $to_tint_mo="10"; $to_tini_dy="28";
?>
  <hr>
<!-- width=750 align=left  -->

<!--        Prest Query           -->
  <form method="get" action="<?php echo $url ?>" target="_blank">
<!--
   <p></p><h4>Preset search</h4>
-->
   <input name="qtype" value="1" type="hidden">
   <p>
    <table>
     <tbody>
      <tr>
       <td><p> &nbsp;&nbsp;&nbsp;&nbsp; Starting date:</p></td>
       <td>&nbsp;&nbsp;
         <?php 
//         echo date_picker("from", $from_tint_yr, $from_tint_mo, $from_tini_dy);
         echo date_picker("from", 2003, 10, 30);
         echo "&nbsp;&nbsp; \n";
         echo time_picker("from", 20, 00, 00);
         ?>
       </td>
      </tr>
      <tr>
       <td>&nbsp;&nbsp;&nbsp;&nbsp; Ending date:</td>
       <td>&nbsp;&nbsp;
         <?php
 //        $curr_time = time();
 //        $cyr = date('Y',$curr_time);
 //        $cmo = date('n',$curr_time);
 //        $cdy = date('j',$curr_time);
         //echo "$cyr - $cmo - $cdy <p> \n";
//         echo date_picker("to", $to_tint_yr, $to_tint_mo, $to_tini_dy);  //, $cyr, $cmo, $cdy);
         echo date_picker("to", 2003, 10, 31); 
         echo "&nbsp;&nbsp; \n";
         echo time_picker("to", 03, 59, 59);
         ?>
       </td>
      </tr>
     </tbody>
    </table>
   </p>
<!--               -->
   <p>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input value=" &nbsp; Search &nbsp; " type="submit" style="background-color:lightgreen; color:black;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input value="Reset" type="reset" style="background-color:#FFE065; color:black;">
<!--               -->
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="format">
     <option value="text" selected="selected">Text</option>
     <option value="html">HTML</option>
     <option value="vot">VOTable</option>
<!--
     <option value="csv">CSV File</option>
-->
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="process">
     <option value="1">Auto</option>
     <option value="0">Hold</option>
    </select>
   </p>

<!--            -->
   <p>

<?php
echo "<table width=750> \n";
echo "<tr><td width=240> \n";


//$root= "helio-vo/internal/interfaces/";
$file = $root. "../../services/other/pat_summary.csv";
//echo "$file <p> \n";

//echo "&nbsp;&nbsp;&nbsp;&nbsp; \n";
echo "&nbsp;&nbsp;&nbsp;&nbsp; \n";
echo "<b>Instruments:</b> <p> \n"; 

//echo "&nbsp;&nbsp;&nbsp;&nbsp; \n";
echo "&nbsp;&nbsp;&nbsp;&nbsp; \n";
echo "<select name='obsinst_key[]' multiple='multiple' size=18> \n";

$row = 0;
if (($handle = fopen($file, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      if ($row>0) {
        $obsinstx=$data[2];
        echo "<option value=$obsinstx> $obsinstx </option> \n" ;
        $temp=explode("__",$obsinstx);
        $allobs[]= $temp[0];
      }
      $row++;
    }
    fclose($handle);
}
$row = $row-1;
echo "</select> <p>\n";

//echo "&nbsp;&nbsp;&nbsp;&nbsp; \n";
echo "&nbsp;&nbsp;&nbsp;&nbsp; \n";
echo "<i>No. of Instruments = $row</i> \n";
//echo "<p>&nbsp;<br> \n";

echo "</td><td valign=top> \n";

$obs = array_unique($allobs);
//print_r($obs);
$obs = array_values($obs);

$num = count($obs);
//echo "<b>Observatories:</b> &nbsp;&nbsp; <i>($num unique values found)</i> <p>\n";
echo "<b>Observatories:</b> <p>\n";
echo "<font size=-1> \n";
$sobs = implode(",&nbsp; ",$obs);
$sobs = str_replace('_','-',$sobs);    // make it look prettier

echo $sobs;
echo "\n</font> \n";

echo "<p><i>($num unique values found)</i> <p>\n";

echo "<p><br><p> \n<b>Instructions:</b><p> \n";
echo "<i>Select a time range and one or more instruments then hit search. <br> \n";
//echo "<p>";
echo "Select VOTable to save to an XML file</i> \n"; 

echo "</td></tr></table> \n";

?>
  </form>

<!--            -->
  <p>
  <hr>
   <?php include("ucl-service_ack.html"); ?>
 </body>
</html>
