<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from contact_information WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_contactinfo.php" method="post">

    <h1> contact info edit form</h1>

    <label>ID:</label>
    <input type="text" name="id" value="<?php echo $row['id'];?>" /><p>

        <label>present address:</label>
        <input type="text" name="present_address" value="<?php echo $row['present_address'];?>" /><p>

        <label>Distric:</label>
        <select name="distric">
            <option <?php if($row['distric']=='dhaka') echo 'selected';?> value="dhaka">dhaka</option>
            <option <?php if($row['distric']=='chittagong') echo 'selected';?> value="chittagong">chittagong</option>
            <option <?php if($row['distric']=='rajshai') echo 'selected';?> value="rajshai">rajshai</option>
            <option <?php if($row['distric']=='sylhet') echo 'selected';?> value="sylhet">sylhet</option>
            <option <?php if($row['distric']=='barisal') echo 'selected';?> value="barisal">barisal</option>
        </select>
        <label>mobile number:</label>
        <input type="text" name="mobile" value="<?php echo $row["mobile"];?>" /><p>
        <label>Emergency contact:</label>
        <input type="text" name="emergency_contact" value="<?php echo $row["emergency_contact"];?>" /><p>
        <label>email :</label>
        <input type="text" name="email" value="<?php echo $row["email"];?>" /><p>




        <button type="submit">update</button>

</form>

<a href="list_contactinfo.php">Back to Home</a>

