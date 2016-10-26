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
            use google\appengine\api\cloud_storage\CloudStorageTools;
$newFileContent = "Jane Doe\n";
file_put_contents("bucket/hello.txt", $newFileContent);
?>
	</body>
</html>
