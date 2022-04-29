<?php
function printCollatz($n)
{
    while ($n != 1)
    {
        echo $n . " ";
        if ($n & 1)
            $n = 3 * $n + 1;
            else
            $n = $n / 2;
    }
    echo $n;
}
//Enter the number you wish to input here.
printCollatz(40);
?>
