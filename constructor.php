<?php


class Rectangle{
    public $length;
    

function __construct($length,$breadth)
{
    $this->length=$length;
    $this->breadth=$breadth;
    
}


function Area(){
    $area=$this->length * $this->breadth ;
    echo $area; 
}

function Perimeter(){
    $perimeter=2 * ($this->length + $this->breadth) ;
    echo $perimeter; 
}
    
}


$obj=new Rectangle(50,100);

$obj->Area();
echo "<br>";
$obj->Perimeter();


?>