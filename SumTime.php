<?php
function sumTime(string $timeOne, string $timeTwo): string
{
    $time = strtotime($timeOne) + strtotime($timeTwo) ;
    $return = date('H:i:s', $time);
    return $return;
}
echo sumTime('10:15:30', '01:20:30');
