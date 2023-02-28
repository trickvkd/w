<html>
<body>
<form name="form" method="POST" action="#">
<label>Roll-Number:</label><input type="text" name="roll"><br><br>
<label>Name:</label><input type="text" name="name"><br><br>
<label>Course:</label><input type="text" name="course"><br><br>
<button name="btn1" type="submit">Insert</button>
<button name="btn2" type="submit">Update</button>
<button name="btn3" type="submit">Delete</button>
<button name="btn4" type="submit">View</button>
</form>
<?php
$con=mysqli_connect("localhost","root","","dbs");
if(isset($_POST['btn1']))
{
$roll=$_POST['roll'];
$name=$_POST['name'];
$course=$_POST['course'];
$q="INSERT INTO `student` VALUES('$roll','$name','$course')";
if(mysqli_query($con,$q))
echo"New Record Inserted";
}
if(isset($_POST['btn2']))
{
$roll=$_POST['roll'];
$name=$_POST['name'];
$course=$_POST['course'];
$q="UPDATE `student` SET Name='$name',Course='$course' WHERE ID='$roll'";
if(mysqli_query($con,$q))
echo"Record Updated";
}
if(isset($_POST['btn3']))
{
$roll=$_POST['roll'];
$d="DELETE FROM `student` WHERE ID='$roll'";
if(mysqli_query($con,$d))
echo"Record Deleted";
}
if(isset($_POST['btn4']))
{
$roll=$_POST['roll'];
echo"<table border='1'>";
echo"<tr>";
echo"<th>Roll-Number:</th>";
echo"<th>Name</th>"; 
echo"<th>Course</th>";
$q="SELECT * FROM `student` WHERE ID='$roll'";
$v=mysqli_query($con,$q);
while($ar=mysqli_fetch_array($v))
{
echo"<tr><td>$ar[0]</td>";
echo"<td>$ar[1]</td>";
echo"<td>$ar[2]</td></tr>";
}
echo"</table>";
}
?>
</body></html>