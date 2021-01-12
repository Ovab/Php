<html>
<a href="index.php">Home</a>
<a href="Opdr%202.php">Opdracht 2</a>
<a href="3.1.php">Opdracht 3.1.1</a>
<a href="3.1.2.php">Opdract 3.1.2</a><br>
</html>
<?php
$i=0;
$imgnummer =1;
echo "<h1>Trust me ik gebruik hier een loop</h1> <br>";
for($i=0; $i<18; $i++){
    echo  "<img src=mems/img$imgnummer.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
    $imgnummer++;
}
