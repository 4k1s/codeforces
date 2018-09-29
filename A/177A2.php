<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d\n", $n);
$board = array($n);
$mirror = array($n);

for ($c = 0; $c < $n; $c++)
{
    $board[$c] = array($n);
    $mirror[$c] = array($n);
    $data = fgets($fd);
    $board[$c] = explode(" ", $data);
}
fclose($fd);

$m = ($n - 1) / 2;
$result = 0;

for ($c1 = 0; $c1 < $n; $c1++)
{
    for ($c2 = 0; $c2 < $n; $c2++)
    {
        $board[$c1][$c2] = intval($board[$c1][$c2]);
        $mirror[$c1][$c2] = $board[$c1][$c2];
    }
}

for ($c = 0; $c < $n; $c++)
{
    $board[$c][$c] = 0;
    $board[$c][$n - 1 - $c] = 0;
    $board[$c][$m] = 0;
    $board[$m][$c] = 0;
}


for ($c1 = 0; $c1 < $n; $c1++)
{
    for ($c2 = 0; $c2 < $n; $c2++)
    {
        $board[$c1][$c2] = $board[$c1][$c2] ^ $mirror[$c1][$c2];
        $result+=$board[$c1][$c2];
    }
}
print $result;
?>