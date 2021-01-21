<?php
session_start();
echo "BREEE <br>";

if (isset($_SESSION['user']) && $_SESSION["admin"]){
    echo "<h1> ayy ok Admin-chan</h1>";
    echo "<a href='LoginPage.php?loguit'>Log uit</a>";
}

else{
    echo 'you dont have the required permissions to visit this page';
}