<?php


function fibonacci($n)
{
    $a=0;$b=1;
    $series=array($a, $b);
    $next=$a+$b;

    for ($i=0; $i<$n-2; $i++)
    {
        array_push($series, $next);
        $a=$b;
        $b=$next;
        $next=$a+$b;
    }

    return $series;
}
foreach(fibonacci(12) as $i)
{echo "$i, ";}
?>
