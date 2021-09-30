<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="tutorials";
$conn=new mysqli($server_name,$username,$password,$database_name) or die("unable to connect");
//now check the connection
if(!$conn)
{
die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
$department = $_POST['department'];
$scheme = $_POST['scheme'];
$semester = $_POST['semester'];
$name = $_POST['name'];
$usn = $_POST['usn'];
$sql_query = "INSERT INTO department (department,scheme,semester,name,usn)
VALUES ('$department','$scheme','$semester','$name','$usn')";
if (mysqli_query($conn, $sql_query))
{
    header("location:subject.html");
}
else
{
#echo "Error: " . $sql . "" . mysqli_error($conn);
echo "Please return to department page and delete all your records of the respective semester and enter the details correctly!!";
}
mysqli_close($conn);
}
?>