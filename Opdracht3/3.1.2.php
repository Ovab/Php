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
$s["img1"]= "<img src=../mems/img1.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img2"]= "<img src=../mems/img2.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img3"]= "<img src=../mems/img3.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img4"]= "<img src=../mems/img4.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img5"]= "<img src=../mems/img5.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img6"]= "<img src=../mems/img6.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img7"]= "<img src=../mems/img7.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img8"]= "<img src=../mems/img8.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img9"]= "<img src=../mems/img9.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img10"]= "<img src=../mems/img10.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img11"]= "<img src=../mems/img11.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img12"]= "<img src=../mems/img12.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img13"]= "<img src=../mems/img13.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img14"]= "<img src=../mems/img14.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img15"]= "<img src=../mems/img15.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img16"]= "<img src=../mems/img16.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img17"]= "<img src=../mems/img17.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
$s["img18"]= "<img src=../mems/img18.png alt='meme, ik ga niet een hele beschijving schrijven, bruh' width='300' height='300'>";
echo "<h1>Trust me ik gebruik hier een array i.c.m een loop</h1> <br>";
for($i=1; $i<19; $i++){
    echo $s["img".$i];
}