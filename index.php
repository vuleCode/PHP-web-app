<?php 
    // Konektovanje na bazu podataka
    require 'connection.php';

    $sql = "SELECT * FROM names";

    $query = mysqli_query($db, $sql); //mysql result set

    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    require 'index_view.php';
?>

