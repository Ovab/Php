<html>
<a href="../index.php">Home</a>
<a href="../Opdracht2/Opdr%202.php">Opdracht 2</a>
<a href="3.1.php">Opdracht 3.1.1</a>
<a href="3.1.2.php">Opdract 3.1.2</a>
<a href="3.2.php">Opdracht 3.2</a>
<a href="3.3.php">Opdracht 3.3</a>
<a href="3.4.php">Opdracht 3.4</a>
<a href="3.5.php">Opdracht 3.5</a><br>
</html>

<?php
$a [1] = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*";
$a [2] = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp**";
$a [3] = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp***";
$a [4] = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp****";
$a [5] = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*****";
$a [6] = "&nbsp&nbsp&nbsp&nbsp ******";
$a [7] = "&nbsp&nbsp&nbsp *******";
$a [8] = "&nbsp&nbsp ********";
$a [9] = "&nbsp&nbsp*********";

foreach ($a as $label => $value) {
    echo $value."<br>";
}

