<?php
$file = fopen(__DIR__.DIRECTORY_SEPARATOR."file.txt", "a+");
fwrite($file,"Ok");
fclose($file);
?>