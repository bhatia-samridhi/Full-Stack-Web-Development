<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'student_db';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);
if ($conn){
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
if(isset($_POST['btn']))
{
	
	$enroll = $_POST['enroll_no'];
 	$name = $_POST['name'];
 	$age = $_POST['age'];
 	$course = $_POST['course'];
 	$branch = $_POST['branch'];
 	$contact = $_POST['contact'];
 	$email = $_POST['email'];

	$qy = "insert into `student`(enroll_no,name,age,course,branch,contact,email)values(''$enroll', $name', '$age', '$course', '$branch', '$contact', '$email'')";
	$qt = mysqli_query($conn,$qy);
	if($qt)
	{
		echo "<script>alert('registeration is complete')</script>";
		echo"<script>window.open('enterRecord.php','self')</script>";
	}
}
?>