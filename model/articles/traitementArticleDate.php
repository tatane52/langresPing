<?php

$date = new DateTime($donnees["date_envoi"]);
$dateFormat = date_format($date, 'd-m-Y');
echo $dateFormat;