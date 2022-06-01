<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$password = $_POST["password"];


if(empty($fname)){
    echo"First name is empty ". "<br>" ;
   }

    

else{

    echo "First name is" .$fname . "<br>"; 
}

if(empty($lname)){
    echo"last name is empty ". "<br>" ;
   }

    

else{

    echo "last name is" .$lname. "<br>" ; 
}

if(empty($age)){
    echo"age is empty " . "<br>";
   }

    

else{

    echo "Age is" .$age . "<br>"; 
}





if(strlen($password)<6)
{
 echo "password can not use less then 6 chrecter". "<br>";

}
else{
    "The password is correct". "<br>";

}





?>

