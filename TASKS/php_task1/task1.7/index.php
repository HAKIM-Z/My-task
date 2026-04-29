<?php

$films = array("avatar", "prestige", "avatar", "prestige");
$keyword = "avatar";

$count = 0;

foreach ($films as $film) {
    if ($film == $keyword) {
        $count++;
    }
}

echo $count;

?>