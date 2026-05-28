<?php

    function routeBubble($arr) {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {

            for ($j = 0; $j < $n - $i - 1; $j++) {

                if ($arr[$j] > $arr[$j + 1]) {

                    // swap
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        return $arr;
    }

    $numbers = [5, 1, 4, 2, 8];
    print_r(routeBubble($numbers));

?>