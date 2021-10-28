<?php
		

	$email="";
	$err_email="";

	

	$hasError=false;




	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		if(!strpos($_POST["email"],"@"))
			{
				if(!strpos($_POST["email"],"."))

				$hasError=true;
				$err_email="email format is not correct!";
				}

			else
				{
					$email=$_POST["email"];
				}
		
	}
	
	
	


	
	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		if(!$hasError){
			
			
			echo $_POST["email"]."<br>";
			
			
		}
		
	}


?>




<html>
	<head>
		<title> Admin </title>
	</head>
	<body>
	
		
	<form action="" method="post">
		<table>
			
			
				
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" value="<?php echo $email;?>" type="text" placeholder="Enter Email"> <br>
					<span><?php echo $err_email;?></span></td>
				</tr>
				
				
				
				
				
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="Register"></td>
				</tr>
			
		</table>
	</form>
	</body>
</html>