<?php
echo"mi primera pagina con php";
$a=5;
$b=9;
$c=$a+$b;
echo"  <br>la suma es= " . $c;
$n=20;
$cont=0;
for($i=1; $i<=$n;$i++)
{
    $cont=$cont+$i;
}
echo"<br>la suma es=".$cont;

$cont=0
for($i=1; $i<=$n;$i++)
{
    if($i%2==0)
    $cont=$cont+$i;
    
}
echo"<br>la suma de numeros pares es=" .$cont;
?>