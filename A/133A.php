<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%s\n", $command);
fclose($fd);

$r1 = strrchr($command, "H");
$r2 = strrchr($command, "Q");
$r3 = strrchr($command, "9");
if (($r1 === FALSE) && ($r2 === FALSE) && ($r3 === FALSE))
{
    print "NO\n";
} else
{
    print "YES\n";
}
?>