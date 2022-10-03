<?php
include '../../config/connection.php';

function display($table, $condition = "")
{
    global $conn;

    $query = "SELECT * FROM " . $table . " " . $condition;

    $cek = mysqli_query($conn, $query);
    return $cek;
}
