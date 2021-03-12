<?php
    $x = 127;
    $y = test($x);
    echo "Le résultat est : ".$y;
    function test($z){
        if($z>100){
            return(1);
        }else{
            return(0);
        }
    }
?>