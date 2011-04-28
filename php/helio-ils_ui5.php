<html>
 <head>
  <title>HELIO ILS - Test GUI</title>
  <link rel="stylesheet" href="secr.css" type="text/css">
  <meta content="">
  <style></style>
  <link rel="SHORTCUT ICON" href="../../logos/helio_icon.gif">
 </head>
 <body bgcolor="white">
  <table  bgcolor="white" border="0" cellpadding="2" cellspacing="0" height="100" width="750">
   <tbody>
    <tr>
     <td valign="middle" align="left" width="170">
      <a href="http://www.helio-vo.eu/"><img src="../../logos/helio_logo4_sm.jpg" border="0"></a>
     </td>
     <td valign="middle" align="left" width="480">
      <font size=+2 color=red><b>
        Instrument Location Service (ILS)<br>Test GUI
       </b>
      </font>
     </td>
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

$url = "helio-ils_soap5.php";		// routine that will process the form
?>
  <hr>

<!--        Preset Query           -->
  <p></p><h3>Preset Search</h3>
  <form method="get" action="<?php echo $url ?>" target="_blank">
   <input name="qtype" value="1" type="hidden">
   <p>Select a List: &nbsp;&nbsp;
    <select name="cat1">
     <option value="trajectories">Trajectories</option>
     <option value="keyevents">Key Events</option>
     <option value="obs_hbo">Observatory HBO</option>
    </select>
   </p>
   <p>
    <table cellspacing=0 cellpadding=0>
     <tbody>
      <tr>
       <td><p>Starting date:</p></td>
       <td>&nbsp;&nbsp;
         <?php 
         echo date_picker("from", $from_tint_yr, $from_tint_mo, $from_tini_dy);
//         echo "&nbsp;&nbsp; \n";
//         echo time_picker("from");
         ?>
       </td>
      </tr>
      <tr>
       <td>Ending date:</td>
       <td>&nbsp;&nbsp;
         <?php
 //        $curr_time = time();
 //        $cyr = date('Y',$curr_time);
 //        $cmo = date('n',$curr_time);
 //        $cdy = date('j',$curr_time);
         //echo "$cyr - $cmo - $cdy <p> \n";
         echo date_picker("to", $to_tint_yr, $to_tint_mo, $to_tini_dy);  //, $cyr, $cmo, $cdy);
//         echo "&nbsp;&nbsp; \n";
//         echo time_picker("to", 23, 59, 59);
         ?>
       </td>
      </tr>
     </tbody>
    </table>
<!--            -->
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <i>Show Recs.:</i> &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="n_show">
     <option value="" selected="selected">all</option>
     <option value="25">25</option>
     <option value="50">50</option>
     <option value="75">75</option>
     <option value="100">100</option>
    </select>
    <br>
<!--               -->
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input value=" &nbsp; Search &nbsp; " type="submit" style="background-color:lightgreen; color:black;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input value="Reset" type="reset" style="background-color:#FFE065; color:black;">
<!--               -->
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <select name="format">
     <option value="text">Text</option>
     <option value="html" selected="selected">HTML</option>
     <option value="vot">VOTable</option>
     <option value="csv">CSV File</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="process">
     <option value="1">Auto</option>
     <option value="0">Hold</option>
    </select>
   </p>

<!--            -->
   <p><br>
   <b><i>Planet:</i></b> &nbsp;&nbsp;&nbsp;&nbsp;
   Mercury
   <input name="target_obj[]" value="Mercury" type="checkbox"></input> &nbsp;&nbsp;
   Venus
   <input name="target_obj[]" value="Venus" type="checkbox"></input> &nbsp;&nbsp;
   Earth
   <input name="target_obj[]" value="Earth" type="checkbox"></input> &nbsp;&nbsp;
   Mars
   <input name="target_obj[]" value="Mars" type="checkbox"></input> &nbsp;&nbsp;
   Jupiter
   <input name="target_obj[]" value="Jupiter" type="checkbox"></input> &nbsp;&nbsp;
   Saturn
   <input name="target_obj[]" value="Saturn" type="checkbox"></input> &nbsp;&nbsp;
   Uranus
   <input name="target_obj[]" value="Uranus" type="checkbox"></input> &nbsp;&nbsp;
   Neptune
   <input name="target_obj[]" value="Neptune" type="checkbox"></input>
   <p>

