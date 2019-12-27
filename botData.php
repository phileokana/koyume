<?php
	$data = $_POST["data"];
	$file = $_POST["file"];
	$path = "./botData/" . $file . ".html";
	if (!is_dir("./botData")) { mkdir("./botData"); }
	$myfile = fopen($path, "w") or die("ERROR");
	fwrite($myfile, $data);
	fclose($myfile)
?>
