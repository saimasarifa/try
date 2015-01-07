<?php

$id = $_POST['id'];
$level = $_POST['level_of_education'];
$examtitle = $_POST['exam_title'];
$groupsubject =$_POST['group_subject'];
$institution =$_POST['institution'];
$resulttype = $_POST['result_typer'];
$result = $_POST['result'];
$scale= $_POST['scale'];
$passing = $_POST['passing_year'];
$duration = $_POST['duration'];
$achievement = $_POST['achievement'];




$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`academic` SET `level_of_education` = '".$level."' ,`exam_title` = '".$examtitle."',
`group_subject` = '".$groupsubject."',`institution` = '".$institution."',
`result_type` = '".$resulttype."',`result` = '".$result."'
,`scale` = '".$scale."',`passing_year` = '".$passing."',`duration` = '".$duration."',`achievement`='".$achievement."'
 WHERE `academic`.`id` = $id;";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_acadamicinfo.php');