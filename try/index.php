<form action="index.php" method="POST" enctype="multipart/form-data" >
    Photo: <input type="file" name="myfile"><br>
    <input type="submit" name="submit" value="upload">

</form>


<?php
if (isset ($_POST['submit'])){
    mysql_connect("localhost","root","shimu");
    mysql_select_db("students");
    $imageName= mysql_real_escape_string($_FILES['myfile']['name']);
    //print_r($_FILES['myfile']);
    $imageData=mysql_real_escape_string(file_get_contents($_FILES['myfile']['tmp_name']));
   // echo $imageData;// this will show all garbage data which is pic.
    $imagetype=mysql_real_escape_string($_FILES['myfile']['type']);
    if(substr($imagetype,0,5)=="image")
    {
        mysql_query("INSERT INTO `image` VALUES ('','$imageName','$imageData')");
        echo"image uploaded";
    }else {
        echo"only image please";
    }
}
?>
<?php
$lastid= mysql_insert_id();
echo "<img src=showimage.php?id=$lastid>";
?>
<a href="list.php">list</a>