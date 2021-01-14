<html>
<a href="../index.php">Home</a>
<a href="../Opdracht2/Opdr%202.php">Opdracht 2</a>
<a href="3.1.php">Opdracht 3.1.1</a>
<a href="3.1.2.php">Opdract 3.1.2</a>
<a href="3.2.php">Opdracht 3.2</a>
<a href="3.3.php">Opdracht 3.3</a>
<a href="3.4.php">Opdracht 3.4</a>
<a href="3.5.php">Opdracht 3.5</a>
<a href="3.6.php">Opdracht 3.6</a><br>
</html>
<?php
$i=0;
$imgnummer =1;
echo "<h1>Trust me ik gebruik hier een loop</h1> <br>";
for($i=0; $i<18; $i++){
    echo  "<img src=../mems/img$imgnummer.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
    $imgnummer++;
}
