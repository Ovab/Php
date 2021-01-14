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
<style>
    body{text-align: center}
    .rood {
        border: solid red 2px
    }
    .green {border: solid green 2px }
</style>
</html>
<body>
<?php
for($i=1; $i<19; $i++){
    if ($i==2 || $i==4 || $i == 6 || $i == 8|| $i == 10|| $i == 12 || $i == 14 || $i == 16 || $i == 18){ echo  "<img class='green' src=../mems/img$i.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'> &nbsp";}
    else {echo  "<img class='rood' src=../mems/img$i.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'> &nbsp";}
}
?>
</body
