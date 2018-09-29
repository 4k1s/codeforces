<?php

$flag = 1; //must be not zero for STDIN
$in = 'php://stdin';
if (!$flag)
{
    $in = "input.txt";
}
fscanf(STDIN, "%d\n", $n);
$div = array("4", "7", "44", "47", "74", "77", "444", "777", "447", "474", "744", "477", "747", "774");
$length = count($div);


for ($flag = 0, $c = 0; $c < $length; $c++)
{
    $s = $n / (intval($div[$c]));
    if (is_int($s))
    {
        $flag++;
        break;
    }
}
if (!$flag)
{
    print "NO\n";
}
 else
{
    print "YES\n";
}
?>