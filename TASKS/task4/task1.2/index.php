<?php
function mytest($x,$y){
    echo $x * $y."<br>";
    echo $x - $y."<br>";
    echo ($y!=0) ? $x / $y:"undefined";
}
mytest(3,9);
?>