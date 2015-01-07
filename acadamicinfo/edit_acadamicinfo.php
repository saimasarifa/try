<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from academic WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_acadamicinfo.php" method="post">

    <h1> contact info edit form</h1>

    <label>ID:</label>
    <input type="text" name="id" value="<?php echo $row['id'];?>" /><p>

        <label>level of education:</label>
        <select name = "level_of_education">
            <option <?php if($row['level_of_education']=="diploma") echo 'selected';?> value="diploma">diploma</option>
            <option <?php if($row['level_of_education']=="bsc") echo 'selected';?> value="bsc">bsc</option>
            <option <?php if($row['level_of_education']=="msc") echo 'selected';?> value="msc">msc</option>
        </select>

        <label>exam title:</label>
        <input type="text" name="exam_title" value="<?php echo $row["exam_title"];?>" /><p>
        <label>group/subject</label>
        <input type="text" name="group_subject" value="<?php echo $row["group_subject"];?>" /><p>
        <label>institution:</label>
        <select name = "institution">
            <option <?php if($row['institution']=='bangla_college') echo 'selected';?> value="bangla_college">Bangla college</option>
            <option <?php if($row['institution']=='Du') echo 'selected';?> value="Du">Du</option>
            <option <?php if($row['institution']=='khulna_uni') echo 'selected';?> value="khulna_uni">khulna</option>

        </select>

        <label>result type:</label>
        <input type="text" name="result_type" value="<?php echo $row["result_type"];?>" /><p>
        <label>result</label>
        <input type="text" name="result" value="<?php echo $row["result"];?>" /><p>
        <label>scale</label>
        <input type="text" name="scale" value="<?php echo $row["scale"];?>" /><p>
        <label>passing year:</label>
        <input type="text" name="passing_year" value="<?php echo $row["passing_year"];?>" /><p>
        <label>duration:</label>
        <input type="text" name="duration" value="<?php echo $row["duration"];?>" /><p>
        <label>achievement</label>
        <input type="text" name="achievement" value="<?php echo $row["achievement"];?>" /><p>




        <button type="submit">update</button>

</form>

<a href="list_acadamicinfo.php">Back to Home</a>


