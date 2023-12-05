<?php
//open a file named "fileTest.txt", write "valentin chastenet" into it, and close it
$file = fopen(__DIR__ . DIRECTORY_SEPARATOR . "fileTest.txt", "a+");

fwrite($file, "yannis boisserie");

fclose($file);
