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
if($_SERVER['REQUEST_METHOD']=='POST')
{

$usn = $_POST['usn'];
$semester = $_POST['semester'];
$count=$_POST['columns'];

for($x=1;$x<=$count ;$x++){
    $subjectcode = $_POST['subjectcode_'.strval($x)];
    $subjectid = $_POST['subjectid_'.strval($x)];
    $maxmarks= $_POST['maxmarks_'.strval($x)];
    $marksobt = $_POST['marksobt_'.strval($x)];

$sql_query = "INSERT INTO subject(usn,semester,subjectcode,subjectid,maxmarks,marksobt)
VALUES ('$usn','$semester','$subjectcode','$subjectid','$maxmarks','$marksobt')";


if (mysqli_query($conn, $sql_query))
{
echo "Marks Entered Successfully !";
header("location:retrieve_m.php");
}
else
{
echo "Error: " . $sql . "" . mysqli_error($conn);
}

}
}
mysqli_close($conn);
?>