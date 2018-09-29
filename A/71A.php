<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d\n", $n);
$word = array($n);
for ($c = 0; $c < $n; $c++)
{
    fscanf($fd, "%s\n", $word[$c]);
}
fclose($fd);

for ($c = 0; $c < $n; $c++)
{
    if (strlen($word[$c]) < 11)
    {
        continue;
    }
   $start =  substr($word[$c], 0,1);
   $end =  substr($word[$c], -1);
   $middle = strlen($word[$c])-2;
   $word[$c]=$start.$middle.$end;
}

for ($c = 0; $c < $n; $c++)
{
    print "$word[$c]\n";
}
?>