<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d\n", $n);
$data = fgets($fd);
$score = explode(" ", $data);
fclose($fd);

for ($c = 0; $c < $n; $c++)
{
    $score[$c] = intval($score[$c]);
}
$result = 0;
$min = $score[0];
$max = $score[0];
for ($c = 1; $c < $n; $c++)
{
    if ($score[$c] < $min)
    {
        $min = $score[$c];
        $result++;
    }
    if ($score[$c] > $max)
    {
        $max = $score[$c];
        $result++;
    }
}
printf("$result\n");
?>