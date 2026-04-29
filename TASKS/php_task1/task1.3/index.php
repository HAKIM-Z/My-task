<?php
    function sumArray($arr) {
        $sum = 0;
        foreach ($arr as $num) {
            $sum += $num;
        }
        return $sum;
    }

$numbers = [5, 10, 15];
echo sumArray($numbers);

?>