<?php
$fc = file("lines.txt", FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
sort($fc);
$fc = array_unique($fc);
#print_r($fc);

echo implode("\r\n", $fc);
