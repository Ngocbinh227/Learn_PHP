<?php
$x = 10;
$y = 20;
function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
echo "hello";
echo "hihi";