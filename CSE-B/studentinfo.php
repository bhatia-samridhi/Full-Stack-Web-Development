<!DOCTYPE html>
<?php
if(isset($_POST['btn']))
{
	echo "Id: ".$_POST['id'];
	echo "<br>";
	echo "Name: ".$_POST['username'];
	echo "<br>";
	echo 'Age:'.$_POST['age'];
	echo "<br>";
	echo 'Contact:'.$_POST['contact'];
	echo "<br>";
	echo 'Email:'.$_POST['email'];
}
else
{
	echo "Welcome "."<br>";
}

?>
<html>
<head>
	<title></title>
</head>
<body>
<form name="Form" action="studentinfo.php"  method="post">
		Id: <input type="text" name="id" placeholder="Enter Id"><br>
  		Name: <input type="text" name="username" placeholder="Enter name"><br>
   		Age: <input type="" name="age" placeholder="Enter age"><br>
   		Contact:<input type="" name="contact" placeholder="Enter contact number"><br>
   		Email:<input type="" name="email" placeholder="Enter email"><br>
  		<input type="submit" name="btn">
</form>

</body>
</html>