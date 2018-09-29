<?php

fscanf (STDIN,"%d %d %d\n" , $n ,  $m , $a);
$n=ceil($n/$a);
$m=ceil($m/$a);
$result=bcmul($n, $m);
fprintf(STDOUT, "%s\n" , $result);

?>