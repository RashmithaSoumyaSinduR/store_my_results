<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>
<head>
<title>SignUp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
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
<br>
<ul>
  <li><a class="active" href="menu.html">Home</a></li>
  <li><a href="signup.php">Signup</a></li>
  <li><a href="login.php">Login</a></li>
  <li style="float:right"><a class="active" href="team.html">About team</a></li>
</ul>
  
  <center><button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">SignUp</button></br><br>
   <p>Have an account?  <a href="login.php">Log in</a></p></center>
</form>
<?php{}  ?> 
</div>
		</div>
		<div class="col-sm-4">
		</div>

	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
