<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d %d\n", $m, $n);
fclose($fd);

$result=  floor(($m*$n)/2);
print "$result\n";

?>