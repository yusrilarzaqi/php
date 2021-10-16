<?php
$x = 10;
function x(){
    global $x;
    echo $x;
}
x()

?>
