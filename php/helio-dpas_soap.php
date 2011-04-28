<?php 
//    some general parameters
$qtype= $_GET["qtype"];

$sql= $_GET["sql"];

$format= $_GET["format"];
if ($format == "") {$format='html';};
$process= $_GET["process"];

$obsinst= $_GET["obsinst_key"];
if (is_array($obsinst)) {
  if ($format == "text") {echo "array>>> <p>";}
}
$target= "";  $TOR= "";
foreach ($obsinst as $targz)
{
  if ($format == "text") {echo "$targz is checked <br> \n";}
  if($target) {$TOR= ",";}
  $target= $target . $TOR . $targz ;
}
if($target) {$obsinst = "$target"; } else {$obsinst = ""; }
if ($format == "text") {echo ">>> $obsinst <br> \n";}


//  No of lines to output
$n_show= $_GET['n_show'];
if ($n_show == "") {$show = "";}
else {$show = " limit " . $n_show;}

//  Start Time
$yy= $_GET["y_from"]; $mm= $_GET["mo_from"]; $dd= $_GET["d_from"]; 
$hh= $_GET["h_from"]; $mn= $_GET["mi_from"]; $ss= $_GET["s_from"];
$date_from= "$yy-$mm-$dd"."T"."$hh:$mn:$ss";

//  End Time
$yy= $_GET["y_to"]; $mm= $_GET["mo_to"]; $dd= $_GET["d_to"]; 
$hh= $_GET["h_to"]; $mn= $_GET["mi_to"]; $ss= $_GET["s_to"];
$date_to= "$yy-$mm-$dd"."T"."$hh:$mn:$ss";


//http://msslxw.mssl.ucl.ac.uk:8080/helio-dpas-cdaw1/HelioQueryServlet
//?STARTTIME=2010-01-01T09:00:00
//&ENDTIME=2010-07-03T20:00:00
//&INSTRUMENT=MEUD__SHELIO

//http://msslxw.mssl.ucl.ac.uk:8080/helio-dpas/HelioQueryServlet
//?STARTTIME=2010-05-01T09:00:00
//&ENDTIME=2010-07-03T20:00:00
//&INSTRUMENT=MEUD__SHELIO

//  concatonate the URL
$root = 'http://msslxw.mssl.ucl.ac.uk:8080/helio-dpas/HelioQueryServlet' ;
//$statim = "?STARTTIME=$date_from" ;
//$endtim = "&ENDTIME=$date_end" ;
//$obsinst = "'MEUD__SHELIO'";
//$obsinst = "MGS__MAG";

$url  = '?STARTTIME=' . $date_from . '&ENDTIME=' . $date_to . '&INSTRUMENT=' . $obsinst ;
//$url = str_replace('_','%5F',$url);
//$url = str_replace(':','%3A',$url);
//$url = str_replace('-','%2D',$url);
$url  = '' . $root . $url . '';
//echo "$url <p>";


//    define commend to retrieve output from ICS - depend on operating system
$sys = strtoupper(PHP_OS);
if ($format == "text") {echo "<p> Operating system: $sys <br>";}
if ($sys == "DARWIN") {
 $cget = 'curl -s "' . $url . '"';
} else {
 $cget = 'wget -qO- "' . $url . '"';
}
//echo "$cget \n";
//$cmd = $cget . " | sed s/'<TABLE name'/'<TABLE border=1 rules=cols,rows cellpadding=2 cellspacing=0 name'/g" ;
$cmd = $cget . " | sed -f dpas_modfmt.sed | sed -f dpas_modfmt2.sed" ;
if ($format == "text") {echo "$cmd <p>\n";}

//    define VOTable filename
$dstr = date("ymd-His");
$vot_file = "VOT-DPAS_" . $dstr . ".xml";

//    create a web page
if ($format == "html") {

//echo "<p><pre> \n";
echo " \n";

//    this creates the table on the Web page
//echo passthru($cget) ;
echo passthru($cmd) ;

}

//    output to VOTable
if ($format == "vot") {

header("Content-type: application/x-file-to-save");
header("Content-Disposition: attachment; filename=".$vot_file);
readfile($vot_file);

echo passthru($cget) ;

}

//    on Netscape Text option should be raw VOTable
if ($format == "text") {

// <!--   Do refresh ????   -->
if($process) {
echo "<title>DPAS Results</title> \n";

echo "<p> <b>>>>> One moment please, the screen will Refresh  !!!</b>";

echo '<meta http-equiv="REFRESH" content="0;url=' . "$url" . '">';
} else {
echo "<p> ++++ No Refresh! ++++ \n";
};

}

?>