<?php 
//    some general parameters

$qtype= $_GET["qtype"];

$sql= $_GET["sql"];

$cat= $_GET["cat1"];

$format= $_GET["format"];
if ($format == "") {$format='html';};
$process= $_GET["process"];

//  No of lines to output
$n_show= $_GET['n_show'];
if ($n_show == "") {$show = "";}
else {$show = " limit " . $n_show;}

//  Start Time

$yy= $_GET["y_from"]; $mm= $_GET["mo_from"]; $dd= $_GET["d_from"]; 
$hh= $_GET["h_from"]; $mn= $_GET["mi_from"]; $ss= $_GET["s_from"];
$date_from= "$yy-$mm-$dd";  // $hh:$mn:$ss";

//  End Time

$yy= $_GET["y_to"]; $mm= $_GET["mo_to"]; $dd= $_GET["d_to"]; 
$hh= $_GET["h_to"]; $mn= $_GET["mi_to"]; $ss= $_GET["s_to"];
$date_to= "$yy-$mm-$dd";  // $hh:$mn:$ss";

//  Trajectories - target object is planet or spacecraft
if ($cat=="trajectories") {
$targx = $_GET['target_obj'];
$target= "";  $TOR= "";
foreach ($targx as $targz)
{
  if ($format == "text") {echo "$targz is checked <br> \n";}
  if($target) {$TOR= " OR ";}
  $target= $target . $TOR . "target_obj='" . $targz . "'";
}
if($target) {$cl0 = " AND ($target)"; } else {$cl0 = ""; }
if ($format == "text") {echo ">>> $cl0 <br> \n";}

$date_field= "time";
$cols = "id,target_obj,date(time) as time,julian_int,r_hci,long_hci,lat_hci,long_hee,lat_hee,long_carr";
}


//  Key events for spacecraft such as flybys, launch, etc.
if ($cat=="keyevents") {
$date_field= "time_event";
$cols= "Observatory, Sat_ID, time_event, Type, Description";
}


//  HBO part of Observatory table ????
//if ($cat=="obs_hbo") {

//$date_field= "time_start";
//$psql= "select " . $cols . " from " . $cat . " where '" . $date_from . "'<=time_end and '" . $date_to . "'>=time_start";

//}

//  form the SQL query
if($qtype) { 
$psql= "select " . $cols . " from " .$cat. " where " .$date_field. " between '" .$date_from. "' and '" .$date_to. "'";

if ($cat=="obs_hbo") {
$cols= "*";
$psql= "select " . $cols . " from " . $cat . " where '" . $date_from . "'<=time_end and '" . $date_to . "'>=time_start";
}

$psql= $psql . $cl0 . $show;
} else {
$psql= $sql;
};


//  concatonate the URL
$root = 'http://localhost:9071/stilts/task/sqlclient';
$dtb  = 'jdbc:mysql://localhost/helio_ils&user=helio_guest';
$fmt  = 'html';
$fmt  = $format;
$url  = '' . $root . '?db=' . $dtb . '&sql=' . $psql . '&ofmt=' . $fmt . '';
//echo $url;



//    output as text
if ($format == "text") {


// <!--   Do refresh ????   -->
if($process) {
echo '<meta http-equiv="REFRESH" content="0;url=' . "$url" . '">';

} else {
echo '<p> ++++ No Refresh! ++++ \n';

};

echo "<br> Query type: $qtype \n";
echo "<br>List: $cat1 \n";
echo "<br>Process: $process \n";

//echo "<p> If necessary, <a href=\"" . $url . "\" target=\"_blank\"><b>follow this link</b></a>";
echo "<p> If necessary, <a href=\"$url\" target=\"_blank\"> <b>follow this link</b> </a> \n";
}



//    define commend to retrieve output from ICS - depend on operating system
$sys = strtoupper(PHP_OS);
if ($format == "text") {echo "<p> Operating system: $sys <br>";}
if ($sys == "DARWIN") {
 $cget = 'curl -s "' . $url . '"';
} else {
 $cget = 'wget -qO- "' . $url . '"';
}
//echo "$cget <p>";
//$cmd = $cget . ' | grep -e "sql> select" -e "Elapsed time:" -v' ;
$cmd = $cget . ' | sed -f stilts_modfmt.sed' ;
if ($format == "text") {echo "<p> $cmd <p>";}

//    define VOTable filename
$dstr = date("ymd-His");
$vot_file = "VOT-ILS_" . $dstr . ".xml";


//    create a web page
if ($format == "html") {
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 TRANSITIONAL//EN\"> \n";
echo "<html> <head> \n";
echo "<title>HELIO ILS Results</title>\n";

echo "</head> <body> \n";
echo "<link rel=\"stylesheet\" href=\"secx.css\" type=\"text/css\"> \n";
echo "<h1>HELIO ILS Results</h1> \n";  
echo "<b>SQL Query</b>:</b> &nbsp;&nbsp; $psql \n";
echo "<p> \n";

//    ask if want to save to file as a VOTable
$nurl = str_replace('ofmt=html','ofmt=vot', $url);
//    need to replace the & while passing or it transfer splits it into parameters
$nurl = str_replace('&','||',$nurl);
$nurl = str_replace("'","%27",$nurl);	// quotes on time can cause problems
//echo "$nurl <p> \n";
echo "<b>Download</b> as VOTable: <a href='stilts_savefile.php?file=$vot_file&urlx=$nurl'>$vot_file</a> <p>";

//    this creates the table on the Web page
echo passthru($cmd) ;

echo "<p> \n";
echo "If necessary, <a href=\"$url\" target=\"_blank\"> follow this link </a> \n";
echo "<p> \n";

echo "</body> </html> \n";

}

//    output to VOTable
if ($format == "vot") {

header("Content-type: application/x-file-to-save");
header("Content-Disposition: attachment; filename=".$vot_file);
readfile($vot_file);

//$cmd = 'curl -s "' . $url . '" | grep -e "sql> select" -e "Elapsed time:" -v' ;
echo passthru($cmd) ;

}

//    output is in CSV format
if ($format == "csv") {

//header("Content-type: application/x-file-to-save");
//header("Content-Disposition: attachment; filename=".$vot_file);
//readfile($vot_file);

//$cmd = 'curl -s "' . $url . '" | grep -e "sql> select" -e "Elapsed time:" -v' ;

echo "<pre>";
echo passthru($cmd) ;
echo "</pre> \n";

}


?>