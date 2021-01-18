<?php
print_r($_GET);
if ($_GET['inlognaam']==""){
    echo 'Please put in a username';
}
if ($_GET['wachtwoord']==""){
    echo 'Please put in a password';
}