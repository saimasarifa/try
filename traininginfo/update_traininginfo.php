<?php

$id = $_POST['id'];
$title = $_POST['training_title'];
$desc = $_POST['training_description'];
$ins =$_POST['institute'];
$address =$_POST['address'];
$trainingyear= $_POST['training_year'];
$duration = $_POST['duration'];




$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`traininginfo` SET `training_title` = '".$title."' ,`training_description` = '".$desc."',
`institute` = '".$ins."',`address` = '".$address."',
`training_year` = '".$trainingyear."',`duration` = '".$duration."'
 WHERE `traininginfo`.`id` = $id;";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_traininginfo.php');