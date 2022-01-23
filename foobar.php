<?php
// live long and prosper

$x = 1;

while ($x <= 100) {
    if ($x % 3 === 0 && $x % 5 === 0) {
        echo " foobar,";
    } elseif ($x % 3 === 0) {
        echo " foo,";
    }
     elseif ($x % 5 === 0) {
        echo " bar,";
    } else {
        echo " " . $x . ",";
    }
    $x++;
}