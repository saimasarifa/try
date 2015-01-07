<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from employment WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_employmentinfo.php" method="post">

    <h1> employment info edit form</h1>

              <label>ID:</label>
             <input type="text" name="id" value="<?php echo $row['id'];?>" /><p>


        <label>company name:</label>
        <input type="text" name="company_name" value="<?php echo $row["company_name"];?>" /><p>
        <label>company business</label>
        <input type="text" name="company_business" value="<?php echo $row["company_business"];?>" /><p>
        <label>address:</label>
        <input type="text" name="company_location" value="<?php echo $row["company_location"];?>" /><p>
        <label>designation:</label>
        <input type="text" name="position" value="<?php echo $row["position"];?>" /><p>
        <label>depertment</label>
        <input type="text" name="department" value="<?php echo $row["department"];?>" /><p>
        <label>from</label>
        <input type="text" name="from" value="<?php echo $row["from"];?>" /><p>
        <label>to</label>
        <input type="text" name="to" value="<?php echo $row["to"];?>" /><p>
        <label>employment duration:</label>
        <input type="text" name="duration" value="<?php echo $row["duration"];?>" /><p>
        <label>responsibility</label>
        <input type="text" name="responsibility" value="<?php echo $row["responsibility"];?>" /><p>

        <button type="submit">update</button>

</form>

<a href="list_employmentinfo.php">Back to Home</a>


