<?php
include("config.php");

extract($_POST);
$query = "INSERT INTO 'contact-data' ('firstname','lastname','phone','email','messages') VALUES ('" . $firstname . "','" . $lastname . "','" . $phone . "','" . $email . "','" . $message . "')";

$result = $mysqli->query($query);

if (!$result) {
    echo "something went wrong" . $mysqli->error;
}

echo "thanks you for sumitt your query";
$mysqli->close();
