<?php
  
  session_start();
  if($_COOKIE['status'] == "OK" || $_COOKIE['status'] == "always ok")
  {
	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form>
	<table border ='1' cellpadding="0" cellspacing="0" >
        <tr>
            <td colspan='2'> C company
                Logged in as <a href = "dashboard.php" name="username" > <?php echo $_COOKIE['uname']; ?></a>|
            <a href = "logout.php" name="logout">Logout</a>
        </td>
		</tr>
		<br/>
		<tr>		
			<td>
			<p><b>Account</b></p>
			<hr>
				<ul>
				<li><a href="dashboard.php">Dashboard</a></li>  
				<li><a href="profile.php">View Profile</a></li>                             
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="picture.html">Change Profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li>
				  <a href="logout.php">Logout</a>
				</li>
				</ul>
			</td>
			<td>Welcome <?php echo $_COOKIE['uname']; ?> </td>
			</tr>			
               </table>
	</form>
</body>
</html>
<?php
	 }

  else
  {
    header("location:login.php");
  }

?>

