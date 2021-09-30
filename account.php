<!DOCTYPE html>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 
$fname = $res['fname'];   
$lname = $res['lname'];  
$email = $res['email'];  
}
 ?> 
<html>
<head>
    <title> My Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
    <style>
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
    border-right:1px solid #bbb;
  }
  
  li:last-child {
    border-right: none;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover:not(.active) {
    background-color: #111;
  }
  
  .active {
    background-color: #04AA6D;
  }
</style>
</head>
<body>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="signup.php">Signup</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="department.html">Department</a></li>
  <li><a href="subject.html">Subject</a></li>
  <li><a href="retrieve_m.php">Download</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li style="float:right"><a class="active" href="team.html">About team</a></li>
</ul>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
     <form action="login_process.php" method="POST">
  <div class="login_form">
 <h3 style="text-align:center;">ACCOUNT DETAILS</h3> <br> 
     <p><a href="logout.php"><span style="color:red; float: right;text-size-20px;">Logout</span> </a></p>
     <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
       <center><p>
         <a href="department.html"><mark><h3><span style="color:green;text-size-20px;">Click here to enter your details.</span></h3></mark></a>
               </p>
      </center>
          <table class="table">
          <tr>
              <th>First Name </th>
              <td><?php echo $fname; ?></td>
          </tr>
          <tr>
              <th>Last Name </th>
              <td><?php echo $lname; ?></td>
          </tr>
          <tr>
              <th>Username </th>
              <td><?php echo $username; ?></td>
          </tr>
           <tr>
              <th>Email </th>
              <td><?php echo $email; ?></td>
          </tr>
          </table>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>