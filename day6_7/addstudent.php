

<html>
<head>
  <title>Add Student</title>
  <style>
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: papayawhip;
}
h1{
         text-align: center;}

  </style>
</head>
<body>
    <h1> Add Student</h1>
    <form method="POST">
      Name : <input type="text" name="name" required><br>
      <br>
      Roll no : <input type="number" name="rollno" required><br>
      <br>
      Divison : <input type="varchar" name="division" required><br>
      <br>
      <input type="submit" name="register" value="Register"><br>
      <br>
      <br>Done Here?<input type="button" onclick="window.location='marksheetadmin.php'" class="Redirect" value="Back to Admin Home"/>
  </form>
  </body>
  </html>


  <?php
  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname= "marksheet";
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  if(!$conn)
  {
    echo "Connection failed: " . mysqli_error($conn);
  }
  if(isset($_POST['register']))
  {
     $name = $_POST['name'];
     $rollno = $_POST['rollno'];
     $division = $_POST['division'];


       $sql="INSERT INTO `marks`(`name`, `division`, `rollno`)
             VALUES ('$name','$division','$rollno')";
    if (mysqli_query($conn, $sql))
    {
        echo "Registered Successfully<br>";

    }
    else
    {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }


  }




  mysqli_close($conn);
  ?>
