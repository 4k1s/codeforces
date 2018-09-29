<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d\n", $n);

$exit = array($n);
$enter = array($n);
for ($c = 0; $c < $n; $c++)
{
    fscanf($fd, "%d %d\n", $exit[$c], $enter[$c]);
}
fclose($fd);

for ($c = 0, $pass = 0, $max = 0; $c < $n; $c++)
{
    $pass+=$enter[$c];
    $pass-=$exit[$c];
    if ($max < $pass)
    {
        $max = $pass;
    }
}
print $max . "\n";
?>