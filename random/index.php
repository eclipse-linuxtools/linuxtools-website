<?php 
$cnt=0;

$files = loadDirSimple("./",".*","f");
if (sizeof($files)>0) { ?><!doctype html public "-//w3c//dtd html 4.0 transitional//en">
	<html>
	<head>
	<title>Linux Tools Videos</title>
	<link rel="stylesheet" href="/includes/style.css" type="text/css">
	</head>
	<body>
	<?php
	echo "<table>\n";
	echo "<tr><td colspan=\"3\"><b>Linux Tools Videos</b></td></tr>";
	sort($files);
	foreach ($files as $file) { 
		$cnt++;
		if ($file != ".htaccess" && false===strpos($file,"index.") && $file != "CVS")
		{
			echo '<tr><td> &#149; <a href="'.$file.'">'.$file.'</td></tr>';
		}
	}
	echo "</table>\n";
} else {
	echo "No files found!";
}

function loadDirSimple($dir,$ext,$type) { // 1D array
$stuff = array();
if (is_dir($dir) && is_readable($dir)) { 
 $handle=opendir($dir);
while (($file = readdir($handle))!==false) {
if ( ($ext=="" || preg_match("/".$ext."$/",$file)) && $file!=".." && $file!=".") {
if (($type=="f" && is_file($file)) || ($type=="d" && is_dir($file))) { 
$stuff[] = "$file"; 
}
}
}
closedir($handle); 
}
return $stuff;
}
?>

<p>&nbsp;</p>