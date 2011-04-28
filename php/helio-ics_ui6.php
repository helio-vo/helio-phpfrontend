<html>
 <head>
  <title>HELIO ICS - Test GUI</title>
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
        Instrument Capabilities Service (ICS)<br>Test GUI
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

$url = "helio-ics_soap6.php";		// routine that will process the form
?>
  <hr>

<!--        Preset Query           -->
  <p></p><h3>Preset Search</h3>
  <form method="get" action="<?php echo $url ?>" target="_blank">
   <input name="qtype" value="1" type="hidden">
   <p>Select a List: &nbsp;&nbsp;
    <select name="cat1">
     <option value="instrument">Instrument</option>
     <option value="observatory">Observatory</option>
     <option disabled="disabled">---------</option>
     <option value="flybys">Flybys</option>
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

<!--               -->
   <p> <br>
   <b>Qualifying Parameters:</b> &nbsp; <i>(for Instrument)</i>
   <p>
<!--    -->
   <i>Observing Domain 1</i>: <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Sun
   <input name="od1[]" value="Sun" type="checkbox"></input> &nbsp;&nbsp;
   Mercury
   <input name="od1[]" value="Mercury" type="checkbox"></input> &nbsp;&nbsp;
   Venus
   <input name="od1[]" value="Venus" type="checkbox"></input> &nbsp;&nbsp;
   Earth
   <input name="od1[]" value="Earth" type="checkbox"></input> &nbsp;&nbsp;
<!--
Earth/L1 <input name="od1[]" value="Earth/L1" type="checkbox"></input> &nbsp;&nbsp;
-->
   Mars
   <input name="od1[]" value="Mars" type="checkbox"></input> &nbsp;&nbsp;
   Jupiter
   <input name="od1[]" value="Jupiter" type="checkbox"></input> &nbsp;&nbsp;
   Saturn
   <input name="od1[]" value="Saturn" type="checkbox"></input> &nbsp;&nbsp;
   <br>
<!--    -->
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Heliosphere
   <input name="od1[]" value="heliosphere" type="checkbox"></input> &nbsp;&nbsp;
   Planetary
   <input name="od1[]" value="planetary" type="checkbox"></input> &nbsp;&nbsp;
   Comet
   <input name="od1[]" value="comet" type="checkbox"></input> &nbsp;&nbsp;
   Heliopause
   <input name="od1[]" value="heliopause" type="checkbox"></input> &nbsp;&nbsp;
   Galactic
   <input name="od1[]" value="galactic" type="checkbox"></input> &nbsp;&nbsp;
   <br>
<!--    -->
   <i>Observing Domain 2</i>: <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <i>Solar</i>: &nbsp;&nbsp;
   Interior
   <input name="od2[]" value="interior" type="checkbox"></input> &nbsp;&nbsp;
<!--
Disk <input name="od2[]" value="disk" type="checkbox"></input> &nbsp;&nbsp-->
   Disk/inr. cor.
   <input name="od2[]" value="disk/inr. cor." type="checkbox"></input> &nbsp;&nbsp;
   Outer corona
   <input name="od2[]" value="outer corona" type="checkbox"></input> &nbsp;&nbsp;
   Disk/helios.
   <input name="od2[]" value="disk/helios." type="checkbox"></input> &nbsp;&nbsp;
   Solar-wind
   <input name="od2[]" value="solar-wind" type="checkbox"></input> &nbsp;&nbsp;
   <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <i>Planetary</i>: &nbsp;&nbsp;
   Environment
   <input name="od2[]" value="environment" type="checkbox"></input> &nbsp;&nbsp;
   Magnetosphere
   <input name="od2[]" value="magneto" type="checkbox"></input> &nbsp;&nbsp;
<!--
Magneto/ionosphere <input name="od2[]" value="magneto/ionosphere" type="checkbox"></input> &nbsp;&nbsp;
-->
   Ionosphere
   <input name="od2[]" value="ionosphere" type="checkbox"></input> &nbsp;&nbsp;
   Aurora
   <input name="od2[]" value="aurora" type="checkbox"></input> &nbsp;&nbsp;
   <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Interstellar
   <input name="od2[]" value="interstellar" type="checkbox"></input> &nbsp;&nbsp;
   Energy release
   <input name="od2[]" value="energy release" type="checkbox"></input> &nbsp;&nbsp;
   Structure
   <input name="od2[]" value="structure" type="checkbox"></input> &nbsp;&nbsp;
   <p>
<!--    -->
   <i>Instrument Type</i>: <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Remote
   <input name="itype[]" value="remote" type="checkbox"></input> &nbsp;&nbsp;
   In-situ
   <input name="itype[]" value="in-situ" type="checkbox"></input> &nbsp;&nbsp;
   <br>
