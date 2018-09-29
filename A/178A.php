<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
$fd = fopen($in, "r");
fscanf($fd, "%d\n", $n);

$phones=array($n);
$result=0;
for ($c=0;$c<$n;$c++)
{
   fscanf($fd, "%s\n",$phones[$c]); 
}
fclose($fd);

for ($c=0 ,$prefix=$phones[0];$c<$n;$c++ )
{
    
  for ($l=0 ;$l<=strlen($prefix);$l++ )
    {
  $cmp=strncmp($prefix,$phones[$c],(strlen($prefix)-$l)); 
  if ($cmp!=0)
  {
     continue; 
  }
  $prefix=substr($prefix , 0 ,(strlen($prefix)-$l) );
  $result=strlen($prefix);
  
  break;
    }
  }

print "$result\n";
?>