<?php
//Excercice 1
$var1 = true;
$var2 = 42;
$var3 = 12.34;
$var4 = "Hello";

var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);


//Excercice 2
 
$x = "PostgreSQL";  
$y = "MySQL";  
$z = &$x;  
$x = "PHP 5";  
$y = &$x; 

var_dump($x);
var_dump($y);
var_dump($z);
echo "<h1> La valeur de x est de : PHP5 </1>";
echo "<h1> La valeur de y est de : PHP5 </1>";
echo "<h1> La valeur de z est de : PHP5 </1>";

//Exercice 3
 
$a = "0";
$b = "TRUE";  
$c = FALSE;  
$d = ($a OR $b);  
$e = ($a AND $c);  
$f = ($a XOR $b); 

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
echo "<h1> La valeur de a est de : FALSE </1>";
echo "<h1> La valeur de b est de : TRUE </1>";
echo "<h1> La valeur de c est de : FALSE </1>";
echo "<h1> La valeur de d est de : TRUE </1>";
echo "<h1> La valeur de e est de : FALSE </1>";
echo "<h1> La valeur de f est de : TRUE </1>";


//Excercice 4
$X = "PHP7"; 
var_dump($X);
echo "X = PHP7 ";
$A = &$X;  
var_dump($A);
var_dump($X);
echo "<br> A = PHP7" ;
echo "<br> X = PHP7";
$Y = " 7 eme version de PHP";  
var_dump($Y);
echo "<br>Y = 7eme v PHP";
$Z = $Y * 10;
var_dump($Y);
var_dump($Z);
echo "<br>Y = 7eme v PHP";
echo "<br>Z = 70";

$X = $Y * $Y; 
var_dump($X);
echo "<br>X = 49";

?>