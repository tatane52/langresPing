<?php
$servername = "localhost";
$dbname = "langresPing";
$username = "root";
$password = "root";


//creation connection
$bdd = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
/*if ($bdd){
    echo "ok";
}
else{
    echo "not ok";
}*/
?>