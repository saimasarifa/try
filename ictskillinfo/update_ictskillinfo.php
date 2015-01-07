<?php

$id = $_POST['id'];
$exp  = $_POST['experience_category'];
$skilld = $_POST['skill_description'];
$extra  = $_POST['extracurricular_activities'];





$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`ict_skills` SET `experience_category` = '".$exp."' ,`skill_description` = '".$skilld."',
`extracurricular_activities` = '".$extra."' WHERE `ict_skills`.`id` = $id;";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_ictskillinfo.php');