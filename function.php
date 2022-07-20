<!-- function in php -->




<?php


function Addition($a,$b){

    $c=$a+$b;

    return $c;

}

function Substraction($a,$b){

    $c=$a-$b;

    return $c;

}
function multiplication($a,$b){

    $c=$a*$b;

    return $c;

}


function Square($a){
    $b=$a*$a;
    return $b;
}


function cube($a){
    $b=$a*$a*$a;
    return $b;
}


// for ($b=0;$b<10;$b++){
//     Addition(10,$b);
// }





// for ($a=0;$a<100;$a++){
//     for ($b=0;$b<100;$b++){
//        echo $a." ".$b."Addition=".Addition($a,$b)."<br>";
//        echo $a." ".$b."Substraction=".Substraction($a,$b)."<br>";
//        echo $a." ".$b."multiplication=".multiplication($a,$b)."<br>";
       
//     }
// }




for($i=10;$i<100;$i++){
    echo $i." square=  ".Square($i)."<br>";
    echo $i." cube = ".cube($i)."<br>";
}





?>