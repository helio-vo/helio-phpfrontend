<?php
//   functions to construct date and time pull-down menus

function date_picker($name, $cyr, $cmo, $cdy)
{
//echo "$cyr - $cmo - $cdy <p> \n";

$startyear = date("1980");
$endyear = date("2020");

$curr_time = time();
$mxyr = date('Y',$curr_time);
$endyear = $mxyr;
//echo "start $startyear <br>";
//echo "end $endyear <p>";

$html="\n<select name=\"y_".$name."\" class=\"txtfeld\"> \n";
 for($i=$startyear;$i<=$endyear;$i++)
 {
  if($i==$cyr) $selected="selected";
  else $selected='';
  $html.="<option value='$i' $selected>$i</option> \n";
 }
 $html.="</select>"; 

$months=array('','January','February','March','April','May','June','July','August',
'September','October','November','December');

$html.="<select name=\"mo_".$name."\" class=\"txtfeld\"> \n";
 for($i=1;$i<=12;$i++)
 {
  if($i==$cmo) $selected="selected";
  else $selected='';
  $ipd = str_pad($i,2,"0", "STR_PAD_RIGHT");
  $html.="<option value='$ipd' $selected>$months[$i]</option> \n";
 }
 $html.="</select>";

$html.="<select name=\"d_".$name."\" class=\"txtfeld\"> \n";
 for($i=1;$i<=31;$i++)
 {
  if($i==$cdy) $selected="selected";
  else $selected='';
  $ipd = str_pad($i,2,"0", "STR_PAD_RIGHT");
  $html.="<option value='$ipd' $selected>$ipd</option> \n";
 }
 $html.="</select> \n\n";

return $html;
}

function time_picker($name, $chr, $cmi, $csc)
{

$html="\n<select name=\"h_".$name."\" class=\"txtfeld\"> \n";
 for($i=0;$i<=23;$i++)
 {
  if($i==$chr) $selected="selected";
  else $selected='';
  $ipd = str_pad($i,2,"0", "STR_PAD_RIGHT");
  $html.="<option value='$ipd' $selected>$ipd</option> \n";
 }
 $html.="</select>";

$html.="<select name=\"mi_".$name."\" class=\"txtfeld\"> \n";
 for($i=0;$i<=59;$i++)
 {
  if($i==$cmi) $selected="selected";
  else $selected='';
  $ipd = str_pad($i,2,"0", "STR_PAD_RIGHT");
  $html.="<option value='$ipd' $selected>$ipd</option> \n";
 }
 $html.="</select>";

$html.="<select name=\"s_".$name."\" class=\"txtfeld\"> \n";
 for($i=0;$i<=59;$i++)
 {
  if($i==$csc) $selected="selected";
  else $selected='';
  $ipd = str_pad($i,2,"0", "STR_PAD_RIGHT");
  $html.="<option value='$ipd' $selected>$ipd</option> \n";
 }
 $html.="</select> \n\n";

return $html;
}

?>