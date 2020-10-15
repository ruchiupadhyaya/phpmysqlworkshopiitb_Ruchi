<html>
<style>
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: papayawhip;}
</style>
<body> </body>
</html>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password= "";
$dbname= "marksheet";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
$division=$_SESSION['division'];

$rollno=$_SESSION['rollno'];
$sql="SELECT * FROM marks WHERE division='$division' AND rollno='$rollno' ";
$result=mysqli_query($conn,$sql);
    if(!$result)
         echo "Error: ".sql.mysqli_error($conn);

		if (mysqli_num_rows($result)>0)
		{
			while($row =mysqli_fetch_assoc($result))
			{
				$_SESSION['sub1']=$row['sub1'];
				$_SESSION['sub2']=$row['sub2'];
				$_SESSION['sub3']=$row['sub3'];
        $_SESSION['total']=$row['total'];
        $_SESSION['percent']=$row['percentage'];

				if($row['sub1'] and $row['sub2'] and $row['sub3'])
				{
					echo "
					<table border=1>
					<tr>
					    <th>Name</th>
					    <th>Subject1</th>
					    <th>Subject2</th>
					    <th>Subject3</th>
					    <th>Total marks</th>
					    <th>Percentage</th>
					</tr>
					";
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['sub1']."</td>";
					echo "<td>".$row['sub2']."</td>";
					echo "<td>".$row['sub3']."</td>";
					echo "<td>".$row['total']."</td>";
					echo "<td>".$row['percentage']."</td>";
					echo "</tr>";
					echo "</table>";
					if($row['percentage']>=60)
					{
						echo "<br><br> Congratulations!!";
					}

				}
				else
				{
					echo "Result Still in Process";
				}

			}
		}
echo "<br><br><a href='sendemail.php'>click here </a> to Send Email";
echo "<br><br><a href='studentlogout.php'>click here </a>to Log Out";
?>
