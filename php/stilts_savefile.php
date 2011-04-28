<?php
//    extract return from STILTS and stores as a file

header("Content-type: application/x-file-to-save");
header("Content-Disposition: attachment; filename=".basename($_REQUEST['file']));
readfile($_REQUEST['file']);

$nurl = $_REQUEST["urlx"];
$nurl = str_replace('||','&',$nurl);	// replace chars substituted for transfer
$url = str_replace("%","%25",$nurl);	// STILTS wants % char translated
//echo "SQL: $url \n";

//    need to remove the first and last lines - upsets some browsers
$cmd = 'curl -s "' . $url . '" | grep -e "sql> select" -e "Elapsed time:" -v' ;

echo passthru($cmd) ;

?>