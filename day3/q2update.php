<html>
<head>
<title>Marksheet</title>
</head>
<body>
<form method="POST">
Name of Student:<input type="text" name="name"><br>
<p>Marks In Each Subject</p>
Subject 1:<input type="number" name="sub1"><br>
Subject 2:<input type="number" name="sub2"><br>
Subject 3:<input type="number" name="sub3"><br>
Subject 4:<input type="number" name="sub4"><br>
Subject 5:<input type="number" name="sub5"><br>
<input type="submit" name="submit" value="SUBMIT"><br>
<p> Update Rohan's Marks<p>
<input type="submit" name="update" value="Update"><br>


</form>
</body>
</html>

<?php
$servername= "localhost";
$username= "root";
$password= "";

$conn = mysqli_connect($servername,$username,$password,"result");
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}



if(isset($_POST['submit']))
{
   $name = $_POST['name'];
   $s1 = $_POST['sub1'];
   $s2 = $_POST['sub2'];
   $s3 = $_POST['sub3'];
   $s4 = $_POST['sub4'];
   $s5 = $_POST['sub5'];
   $total = 500;
   $marks= $s1+$s2+$s3+$s4+$s5;
   $percent= ($marks*100)/$total;
   echo "Total Marks Obtained: $marks<br>";
   echo "Total Marks: $total<br>";
   echo "Percentage: $percent<br>";

$sql="INSERT INTO `class1`(`name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total_ob`, `total marks`, `percent`)
VALUES('$name','$s1','$s2','$s3','$s4','$s5','$marks','$total','$percent')";

if (mysqli_query($conn, $sql))
{
  echo "New record created successfully";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

if(isset($_POST['update']))
{

$sub5=99;
$sql1="SELECT * FROM class1 WHERE name='Rohan'";
$res = mysqli_query($conn,$sql1);
if($res)
{
   while($row=mysqli_fetch_assoc($res))
   {
     $totalob=500;
     $markob=$row['sub1']+$row['sub2']+$row['sub3']+$row['sub4']+$sub5;
     $perce=($markob*100)/$totalob;

   }

   echo "Total Marks Obtained: $markob<br>";
   echo "Total Marks: $totalob<br>";
   echo "Percentage: $perce<br>";
   $sql2="UPDATE class1 SET sub5=$sub5, total_ob=$markob, percent=$perce WHERE name='Rohan'";




}
if (mysqli_query($conn, $sql2))
{
  echo " record updated successfully";
}
else
{
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
}


mysqli_close($conn);
?>
