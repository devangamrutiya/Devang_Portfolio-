<?php
if(isset($_POST['calculate']))
{
    $p = $_POST['p'];
    $r = $_POST['r'];
    $n = $_POST['n'];
    $i = $p*$r*$n/100;
    echo "Interest is: $i";
}
?>