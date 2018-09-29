<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d\n", $n);
fclose($fd);

$names = array("Sheldon", "Leonard", "Penny", "Rajesh", "Howard");
for ($c = 0, $l = 0; $l < $n; $c++)
{
    $l = 5 * pow(2, $c + 1) - 5;
}
$c--;
$f = 5 * pow(2, $c) - 5;
$d = $n - $f;
$div = pow(2, $c);
$r = ceil($d / $div);
$r--;
print $names[$r] . "\n";
?>