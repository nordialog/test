<?php 
    error_reporting(E_ALL);
ini_set('display_errors', 1);
?><!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
    	<h1>Dritbra, der funker det fjell!</h1>
    <p>Trur eg, heilt sikkert..., kanskje, eller?</p>
    <p>Dette funker faktisk, tenk det!!</p>
        <p><img src="storage/plakat01.jpg" style="width:450px;height:auto;"></p>
        <?php
          $myfile = fopen("storage/newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);  
        ?>
	</body>
</html>