<!--            -->
   <p>
   <b><i>Spacecraft:</i></b> &nbsp;&nbsp;&nbsp;&nbsp;
   Ulysses
   <input name="target_obj[]" value="Ulysses" type="checkbox"></input> &nbsp;&nbsp;
   STEREO-A
   <input name="target_obj[]" value="STEREOA" type="checkbox"></input> &nbsp;&nbsp;
   STEREO-B
   <input name="target_obj[]" value="STEREOB" type="checkbox"></input> &nbsp;&nbsp;
   Messenger
   <input name="target_obj[]" value="Messenger" type="checkbox"></input> &nbsp;&nbsp;
   Voyager 1
   <input name="target_obj[]" value="Voyager1" type="checkbox"></input> &nbsp;&nbsp;
   Voyager 2
   <input name="target_obj[]" value="Voyager2" type="checkbox"></input> &nbsp;&nbsp;
<!--
MGS <input name="target_obj[]" value="MGS" type="checkbox"></input> &nbsp;&nbsp;Odyssey <input name="target_obj[]" value="Odyssey" type="checkbox"></input> &nbsp;&nbsp;MEX <input name="target_obj[]" value="MEX" type="checkbox"></input> &nbsp;&nbsp;MRO <input name="target_obj[]" value="MRO" type="checkbox"></input> &nbsp;&nbsp;
VEX <input name="target_obj[]" value="VEX" type="checkbox"></input> &nbsp;&nbsp;
<br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-->
   <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Galileo
   <input name="target_obj[]" value="Galileo" type="checkbox"></input> &nbsp;&nbsp;
   Cassini
   <input name="target_obj[]" value="Cassini" type="checkbox"></input> &nbsp;&nbsp;
   New Horizons
   <input name="target_obj[]" value="NewHorizons" type="checkbox"></input> &nbsp;&nbsp;
   Rosetta
   <input name="target_obj[]" value="Rosetta" type="checkbox"></input> &nbsp;&nbsp;
   Dawn
   <input name="target_obj[]" value="Dawn" type="checkbox"></input> &nbsp;&nbsp;
<!--
Deep Space-1 <input name="target_obj[]" value="DeepSpace-1" type="checkbox"></input> &nbsp;&nbsp;NEAR <input name="target_obj[]" value="NEAR" type="checkbox"></input> &nbsp;&nbsp;-->
  </form>
  <p></p>
  <hr>
<!--        Free SQL Query           -->
  <p></p><h3>Free SQL Query</h3>
  <form method="get" action="<?php echo $url ?>" target="_blank">
   <input name="qtype" value="0" type="hidden">
   <p>
<!--
WHERE exe_date_time BETWEEN '2000-01-01' AND '2000-01-03' 
-->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <textarea name="sql" cols="75" rows="8">SELECT * FROM trajectories WHERE time BETWEEN '2000-01-01' AND '2000-01-03' LIMIT 10</textarea>
<!--               -->
   <p>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input value=" &nbsp; Search &nbsp; " type="submit" style="background-color:lightgreen; color:black;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input value="Reset" type="reset" style="background-color:#FFE065; color:black;">
<!--               -->
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   <select name="format">
    <option value="text">Text</option>
    <option value="html">HTML</option>
    <option value="vot">VOTable</option>
    <option value="csv">CSV File</option>
   </select>
   &nbsp;&nbsp;&nbsp;&nbsp;
   <select name="process">
    <option value="1">Auto</option>
    <option value="0">Hold</option>
   </select>
  </form>
  <br>
  </p>
  <p>
    <a href="examples_ics-ils.html" target=_blank"><i>Examples of SQL Queries to the ICS and ILS</i></a>
   </p>
<!--
   <p>
    <a href="http://hec.ts.astro.it/sec_idiots_sql.html" target="_blank">
     <em>Examples of how to use SQL on the HELIO HEC Server</em>
    </a>
   </p>
-->
   <hr>
   <?php include("ucl_inaf-service_ack.html"); ?>
 </body>
</html>
