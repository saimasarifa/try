<?php
$ID = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "select * from image WHERE id = $ID";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
header("content-type :myfile/jpeg");


?>


<form action="update.php" method="post" enctype="multipart/form-data" >

    <h1>Edit</h1>

    <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
    <br><br>

    <label>name:</label>
    <input type="text" name="name" value = "<?php echo $row["name"];?>" /><br><br>
    <br>
    <label>Photo:</label>
    <input type="file" name="myfile" value = "<?php echo $row["myfile"];?>"/><br>
    <br><br>

    <input type="submit" value="Add" name ="Update">
</form>
</body>
</html>

<a href="list.php">Go to list</a>