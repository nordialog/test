<?php
header('Content-Type:image/jpeg');
readfile("/mnt/helge/" . $_GET['img']);
echo file_get_contents($file);  
?>