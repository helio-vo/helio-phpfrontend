<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 TRANSITIONAL//EN">
<html>

	<head>
		<title>Test CXS</title>
	</head>
	<body>

<?php
$format = $_GET["format"];
$cxs_process = $_GET["cxs_process"];
if ($format == "text") {echo "Task: $cxs_process <p> \n";}

//  Start Time
$yy= $_GET["y_from"]; $mm= $_GET["mo_from"]; $dd= $_GET["d_from"]; 
$hh= $_GET["h_from"]; $mn= $_GET["mi_from"]; $ss= $_GET["s_from"];
$date_from= "$yy-$mm-$dd"."T"."$hh:$mn:$ss";
//if ($cxs_process == "flareplotter") {$date_from= "$yy-$mm-$dd";} //."T00:00:00";}

//  End Time
$yy= $_GET["y_to"]; $mm= $_GET["mo_to"]; $dd= $_GET["d_to"]; 
$hh= $_GET["h_to"]; $mn= $_GET["mi_to"]; $ss= $_GET["s_to"];
$date_to= "$yy-$mm-$dd"."T"."$hh:$mn:$ss";


if ($cxs_process == "goesplotter") {
  $ctit = "GOES Light-curve";
  $cmd0 = "sed s/xfffx/$date_from/ zzxx.xml | sed s/xtttx/$date_to/  > /tmp/zz.xml";
  $date_range = "$date_from to $date_to";
}
if ($cxs_process == "flareplotter") {
  $ctit = "Plot of flare locations";
  $cmd0 = "sed s/xfffx/$date_from/ zzxx2.xml > /tmp/zz.xml";
  $date_range = "$date_from";
}
if ($format == "text") {echo "Date range: $date_range <br> \n";}

///  should tmp/zz.xml be a more random name?
//$cmd0 = "sed s/xfffx/$date_from/ zzxx.xml | sed s/xtttx/$date_to/ | sed s/xpppx/$cxs_process/ > /tmp/zz.xml";
//$cmd0 = "sed s/xfffx/$date_from/ zzxx.xml | sed s/xtttx/$date_to/  > /tmp/zz.xml";
$cmd1 = " | ./post.sh /tmp/zz.xml http://msslxv.mssl.ucl.ac.uk";
$cmd2 = " | grep \"Resulting URL \" | cut -d ' ' -f 3";

$cmd = $cmd0. $cmd1 . $cmd2;
if ($format == "text") {echo "Command used: $cmd <p>\n";}

$from_time=microtime(true);

$exec = exec($cmd);
if ($format == "text") {echo "URL = $exec <p>\n";}

$to_time=microtime(true);
//echo "$from_time $to_time <br>";
echo round(abs($to_time - $from_time),2)." seconds";

//  should we remove /tmp/zz.xml?
$cmdx = "rm /tmp/zz.xml";
//echo exec($cmdx);

//echo passthru($cmd) ;
//echo '<meta http-equiv="REFRESH" content="0;url=' . "$url" . '">';
?>

<center>
<b> <?php echo $ctit ?> for:</b> <?php echo $date_range ?>
<p>

<img src="<?php echo $exec; ?>">
</center>
<p>


	</body>
</html>