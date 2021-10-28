<?php


  if(isset($_GET['submit']))
  {
      if(count($_GET['degree'])>=2)
      {
        foreach($_GET['degree'] as $checked)
        {
          echo $checked . '<br>';
        }
      }
   else 
      {
        echo "At least two of them has to be selected";
      }
  }

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="degree[]" value="SSC"> SSC
			<input type="checkbox" name="degree[]" value="HSC"> HSC
			<input type="checkbox" name="degree[]" value="BSc"> B.Sc<br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>