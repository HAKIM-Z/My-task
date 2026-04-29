<?php

$tests = array(1, "tariq", 1.5, true, 7, 's', false);

foreach ($tests as $value) {

    if (is_bool($value)) {

        echo $value ? "yes" : "no";

    } else {

        echo $value;
    }

    echo "<br>";
}

?>