<?php
	include("init.php");
	include("config.php");
	include("functions.php");
	$dir = opendir($problemsDir);
	while ($file = readdir($dir)) { if ($file!="." && $file!=".." && substr($file,0,strlen($file)-4)!="allproblems") {
			echo "<h4><a href='".$problemsDir."/".$file."'>".$file."</a></h4>";
	}}
	closedir($dir);
?>