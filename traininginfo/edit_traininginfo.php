<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from traininginfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_traininginfo.php" method="post">

    <h1> Training info edit form</h1>

    <label>ID:</label>
    <input type="text" name="id" value="<?php echo $row['id'];?>" /><p>

        <label>training_title:</label>
        <input type="text" name="training_title" value="<?php echo $row["training_title"];?>" /><p>
        <label>training_description</label>
        <input type="text" name="training_description" value="<?php echo $row["training_description"];?>" /><p>
        <label>institute:</label>
        <input type="text" name="institute" value="<?php echo $row["institute"];?>" /><p>
        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $row["address"];?>" /><p>
        <label>Training year</label>
        <input type="text" name="training_year" value="<?php echo $row["training_year"];?>" /><p>
        <label>Duration in Days</label>
        <input type="text" name="duration" value="<?php echo $row["duration"];?>" /><p>





        <button type="submit">update</button>

</form>

<a href="list_traininginfo.php">Back to Home</a>


