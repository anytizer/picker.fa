<?php
$fc = file("icons.txt", FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
sort($fc);
$fc = array_map("trim", $fc);
$fc = array_unique($fc);
#print_r($fc);

array_walk($fc, "output");

function output($name, $index)
{
	echo "\r\n\t\"{$name}\",";
}
