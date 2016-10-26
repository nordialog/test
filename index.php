<!DOCTYPE HTML>
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
$myfile = fopen("text/newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
	</body>
</html>
