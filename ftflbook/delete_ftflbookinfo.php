<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "DELETE FROM `students`.`ftflbook` WHERE `ftflbook`.`id` = $id";

mysqli_query($link, $query);

header('location:list_ftflbookinfo.php');
?>
