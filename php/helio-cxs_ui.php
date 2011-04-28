<html>
 <head>
  <title>HELIO CXS - Test GUI</title>
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
        Context Service (CXS)<br>Test GUI
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

$url = "helio-cxs_soap.php";		// routine that will process the form
?>

  <hr>
<!-- width=750 align=left  -->

<!--        Prest Query           -->
  <form method="get" action="<?php echo $url ?>" target="_blank">
<!--
   <p></p><h4>Preset search</h4>
-->
<!--
   <input name="qtype" value="1" type="hidden">
-->
   <p>
    <table>
     <tbody>
      <tr>
       <td><p> &nbsp;&nbsp;&nbsp;&nbsp; Starting date:</p></td>
       <td>&nbsp;&nbsp;
         <?php 
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
         echo date_picker("to", 2003, 11, 02); 
         echo "&nbsp;&nbsp; \n";
         echo time_picker("to", 03, 59, 59);
         ?>
         &nbsp; <em><small>Only used for GOES lightcurve</small></em>
       </td>
      </tr>
     </tbody>
    </table>
   </p>
<!--               -->
   <p>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input value=" &nbsp;Send Request&nbsp; " type="submit" style="background-color:lightgreen; color:black;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input value="Reset" type="reset" style="background-color:#FFE065; color:black;">
<!--
<br>
    &nbsp;&nbsp;&nbsp;&nbsp; 
    <input value="Send Request" type="submit">&nbsp;
    <input value="Reset" type="reset">
-->
<!--       
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        -->
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="cxs_process">
     <option value="goesplotter">GOES Lightcurve</option>
     <option value="flareplotter">Flare Plotter</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="format">
     <option value="html" selected="selected">normal</option>
     <option value="text">test</option>
    </select>
  </p>
<!--
    &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="process">
     <option value="1">Auto</option>
     <option value="0">Hold</option>
    </select>
   </p>
-->
<!--            -->
   <p>
  </form>
<p><br>
<font color=red><i>The time coverage of the GOES plotter is currently limited 
and a blank image may produced if the request falls outside the allowed range</i></font>
<p>
<!--            -->
   <hr>
   <?php include("ucl-service_ack.html"); ?>
 </body>
</html>
