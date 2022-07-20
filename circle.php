<?php


function Area($radius){
    $area=3.14*$radius*$radius;

    return $area;
}


function Circumference($radius){
    $circ=3.14*2*$radius;
    return $circ;
}

function Volume($radius){
    $volume=(4/3)*3.14*$radius*$radius*$radius;
    return $volume;
}

$radius=10;
$radius1=20;


echo 'area of cricle '.Area($radius)."<br>";
echo 'circumference of circle '.Circumference($radius)."<br>";
echo 'volume of circle '.Volume($radius)."<br>";

echo 'area of cricle '.Area($radius1)."<br>";
echo 'circumference of circle '.Circumference($radius1)."<br>";
echo 'volume of circle '.Volume($radius1)."<br>";



?>