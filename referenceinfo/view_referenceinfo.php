<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from reference WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>
<p>
    <a href="list_referenceinfo.php">Go to Home</a>