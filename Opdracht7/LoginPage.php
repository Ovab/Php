<?php
session_start();
if ($_POST['email']=="test"&& $_POST['wachtwoord']=='test') {
    echo '<h1>Welkom TestBoi,</h1>';
    $_SESSION['user'] = $_POST['email'];
    print_r($_SESSION);
    echo "<a href='site.php'>Site</a>";
    echo "<a href='admin.php'>Admin Panel</a>";
    echo "<a href='LoginPage.php?loguit'>Log uit</a>";
    die();
}
if ($_POST['email']=="admin"&& $_POST['wachtwoord']=='admin') {
    echo '<h1>Welkom Admin,</h1>';
    $_SESSION['user'] = $_POST['email'];
    $_SESSION['admin']="ja";
    print_r($_SESSION);
    echo "<a href='site.php'>Site </a>";
    echo "<a href='admin.php'>Admin </a>";
    echo "<a href='LoginPage.php?loguit'> Log uit</a>";
    die();
}

if (isset($_GET['loguit'])){
    $_SESSION = array();
    session_destroy();
    header('location: LoginPage.html');
}

else{
    echo "<h1>Sorry geen toegang</h1>";
    $login=false;
    echo $login;
}

