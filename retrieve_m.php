<html>
<head>
<title>DOWNLOAD RESULT </title>
<script src="pdf.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<link rel="stylesheet" href="retrieve.css">
</head>
<body>
<ul>
  <li><a class="active" href="menu.html">Home</a></li>
  <li><a href="signup.php">Signup</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="subject.html">Subject</a></li>
  <li><a href="retrieve_m.php">Download</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li style="float:right"><a class="active" href="team.html">About team</a></li>
</ul>
<center>
<h1>DOWNLOAD YOUR MARKS SHEET</h1>
<marquee><h3><mark>Alert!!!</mark>Incase you have made wrong entry/entries of the data,delete <mark>all</mark> the marks of that semester and then enter your marks from the beginning.</h3></marquee>    
<marquee><h3><mark>To delete your records,enter your USN and semester and then submit,delete the records of the whole semester and make new entries of the data.</mark> </h3></marquee>
<fieldset>
<legend style="color: red;">ENTER YOUR DETAILS PROPERLY , FAILING WHICH,WRONG RECORDS HAS TO BE CLEARED AND NEW ENTRIES SHOULD BE MADE FROM BEGINNING</legend>
<h1>ENTER YOUR USN</h1>
<div class="container">
<form action="" method="POST">
<input type="text" name="usn" placeholder="Enter your usn" required/>
<h1>ENTER YOUR SEMESTER</h1>
<input type="text" name="semester" placeholder="Enter your semester" required/>
<input type="submit" name="search" vaule="search by semester">
</form><br>
<button type="reset" id="pdf" value="reset" style="font-size:20px;background-color: #04AA6D;">Download PDF</button><br><br>
</fieldset>
<table id="download" border="1" align="center">
<tr>
      <th>USN</th>
      <th>Semster</th>
      <th>Subject Code</th>
      <th>Subject</th>
      <th>Maximum Marks</th>
      <th>Marks Obtained</th>
</tr><br/>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'tutorials');
if(isset($_POST['search']))
{
$usn=$_POST['usn'];
$semester=$_POST['semester'];
$query="SELECT * FROM subject WHERE usn='$usn' AND semester=$semester";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))

{
?>
<tr>
<td><?php echo $row['usn']; ?></td>
<td><?php echo $row['semester']; ?></td>
<td><?php echo $row['subjectcode']; ?></td>
<td><?php echo $row['subjectid']; ?></td>
<td><?php echo $row['maxmarks']; ?></td>
<td><?php echo $row['marksobt']; ?></td>
<td width=5%><?php echo "<a href=deleteStudent.php?id1=".$row["usn"]."&id2=".$row["semester"]."&id3=".$row["subjectcode"].">Delete</a></td>"?>
<?php
}}
?>
</table>
</div></center>
</body>
</html>