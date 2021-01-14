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
$alle["De Spartelkuikens "] = "25 <img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'> <img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'>";
$alle["De Water buffels "] = "32 <img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'>";
$alle["Plonsmdrerin "] = "11 <img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'>";
$alle["Bommetje "] = "23 <img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'><img src='../mems/img10.png' alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='25' height='25'>";
$totaal= 25+32+11+23;
$i=0;

foreach ($alle as $label => $waarde) {
    echo $label.$waarde."<br>";
}
?>