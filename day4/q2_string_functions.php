<html>
<head>Functions</head>
<body>
<form method="POST">
  Input Text:<input type="text" name="exp"><br>
  Replace With:<input type="text" name="replace"><br>
  <input type="submit" name="submit" value="SUBMIT"><br>
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
  echo "Could not connect".mysqli_connect_error();
}
if(isset($_POST['submit']))
{
  $exp=$_POST['exp'];
  $replace=$_POST['replace'];
    echo "Number of characters are: ".strlen($exp)."<br>";
    echo "<br";
  $array= explode(" ",$exp);
  $count = count($array);
  echo "The Array Elements are:<br>";
    for($i=0;$i<$count;$i++)
  {
    echo $array[$i]."<br>";
  }


  echo "The reverse of the String : ".strrev($exp)."<br>";

  echo "String in Lower Case form : ".strtolower($exp)."<br>";

  echo "String in Upper Case form : ".strtoupper($exp)."<br>";



  echo "String After Replacing : ".substr_replace($exp, $replace,0,strlen($replace))."<br>";






}

?>
