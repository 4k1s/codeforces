<?php

$flag = 1; //must be not zero for STDIN

$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d\n", $k);
fscanf($fd, "%d\n", $l);
fclose($fd);

$r = (log($l, $k));
$s = strstr ( $r, '.' );
if (!$s)
{
    print "YES\n";
    $r--;
    print "$r\n";
} else
{
    print "NO\n";
}
?>