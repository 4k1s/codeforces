<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d\n", $w);
fclose($fd);
$result="NO";
if ($w>3 && $w%2==0)
{
  $result="YES";  
}
print $result;


?>