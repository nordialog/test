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
        <?php 
            readfile("/mnt/helge/plakat01.jpg");
echo file_get_contents($file); 
            ?>
	</body>
</html>
