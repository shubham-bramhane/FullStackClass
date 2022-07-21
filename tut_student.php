<?php

class  Student {
    public $name;
    public $address;
    public $dob;
    function __construct($name,$address,$dob)
    {
        $this->name=$name;
        $this->address=$address;
        $this->dob=$dob;

    }

    function Getdata(){
     echo "name ".$this->name;
     echo "<br>";
     echo "Address ".$this->address;
     echo "<br>";
     echo "Date of Birth ".$this->dob;
     echo "<br>";
    }


    // function __destruct()
    // {
    //  echo "name ".$this->name;
    //  echo "<br>";
    //  echo "Address ".$this->address;
    //  echo "<br>";
    //  echo "Date of Birth ".$this->dob;
    //  echo "<br>";
    // }

}

class Child extends Student{
    public $gender;

    function __construct($name,$address,$dob,$gender)
    {
        $this->name=$name;
        $this->address=$address;
        $this->dob=$dob;
        $this->gender=$gender;
    }

    
    function PrintData()
    {
        echo "name ".$this->name;
        echo "<br>";
        echo "Address ".$this->address;
        echo "<br>";
        echo "Date of Birth ".$this->dob;
        echo "<br>";
        echo "Gender ".$this->gender;
    }

}



$obj=new Child('akshay','ghugus',"31-05-1999","male");

// $obj->Getdata();
// $obj->Getdata();
$obj->Printdata();

// $obj=New Student("akshay",'ghugus',"31-05-1998");
// $obj1=New Student('shubham','ghugus',"16-02-1997");







?>







<!-- 


create a class name square having a parameter '$length' after that create a function name as 'SqaureArea()'

by using inheritance create another class name as 'Rectangle' as same as above Create a function name 'RectangleArea()' 



 -->