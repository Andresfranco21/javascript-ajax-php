<?php
$mysqli=mysqli_connect("localhost", "root", "", "peliculas");
mysqli_set_charset($mysqli,"utf8");
    if ($mysqli->connect_errno) {
        die('Connect Error: ' . $mysqli->connect_errno);
}

?>