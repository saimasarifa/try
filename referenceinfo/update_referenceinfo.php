<?php

$id = $_POST['id'];
$name = $_POST['Name'];
$org = $_POST['organization'];
$address = $_POST['address'];
$relation = $_POST['relation'];
$phoneoff = $_POST['phone_office'];
$phoneh = $_POST['phone_home'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];






$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`reference` SET `id`= '".$id."',`Name` = '".$name."',`organization` = '".$org."',
`address` = '".$address."',`relation` = '".$relation."',`phone_office` = '".$phoneoff."',
`phone_home` = '".$phoneh."',`mobile` = '".$mobile."',`email` = '".$email."' WHERE `reference`.`id` = $id;";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_referenceinfo.php');