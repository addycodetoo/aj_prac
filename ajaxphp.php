<?php
$conn=mysqli_connect("localhost","root","","newtestdb") or die("connection failed");
$sql="select * from student";
$result=mysqli_query($conn,$sql) or die("SQL Query Failed");
$output=mysqli_fetch_all($result);
echo "<pre>";
print_r($output);
echo"</pre>";
?>
