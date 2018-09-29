<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d %d\n", $n, $m);
fclose($fd);

$sum1=0; $result=0;
for ($a=0;$a<34;$a++)
{
    for ($b=0;$b<1001;$b++)
{
   $sum1=$a*$a+$b;
   if ($sum1==$n)
   {
       $sum2=$a+$b*$b;
      if ($sum2==$m)
      {
          $result++;
      }
   }
}
}
print $result."\n";
?>