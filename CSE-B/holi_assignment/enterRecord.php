<!DOCTYPE html>
<?php
include('connection.php');?>

<html>
<head>
	<title></title>
</head>
<body>
<form name="Form" action="enterRecord.php"  method="post">
		Enrollment No: <input type="text" name="enroll_no" placeholder="Enter Enrollment Number"><br>
  		Name: <input type="text" name="name" placeholder="Enter Name"><br>
   		Age: <input type="" name="age" placeholder="Enter Age"><br>
   		Course:<input type="" name="course" placeholder="Enter Course"><br>
   		Branch:<input type="" name="branch" placeholder="Enter Branch"><br>
   		Contact:<input type="" name="contact" placeholder="Enter contact number"><br>
   		Email:<input type="" name="email" placeholder="Enter email"><br>
  		<input type="submit" name="btn">
</form>

</body>
</html>