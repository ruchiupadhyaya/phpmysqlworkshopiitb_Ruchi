

<html>
<head><title> AdminLogin </title>
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
<h1>Admin Login</h1>
<form action="" method="POST">

<b>Email:-</b><input type="text" name="email" required=""><br><br>

<b>Password:-</b><input type="password" name="upassword" required=""><br><br>

<input type="submit" name="submit" value="Login">

</form>
</body></center>
</html>
<?php
include("connect.php");

if(isset($_POST['submit']))
{
$email = $_POST['email'];
$upassword = $_POST['upassword'];
$encpass= md5($upassword);
$sql= "SELECT * from admin where email= '$email' and password= '$encpass'";
$res = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);

if($row)
{
echo "Logged In Successfully ";
      header("location:marksheetadmin.php");
}
else
{
	  echo "Incorrect Email or Password"; 
}
}
?>
