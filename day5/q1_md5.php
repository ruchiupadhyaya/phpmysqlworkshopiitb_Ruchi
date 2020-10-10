<html>
  <head>
    <title> Login Credentials</title>
  </head>
  <body>
    <form action = 'q1_md5.php' method='POST'>
      <p>****Enter Login Details****</p>
    </br>
    Username: <input type = "text"  name = "username"></br>
  </br>
    Password: <input type = "password"  name = "password"></br>
  </br>
  <input type="submit" name="submit" value="SUBMIT"><br>
</form>
</body>
</html>

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
   $dbname='data1';
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
 $sql1= "CREATE TABLE IF NOT EXISTS login(
   id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(30),
   password VARCHAR(60)
 )";
$result1 = mysqli_query($conn1,$sql1);
if(!$result1)
{
  echo "table not inserted<br>". mysqli_error($conn1);
}
//storing login Details
if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $encpass = md5($password);
  $sql2 = "INSERT INTO login(username,password) VALUES ('$username','$encpass')";
  if(mysqli_query($conn1,$sql2))
  {
    echo "Entry Added Successfully!</br>";
  }
  else
  {
	echo "Error :" .$sql2 ."</br>".mysqli_error($conn1);
  }

}

  mysqli_close($conn1);
?>
