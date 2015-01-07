<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from reference WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_referenceinfo.php" method="post">

    <h1> employment info edit form</h1>

         <label>id:</label>
        <input type="text" name="id" value="<?php echo $row["id"];?>" /><p>
        <label>Name:</label>
        <input type="text" name="Name" value="<?php echo $row["Name"];?>" /><p>
        <label>Organization:</label>
        <input type="text" name="organization" value="<?php echo $row["organization"];?>" /><p>
        <label>address:</label>
        <input type="text" name="address" value="<?php echo $row["address"];?>" /><p>
        <label>relation:</label>
        <input type="text" name="relation" value="<?php echo $row["relation"];?>" /><p>
        <label>Phone office:</label>
        <input type="text" name="phone_office" value="<?php echo $row["phone_office"];?>" /><p>

        <label>phone home</label>
        <input type="text" name="phone_home" value="<?php echo $row["phone_home"];?>" /><p>
        <label>Mobile:</label>
        <input type="text" name="mobile" value="<?php echo $row["mobile"];?>" /><p>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $row["email"];?>" /><p>

        <button type="submit">update</button>

</form>

<a href="list_referenceinfo.php">Back to Home</a>


