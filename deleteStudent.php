<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'tutorials');

$id1 = $_GET['id1']; // get id through query string
$id2 = $_GET['id2'];
$id3 = $_GET['id3'];

$del = mysqli_query($connection,"delete from subject where USN = '$id1' AND semester = '$id2' and subjectcode = '$id3' "); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("location:retrieve_m.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
mysqli_close($connection);
?>
