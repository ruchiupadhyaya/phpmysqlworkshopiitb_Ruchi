<?php
   $servername = "localhost";
   $username = "root";
   $password= "";
   $conn = mysqli_connect($servername, $username, $password);

   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

   echo 'Connected successfully<br>';
   //creating database
   $dbname='visicounter';
   $res=mysqli_select_db($conn,$dbname);
   if(!$res)
   {
   $sql = "CREATE Database $dbname";
   $result = mysqli_query( $conn,$sql );

   if(! $result ) {
      die('Could not create database: ' . mysqli_connect_error());
   }

   echo "Database created successfully\n";
 }

 //creating tables
 $conn1=mysqli_connect($servername, $username, $password,$dbname);
 $dbselect= mysqli_select_db($conn,$dbname);
 if(!$dbselect)
 {
   echo "error selecting database<br> .";
 }
 $sql1= "CREATE TABLE IF NOT EXISTS counter(
   id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   visits INT(6)
 )";
$result1 = mysqli_query($conn1,$sql1);
if(!$result1)
{
  echo "table not inserted<br>". mysqli_error($conn1);
}

//keeping count of visitors

$sql2="SELECT visits FROM counter";
$result2=mysqli_query($conn1,$sql2);
if(mysqli_num_rows($result2)>0)
{
  while($row =mysqli_fetch_assoc($result2))
	{
		$total= $row['visits']+1 ;

	}
}
echo "Total number of visitors till now ".$total."<br>";
$sql3="UPDATE counter SET visits=$total";
if (mysqli_query($conn1,$sql3))
{
	echo "Done<br>";
}
else
{
	echo "Error in updating ".mysqli_error($conn1);
}

   mysqli_close($conn);
?>
