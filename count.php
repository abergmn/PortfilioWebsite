<?php

$counterFile = "count.txt";
$count = (int)file_get_contents($counterFile);

// todo:
// check if file exists
// if exists, get existing count, increase by one
// write back to count.txt

echo $count;

?>
