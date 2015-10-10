<?php

 if(10>5)/*ur condition >> code to be executed if condition is true*/
 {
  echo "If Statement is true!!";
 }
 echo "<br>";

$t = date("H");

if ($t >  "20") {
     echo "Have a good day!";
}

  echo "<br>";

/*-------------------------------------------------------*/
 if( 10< 5){
 echo "if statement is true";
 } else /*code to be executed if condition is false;*/
 {
 echo "if statement is not true , that is way else works";
 }
 echo "<br>";

 if ($t < "20") {
     echo "Have a good day!";
 } else {
     echo "Have a good night!";
 }
  echo "<br>";
/*-------------------------------------------------------*/
$var1 = 100;
$var2 = 101;
if($var1 >= $var2)/*check first condition */
{
 echo "yeah its good";
}
else if( $var1 === 100)/*if first false than check second condition */
{
 echo "else if print";
}
else
{
 echo "Else print";
}

echo "<br>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

 ?>