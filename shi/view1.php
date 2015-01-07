<?php

$id = $_GET['id'];

/*$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");*/
mysql_connect("localhost","root","shimu");
mysql_select_db("students");

//$query = mysql_query("SELECT * FROM image ");
$query=mysql_query("SELECT * FROM `image` where `id`='$id' ");
echo "<table>";
while($row=mysql_fetch_array($query))
{
    echo "<tr>";
    echo "<td>";?><echo img src "<?php header("content-type:image/jpeg");
                        echo $row['myfile'];?>"<?php echo "</td>";

    echo "<td>"; echo $row["name"];echo "</td>";
    echo "</tr>";


}
echo "</table>";
var_dump($row);
//var_dump($query);
?>
<a href="list.php">Go to Home</a>