<!--    -->
   <i>Observable Entity</i>: <br>
   <table cellpadding=0 cellspacing=0>
    <tr>
     <td width="150">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Photons
      <input name="oe1[]" value="photons" type="checkbox"></input>
     </td>
     <td>
      GMR
      <input name="oe2[]" value="gmr" type="checkbox"></input> &nbsp;&nbsp;
      HXR
      <input name="oe2[]" value="hxr" type="checkbox"></input> &nbsp;&nbsp;
      SXR
      <input name="oe2[]" value="sxr" type="checkbox"></input> &nbsp;&nbsp;
      EUV
      <input name="oe2[]" value="euv" type="checkbox"></input> &nbsp;&nbsp;
      UV
      <input name="oe2[]" value="uv" type="checkbox"></input> &nbsp;&nbsp;
      visible
      <input name="oe2[]" value="visible" type="checkbox"></input> &nbsp;&nbsp;
      &mu;-wave
      <input name="oe2[]" value="microwave" type="checkbox"></input> &nbsp;&nbsp;
      radio
      <input name="oe2[]" value="radio" type="checkbox"></input> &nbsp;&nbsp;
      <br>
      H-alpha
      <input name="oe2p[]" value="H-alpha" type="checkbox"></input> &nbsp;&nbsp;
      He 10830
      <input name="oe2p[]" value="He10830" type="checkbox"></input> &nbsp;&nbsp;
     </td>
    </tr>
    <tr>
     <td width="150">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Particles
      <input name="oe1[]" value="particles" type="checkbox"></input>
     </td>
     <td>
      Charged
      <input name="oe2[]" value="charged" type="checkbox"></input> &nbsp;&nbsp;
      Energetic
      <input name="oe2[]" value="energ" type="checkbox"></input> &nbsp;&nbsp;
<!--
energ/neut <input name="oe2[]" value="energ/neut" type="checkbox"></input> &nbsp;&nbsp;
-->
      Neutral
      <input name="oe2[]" value="neut" type="checkbox"></input> &nbsp;&nbsp;
      Dust
      <input name="oe2[]" value="dust" type="checkbox"></input> &nbsp;&nbsp;
      Cosmic-ray
      <input name="oe2p[]" value="cosmic-ray" type="checkbox"></input> &nbsp;&nbsp;
     </td>
    </tr>
    <tr>
     <td width="150">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Fields
      <input name="oe1[]" value="fields" type="checkbox"></input>
     </td>
     <td>
      Electric
      <input name="oe2[]" value="elect" type="checkbox"></input> &nbsp;&nbsp;
      Magnetic
      <input name="oe2[]" value="magn" type="checkbox"></input> &nbsp;&nbsp;
<!--
elect/magn. <input name="oe2[]" value="uv" type="checkbox"></input> &nbsp;&nbsp;
-->
      Gravity
      <input name="oe2[]" value="gravity" type="checkbox"></input> &nbsp;&nbsp;
     </td>
    </tr>
   </table>
   <p>
<!--    -->
<!--
dust    ?????
-->
<!--    -->
   <i>Keywords</i>: <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Imager
   <input name="key[]" value="imager" type="checkbox"></input> &nbsp;&nbsp;
   Spectrometer
   <input name="key[]" value="spectrometer" type="checkbox"></input> &nbsp;&nbsp;
   Polarimeter
   <input name="key[]" value="polarimeter" type="checkbox"></input> &nbsp;&nbsp;
   Coronagraph
   <input name="key[]" value="coronagraph" type="checkbox"></input> &nbsp;&nbsp;
   Magnetograph
   <input name="key[]" value="magnetograph" type="checkbox"></input> &nbsp;&nbsp;
   Magnetometer
   <input name="key[]" value="magnetometer" type="checkbox"></input> &nbsp;&nbsp;
   <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--
Radioheliograph <input name="key[]" value="radioheliograph" type="checkbox"></input> &nbsp;&nbsp;
-->
   Oscillations
   <input name="key[]" value="oscillations" type="checkbox"></input> &nbsp;&nbsp;
   Composition
   <input name="key[]" value="composition" type="checkbox"></input> &nbsp;&nbsp;
   Irradiance
   <input name="key[]" value="irradiance" type="checkbox"></input> &nbsp;&nbsp;
   Photometer
   <input name="key[]" value="photometer" type="checkbox"></input> &nbsp;&nbsp;
   Radiometer
   <input name="key[]" value="radiometer" type="checkbox"></input> &nbsp;&nbsp;
  </form>
  </p>
  <hr>
<!--        Free SQL Query           -->
  <p></p><h3>Free SQL Query</h3>
  <form method="get" action="<?php echo $url ?>" target="_blank">
   <input name="qtype" value="0" type="hidden">
   <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <textarea name="sql" cols="75" rows="8">SELECT name,loc_gen,loc_p1,loc_p2,sat_id FROM observatory WHERE loc_gen='ERO' OR loc_gen='LPO' LIMIT 100
   </textarea>
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
     <i>Examples of how to use SQL on the HELIO HEC Server</i>
    </a>
   </p>

-->
   <hr>
   <?php include("ucl_inaf-service_ack.html"); ?>
 </body>
</html>