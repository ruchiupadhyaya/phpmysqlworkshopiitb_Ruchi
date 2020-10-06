<html>
<head>
<title>Upload A File</title>
</head>
<body>
  <form method="POST" enctype="multipart/form-data">
    <input type ="file" name="myfile"><p>
    <input type ="submit" name="submit" value="UPLOAD"><p>
  </form>
</body>
</html>

<?php
$servername= "localhost";
$username= "root";
$password= "";

$conn = mysqli_connect($servername,$username,$password);
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
  $name = $_FILES["myfile"] ["name"];
  $type = $_FILES["myfile"] ["type"];
  $size = $_FILES["myfile"] ["size"];
  $temp = $_FILES["myfile"] ["tmp_name"];
  $error = $_FILES["myfile"] ["error"];

  if($error > 0)
  {
    die("Error in Uploading the File. Code $error.");
  }
  else
  {
    move_uploaded_file($temp,"uploaded/".$name);
    echo "File successfully uploaded!<br>";
  }


echo "Filename: ".$name."<p>";
echo "Filetype: ".$type."<p>";
echo "Filesize: ".$size."<p>";
echo "Location".$temp."<p>";


}




 ?>
