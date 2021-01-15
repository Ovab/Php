<html>
<a href="../index.php">Home</a>
<a href="../Opdracht2/Opdr%202.php">Opdracht 2</a>
<a href="../Opdracht3/3.1.php">Opdracht 3.1</a>
<a href="4.php">Opdracht 4 (hier)</a><br>
</html>
<?php
$tempCel=15;
$inputdev3=14;
$word="eminem";

echo $tempCel."  degrees Celsius is ".Celsius2Far($tempCel). " degrees Fahrenheit";
echo "<br>";echo "<br>";
echo $inputdev3. " can be divided my 3? ".devby3($inputdev3);
echo "<br>";echo "<br>";
echo $word. " in reverse is ". reverseUno($word);

function Celsius2Far($tempCel){
    $tempCel=($tempCel*9/5)+32;
    return $tempCel;
}
function devby3($inputdev3){
    $inputdev3=$inputdev3/3;
    if (is_int($inputdev3)){
        return $inputdev3="true";
    }
    else{
        return $inputdev3="false";
    }
}
function reverseUno($word){
    if (is_string($word)){
        return strrev($word);
    }

    else{
        return $word="ERROR PLEASE INPUT A STRING";
    }
}