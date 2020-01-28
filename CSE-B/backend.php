<!DOCTYPE html>
<html>
<body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: #f1f1c1;
}
</style>


<table style="width:100%">
	
  <tr>
    <th>Id</th>
    <th>Name</th> 
    <th>Age</th>
    <th>Contact</th>
    <th>Email</th>
  </tr>
 

<?php
$hostName = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'CSEB';
$conn=mysqli_connect($hostName, $username, $password, $databaseName);

//$db = mysqli_select_db( $conn,"CSEB");
$sql="select * from users";
//$result = mysqli_query($conn,$sql);

if ($is_query_run = mysqli_query($conn,$sql)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
        echo "<tr>";
        	echo "<th>";
        		echo $query_executed['id'].' '; 
        	echo "</th>";
        	echo "<th>";
       			 echo $query_executed['name'].' ';
        	echo "</th>";
       		echo "<th>"; 
        		echo $query_executed['age'].' ';
        	echo "</th>";
        	echo "<th>";
        		echo $query_executed['contact'].' ';
       		echo "</th>";
        	echo "<th>";
        		echo $query_executed['email'].'<br>';
        	echo "</th>"; 
        echo "</tr>";
    } 
} 
else
{ 
    echo "Error in execution"; 
} 



?>
</table>

</body>
</html>