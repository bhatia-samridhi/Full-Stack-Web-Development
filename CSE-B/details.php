<?php
$hostName = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'CSEB';
$conn=mysqli_connect($hostName, $username, $password, $databaseName);
?>
<?php


$sql="select * from users";
$result = mysqli_query($conn,$sql);


    if( $result->num_rows > 0)
    { 
    	while ( $data = $result->fetch_assoc()) {
  				
  		 echo "ID".'->'.$data['id'].'<br>'; 
        echo "Name".'->'.$data['name'].'<br>'; 
        echo "Age".'->'.$data['age'].'<br>';
        echo "Contact".'->'.$data['contact'].'<br>';
        echo "Email".'->'.$data['email'].'<br>';  		
    		    	
    		    }
     
         
    } 


?>