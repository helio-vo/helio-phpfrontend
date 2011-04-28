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
$date_from= "$yy-$mm-$dd";
$xx= "$hh:$mn:$ss";

//  End Time
$yy= $_GET["y_to"]; $mm= $_GET["mo_to"]; $dd= $_GET["d_to"]; 
$hh= $_GET["h_to"]; $mn= $_GET["mi_to"]; $ss= $_GET["s_to"];
$date_to= "$yy-$mm-$dd";
$xx= "$hh:$mn:$ss";

//  Instrument Type
$itypx = $_GET['itype'];
$itype= "";  $TOR= "";
foreach ($itypx as $itypz)
{
  if ($format == "text") {echo "$itypz is checked <br> \n";}
  if($itype) {$TOR= " OR ";}
  $itype= $itype . $TOR . "inst_type='" . $itypz . "'";
}
if($itype) {$cl0 = " AND ($itype)"; } else {$cl0 = ""; }
if ($format == "text") {echo ">>> $cl0 <br> \n";}

//  Observable Entity 1
$oe1x = $_GET['oe1'];
$oe1= "";  $TOR= "";
foreach ($oe1x as $oe1z)
{
  if ($format == "text") {echo "$oe1z is checked <br> \n";}
  if($oe1) {$TOR= " OR ";}
  $oe1= $oe1 . $TOR . "inst_oe1='" . $oe1z . "'";
}
if($oe1) {$cl1 = " AND ($oe1)"; } else {$cl1 = ""; }
if ($format == "text") {echo ">>> $cl1 <br> \n";}

//  Observable Entity 2
$oe2x = $_GET['oe2'];
$oe2= "";  $TOR= "";
foreach ($oe2x as $oe2z)
{
  if ($format == "text") {echo "$oe2z is checked <br> \n";}
  if($oe2) {$TOR= " OR ";}
  $oe2= $oe2 . $TOR . "inst_oe2 LIKE '%" . $oe2z . "%'";
}
if($oe2) {$cl2 = " AND ($oe2)"; } else {$cl2 = ""; }
if ($format == "text") {echo ">>> $cl2 <br> \n";}

//  Observable Entity 2 additions
//  need to or some stuff in from keywords...
$oe2px = $_GET['oe2p'];
$oe2p= "";  $TOR= "";
foreach ($oe2px as $oe2pz)
{
  if ($format == "text") {echo "$oe2pz is checked <br> \n";}
  if($oe2) {$TOR= " OR ";}
  $oe2= $oe2 . $TOR . "keywords LIKE '%" . $oe2pz . "%'";
}
if($oe2) {$cl2 = " AND ($oe2)"; } else {$cl2 = ""; }
if ($format == "text") {echo ">>> $cl2 <br> \n";}

//  Observing Domain 1
$od1x = $_GET['od1'];
$od1= "";  $TOR= "";
foreach ($od1x as $od1z)
{
  if ($format == "text") {echo "$od1z is checked <br> \n";}
  if($od1) {$TOR= " OR ";}
  $od1= $od1 . $TOR . "inst_od1 LIKE '%" . $od1z . "%'";
}
if($od1) {$cl4 = " AND ($od1)"; } else {$cl4 = ""; }
if ($format == "text") {echo ">>> $cl4 <br> \n";}

//  Observing Domain 2
$od2x = $_GET['od2'];
$od2= "";  $TOR= "";
foreach ($od2x as $od2z)
{
  if ($format == "text") {echo "$od2z is checked <br> \n";}
  if($od2) {$TOR= " OR ";}
  $od2= $od2 . $TOR . "inst_od2 LIKE '%" . $od2z . "%'";
}
if($od2) {$cl5 = " AND ($od2)"; } else {$cl5 = ""; }
if ($format == "text") {echo ">>> $cl5 <br> \n";}

//  Keywords
$keyx = $_GET['key'];
$keys= "";  $TOR= "";
foreach ($keyx as $keyz)
{
  if ($format == "text") {echo "$keyz is checked <br> \n";}
  if($keys) {$TOR= " OR ";}
  $keys= $keys . $TOR . "keywords LIKE '%" . $keyz . "%'";
}
if($keys) {$cl3 = " AND ($keys)"; } else {$cl3 = ""; }
if ($format == "text") {echo ">>> $cl3 <br> \n";}

if ($format == "text") {echo "<p> \n";}

//  which parameters should be returned
$cols = "name,observatory_name,obsinst_key,time_start,time_end,inst_type,inst_od1,inst_od2,inst_oe1,inst_oe2,keywords";
$cols = "*";
if ($cat=='instrument') {
  $cols = "obsinst_key,date(time_start),date(time_end),inst_od1,inst_od2,inst_type,inst_oe1,inst_oe2,keywords";
}

//  assemble the SQL string
if($qtype) { 
$psql= "select * from " . $cat . " where time_start<='" . $date_from . "' and time_end>='" . $date_to . "'";
$psql= "select " . $cols . " from " . $cat . " where '" . $date_from . "'<=time_end and '" . $date_to . "'>=time_start";
if ($cat=='instrument') {
  $psql= $psql . $cl0 . $cl1 . $cl2 . $cl4 . $cl5 . $cl3 . $show;
}
$psql=str_replace("%","%25",$psql);
} else {
$psql= $sql;
$psql=str_replace("%","%25",$sql);
};

//  concatonate the URL
$root = 'http://msslxv.mssl.ucl.ac.uk:8080/stilts/task/sqlclient';
$dtb  = 'jdbc:mysql://msslxt.mssl.ucl.ac.uk/helio_ics_ils&user=helio_guest';
$fmt  = 'html';
$fmt  = $format;
$url  = '' . $root . '?db=' . $dtb . '&sql=' . $psql . ' &ofmt=' . $fmt . '';
if ($format == "text") {echo "$url \n";}


//    output as text
if ($format == "text") {

// <!--   Do refresh ????   -->
if($process) {
echo '<meta http-equiv="REFRESH" content="0;url=' . "$url" . '">';
} else {
echo "<p> ++++ No Refresh! ++++ \n";
}

echo "<br> Query type: $qtype \n";
echo "<br>List: $cat \n";
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
$vot_file = "VOT-ICS_" . $dstr . ".xml";


//    create a web page
if ($format == "html") {
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 TRANSITIONAL//EN\"> \n";
echo "<html> <head> \n";
echo "<title>HELIO-ICS Results</title>\n";
echo "</head> <body> \n";
echo "<link rel=\"stylesheet\" href=\"secx.css\" type=\"text/css\"> \n";
echo "<h1>HELIO ICS Results</h1> \n";  
echo "<b>SQL Query:</b> &nbsp;&nbsp; $psql \n";
echo "<p> \n";

//    ask if want to save to file as a VOTable
$nurl = str_replace('ofmt=html','ofmt=vot', $url);
//    need to replace the & while passing or it transfer splits it into parameters
$nurl = str_replace('&','||',$nurl);
$nurl = str_replace("'","%27",$nurl);	// quotes on time can cause problems
//echo "$nurl <p> \n";
echo "Click to save to VOTable: <a href='stilts_savefile.php?file=$vot_file&urlx=$nurl'>$vot_file</a> <p>";

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
