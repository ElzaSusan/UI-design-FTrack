<?php
$con = mysqli_connect("localhost","root","","student_infromation_management");
$result=mysqli_query($con,"select * from admin");
$rows=mysqli_num_rows($result);
echo $rows;
?>