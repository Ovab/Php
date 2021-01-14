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
print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $afspraak=> $tijd) {
if($afspraak == "") {
print("<li>".$tijd."</li>") ;
}
}
print("</ul>");
