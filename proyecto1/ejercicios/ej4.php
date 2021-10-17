<?php
function evenOdd($n)
{
    if ($n % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}
echo evenOdd(5);
