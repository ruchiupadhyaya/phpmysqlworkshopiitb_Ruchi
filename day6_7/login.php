

<html>
<head><title>LOGIN </title>
  <style>
input[type=text] {
  width: 25%;
  padding: 10px 20px;
  margin: 5px 0;
 border: 1px solid black;
}
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: papayawhip;
}
input[type=submit] {
  width: 10%;
  padding: 12px 20px;
border: 1px solid #555;
 background-color: green;
 color:white;

}
]
</style>
</head>
<body>
<center>

<form action="" method="POST">

<b>Email:-</b><input type="text" name="email" required=""><br><br>

<b>Password:-</b><input type="password" name="upassword" required=""><br><br>

<b>Division:-</b><input type="varchar" name="division" required=""><br><br>

<b>Rollno:-</b><input type="number" name="rollno" required=""><br><br>

<input type="submit" name="sub" value="Login">
<br>
<br>New User?<input type="button" onclick="window.location='register.php'" class="Redirect" value="Go To Register"/>

</form>
</body></center>
</html>
<?php
session_start();
include("connect.php");

if(isset($_POST['sub']))
{
$email = $_POST['email'];
$upassword = $_POST['upassword'];
$division= $_POST['division'];
$rollno= $_POST['rollno'];
$encpass= md5($upassword);
$sql= "SELECT * from student where email= '$email' and password= '$encpass'";
$res = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);

if($row)
{
echo "Logged In Successfully ";
      $_SESSION['division']=$division;
      $_SESSION['rollno']=$rollno;
      header("location:marksheet.php");
}
else
{
	echo "Incorrect Email or Password";
}
}
?>
