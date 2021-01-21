<?php
session_start();
if (isset($_SESSION['user'])){
    echo "<h1> ayy ok</h1>";
    echo "<a href='LoginPage.php?loguit'>Log uit</a>";
}
else{
    header('location: LoginPage.html');
}