<?php
$servername = "localhost";
$dbname = "langresPing";
$username = "root";
$password = "root";

//creation connection
try
{
$bdd = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

