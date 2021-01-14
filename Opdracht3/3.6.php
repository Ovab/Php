<?php
$alle["De Spartelkuikens "] = 25;
$alle["De Water buffels "] = 32;
$alle["Plonsmdrerin "] = 11;
$alle["Bommetje "] = 23;
$totaal=  $alle["De Spartelkuikens"]+$alle ["De Water buffels "]+ $alle ["Plonsmdrerin "]+ $alle ["Bommetje "];
$i=0;

foreach ($alle as $label => $waarde) {
    echo $label.$waarde."<br>";
}
for ($j=0; $i<$totaal; $j++){
    if ($i==5){
        echo  "<img src='../mems/img14.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'>";
        $i=0;
    }
    $i++;

}
