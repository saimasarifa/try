<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from ict_skills WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_ictskillinfo.php" method="post">

    <h1> ict skill  info edit form</h1>

    <label></label>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" /><p>


        <label>Experience Category :</label>

        <select name="experience_category">
            <option <?php if($row['experience_category']=='eng') echo 'selected';?> value="eng">eng</option>
            <option <?php if($row['experience_category']=='bank') echo 'selected';?> value="bank">bank</option>
            <option <?php if($row['experience_category']=='data_entry') echo 'selected';?> value="data_entry">Data entry</option>
</select>
        <p>
        <label>Skill Description</label>

        <textarea   cols="50" rows="4"  name="skill_description">
       <?php echo $row['skill_description'];?>


      </textarea>
        <p>


    Extracurricul aractivities:

        <textarea   cols="50" rows="4"  name="extracurricular_activities">
       <?php echo $row['extracurricular_activities'];?>

      </textarea>
        <p>
        <button type="submit">update</button>

</form>

<a href="list_ictskillinfo.php">Back to Home</a>


