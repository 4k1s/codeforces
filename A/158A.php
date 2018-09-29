<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d %d\n", $n, $k);
$data = fgets($fd);
$grade = explode(" ", $data);
fclose($fd);

for ($c = 0, $result = 0; $c < $n; $c++)
{
    $grade[$c] = intval($grade[$c]);
}
rsort($grade);
$limit = $grade[$k - 1];

for ($c = 0, $result = 0; $c < $n; $c++)
{
    if ($grade[$c] >= $limit)
    {
        {
            if ($grade[$c] > 0)
            {
                $result++;
            }
        }
    }
}
print "$result";
?>